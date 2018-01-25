<?php

namespace CWM\BroadWorksConnector;

use CWM\BroadWorksConnector\Ocip\ITransport;
use CWM\BroadWorksConnector\Ocip\Models\AuthenticationRequest;
use CWM\BroadWorksConnector\Ocip\Models\AuthenticationResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\OCICommand;
use CWM\BroadWorksConnector\Ocip\Models\C\OCIMessage;
use CWM\BroadWorksConnector\Ocip\Models\C\OCIResponse;
use CWM\BroadWorksConnector\Ocip\Models\LoginRequest14sp4;
use CWM\BroadWorksConnector\Ocip\Models\LoginResponse14sp4;
use CWM\BroadWorksConnector\Ocip\OcipBadResponseException;
use CWM\BroadWorksConnector\Ocip\OcipLoginException;
use CWM\BroadWorksConnector\Ocip\SoapTransport;
use CWM\BroadWorksConnector\Ocip\TcpTransport;
use DOMDocument;
use DOMElement;
use ReflectionClass;

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

    /** @var ITransport */
    private $transport;

    /** @var bool */
    private $loggedIn = false;

    /**
     * @param string $url
     * @param string $username
     * @param string $password
     * @throws \InvalidArgumentException
     */
    public function __construct($url, $username, $password)
    {
        $this->username = $username;
        $this->password = $password;
        $this->sessionId = hash('sha256', mt_rand());

        $parsedUrl = parse_url($url);

        if ($parsedUrl === false) {
            throw new \InvalidArgumentException('Unable to parse URL.');
        }

        switch ($parsedUrl['scheme']) {
            case 'http':
            case 'https':
                $this->transport = new SoapTransport($url);
                break;
            case 'tcp':
                $this->transport = new TcpTransport($parsedUrl['host'], isset($parsedUrl['port']) ? $parsedUrl['port'] : 2208);
                break;
            default:
                throw new \InvalidArgumentException('Unsupported protocol ' . $parsedUrl['scheme']);
        }
    }

    /**
     * @param OCICommand $command
     * @return OCIResponse
     * @throws \CWM\BroadWorksConnector\Ocip\OcipBadResponseException
     */
    public function call(OCICommand $command)
    {
        if (!$this->loggedIn) {
            $this->login();
        }

        return $this->executeCommands([$command])[0];
    }

    /**
     * @param OCICommand[] $commands
     * @return OCIResponse[]
     * @throws \CWM\BroadWorksConnector\Ocip\OcipBadResponseException
     */
    public function callAll(array $commands)
    {
        if (!$this->loggedIn) {
            $this->login();
        }

        return $this->executeCommands($commands);
    }

    /**
     * @return bool
     */
    public function isLoggedIn()
    {
        return $this->loggedIn;
    }

    /**
     * @return ITransport
     */
    public function getTransport()
    {
        return $this->transport;
    }

    public function login()
    {
        if (!$this->loggedIn) {
            $authRequest = (new AuthenticationRequest())
                ->setUserId($this->username);

            /** @var AuthenticationResponse|ErrorResponse $authResponse */
            $authResponse = $this->executeCommands([$authRequest])[0];

            if ($authResponse instanceof ErrorResponse) {
                throw new OcipLoginException($authResponse->getSummary());
            }

            $loginRequest = (new LoginRequest14sp4())
                ->setUserId($this->username)
                ->setSignedPassword(md5($authResponse->getNonce() . ':' . sha1($this->password)));

            /** @var LoginResponse14sp4|ErrorResponse $authResponse */
            $loginResponse = $this->executeCommands([$loginRequest])[0];

            if ($loginResponse instanceof ErrorResponse) {
                throw new OcipLoginException($loginResponse->getSummary());
            }

            $this->loggedIn = true;
        }
    }

    /**
     * @param OCICommand[] $commands
     * @return OCIResponse[]
     * @throws \CWM\BroadWorksConnector\Ocip\OcipBadResponseException
     */
    private function executeCommands(array $commands)
    {
        $xml = $this->buildCommandXml($commands);

        $response = $this->transport->send($xml->saveXML());

        $document = new DOMDocument();
        @$document->loadXML($response);

        $broadsoftDocumentElement = $document->firstChild;

        if (!$broadsoftDocumentElement instanceof DOMElement || $broadsoftDocumentElement->localName !== 'BroadsoftDocument') {
            throw new OcipBadResponseException('Response doesn\'t begin with a BroadsoftDocument element.');
        }

        /** @var OCIMessage $broadsoftDocument */
        $broadsoftDocument = XmlUtils::fromXml($broadsoftDocumentElement,
            '\\CWM\\BroadWorksConnector\\Ocip\\Models\\C\\OCIMessage', '\\CWM\\BroadWorksConnector\\Ocip\\Models\\');

        if ($broadsoftDocument === null) {
            throw new OcipBadResponseException('Unable to serialize response object.');
        }

        $commandResults = $broadsoftDocument->getCommand();

        if (count($commandResults) === 0) {
            throw new OcipBadResponseException('Response doesn\'t contain any commands.');
        }

        return $commandResults;
    }

    /**
     * @param OCICommand[] $commands
     * @return DOMDocument
     */
    private function buildCommandXml(array $commands)
    {
        $document = new DOMDocument();

        $broadsoftDocument = $document->createElement('BroadsoftDocument');
        $broadsoftDocument->setAttribute('protocol', 'OCI');
        $broadsoftDocument->setAttribute('xmlns', 'C');
        $broadsoftDocument->setAttribute('xmlns:xsi', 'http://www.w3.org/2001/XMLSchema-instance');

        $sessionIdElement = $document->createElement('sessionId', $this->sessionId);
        $sessionIdElement->setAttribute('xmlns', '');

        $broadsoftDocument->appendChild($sessionIdElement);

        $document->appendChild($broadsoftDocument);

        foreach ($commands as $command) {
            $refClass = new ReflectionClass($command);

            $commandElement = $document->createElement('command');
            $commandElement->setAttribute('xmlns', '');
            $commandElement->setAttribute('xsi:type', $refClass->getShortName());

            $broadsoftDocument->appendChild($commandElement);

            XmlUtils::toXml($command, $commandElement, $document);
        }

        return $document;
    }
}