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
     * @return array
     * @throws \CWM\BroadWorksConnector\OCIP\OcipResponseException
     */
    public function call($command, array $args = [])
    {
        if (!$this->loggedIn) {
            $this->login();
        }

        return $this->executeCommand($command, $args);
    }

    private function login()
    {
        $authResponse = $this->executeCommand('AuthenticationRequest', [
            'userId' => $this->username
        ]);

        $nonce = $authResponse['nonce'];

        $this->executeCommand('LoginRequest14sp4', [
            'userId' => $this->username,
            'signedPassword' => md5($nonce . ':' . sha1($this->password))
        ]);

        // It's pretty safe to assume we're logged in at this point, since any authentication failures
        // would have resulted in an exception.
        $this->loggedIn = true;
    }

    /**
     * @param string $command
     * @param array $args
     * @return array
     * @throws \CWM\BroadWorksConnector\OCIP\OcipResponseException
     */
    private function executeCommand($command, array $args = [])
    {
        $xml = $this->buildCommandXml($command, $args);

        $rawResponse = $this->soap->processOCIMessage(['in0' => $xml->asXML()]);

        if (!isset($rawResponse->processOCIMessageReturn)) {
            throw new OcipResponseException('No processOCIMessageReturn in response.');
        }

        $xmlResponse = @new SimpleXMLElement($rawResponse->processOCIMessageReturn);
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
     * @return SimpleXMLElement
     */
    private function buildCommandXml($command, array $args = []) {
        $template = <<<EOL
<?xml version="1.0" encoding="ISO-8859-1"?>
<BroadsoftDocument protocol="OCI" xmlns="C" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"></BroadsoftDocument>
EOL;
        $xml = @new SimpleXMLElement($template);
        $xml->addChild('sessionId', $this->sessionId, '');
        $commandXml = $xml->addChild('command', '', '');
        $commandXml->addAttribute('xmlns:xsi:type', $command);
        foreach ($args as $k => $v) {
            if (is_bool($v)) {
                $v = $v === true ? 'true' : 'false';
            }

            $commandXml->addChild($k, $v);
        }

        return $xml;
    }
}