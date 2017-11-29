<?php

namespace CWM\BroadWorksConnector;

use CWM\BroadWorksConnector\Ocip\OcipResponseException;
use SimpleXMLElement;
use SoapClient;

/**
 * Client for BroadWorks OCI-P API
 *
 * @package CWM\BroadWorksConnector
 */
class OcipClient
{
    /** @var string */
    private $sessionId;

    /** @var string */
    private $username;

    /** @var string */
    private $password;

    /** @var SoapClient */
    private $soap;

    /** @var bool */
    private $loggedIn = false;

    /** @var array|null */
    private $userDetails = null;

    /**
     * @param string $wsdlUrl
     * @param string $username
     * @param string $password
     */
    public function __construct($wsdlUrl, $username, $password)
    {
        $this->username = $username;
        $this->password = $password;
        $this->sessionId = hash('sha256', mt_rand());
        $this->soap = new SoapClient($wsdlUrl);
    }

    /**
     * @param string $command
     * @param array $args
     * @param string|null $echo A string can be passed to the API that will be returned in the response. Why you would want this, I do not know.
     * @return array
     * @throws \CWM\BroadWorksConnector\OCIP\OcipResponseException
     */
    public function call($command, array $args = [], $echo = null)
    {
        if (!$this->loggedIn) {
            $this->login();
        }

        return $this->executeCommand($command, $args, $echo);
    }

    /**
     * @return bool
     */
    public function isLoggedIn()
    {
        return $this->loggedIn;
    }

    /**
     * @return array|null
     */
    public function getUserDetails()
    {
        return $this->userDetails;
    }

    public function login()
    {
        if (!$this->loggedIn) {
            $response = $this->executeCommand('AuthenticationRequest', [
                'userId' => $this->username
            ]);

            if (!isset($response['nonce'])) {
                throw new OcipResponseException('AuthenticationRequest did not return a nonce.');
            }

            $response = $this->executeCommand('LoginRequest14sp4', [
                'userId' => $this->username,
                'signedPassword' => md5($response['nonce'] . ':' . sha1($this->password))
            ]);

            // It's pretty safe to assume we're logged in at this point, since any authentication failures
            // would have resulted in an exception.

            $this->userDetails = $response;
            unset($this->userDetails['echo']);

            $this->loggedIn = true;
        }
    }

    /**
     * @param string $command
     * @param array $args
     * @param string|null $echo
     * @return array
     * @throws \CWM\BroadWorksConnector\OCIP\OcipResponseException
     */
    private function executeCommand($command, array $args = [], $echo = null)
    {
        $xml = $this->buildCommandXml($command, $args, $echo);

        $response = $this->soap->processOCIMessage(['in0' => $xml->asXML()]);

        if (!isset($response->processOCIMessageReturn)) {
            throw new OcipResponseException('No processOCIMessageReturn in response.');
        }

        $xmlResponse = @new SimpleXMLElement($response->processOCIMessageReturn);
        $arrResponse = XmlUtils::toArray($xmlResponse);

        if (!isset($arrResponse['command'])) {
            throw new OcipResponseException('No command in response.');
        }

        $command = $arrResponse['command'];

        if (isset($command['type']) && $command['type'] === 'Error') {
            $summary = isset($command['summary']) ? $command['summary'] : 'Unknown error';
            $code = null;

            if (preg_match('/^\[Error (\d+)\]/', $summary, $matches)) {
                $code = (int)$matches[1];
                $summary = trim(preg_replace('/^\[Error (\d+)\]/', '', $summary));
            }

            throw new OcipResponseException($summary, $code, isset($command['detail']) ? $command['detail'] : null);
        }

        return $command;
    }

    /**
     * @param string $command
     * @param array $args
     * @param string|null $echo
     * @return SimpleXMLElement
     */
    private function buildCommandXml($command, array $args = [], $echo = null)
    {
        $template = <<<EOL
<?xml version="1.0" encoding="ISO-8859-1"?>
<BroadsoftDocument protocol="OCI" xmlns="C" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"></BroadsoftDocument>
EOL;

        $xml = @new SimpleXMLElement($template);
        $xml->addChild('sessionId', $this->sessionId, '');

        $commandXml = $xml->addChild('command', '', '');
        $commandXml->addAttribute('xmlns:xsi:type', $command);
        if ($echo !== null) {
            $commandXml->addAttribute('echo', $echo, '');
        }

        foreach ($args as $k => $v) {
            if (is_bool($v)) {
                $v = $v === true ? 'true' : 'false';
            } else {
                $v = (string)$v;
            }

            $commandXml->addChild($k, $v);
        }

        return $xml;
    }
}