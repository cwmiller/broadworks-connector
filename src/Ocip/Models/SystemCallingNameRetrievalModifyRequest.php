<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallingNameRetrievalModifyRequest
 *
 * Modifies the system's calling name retrieval attributes.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemCallingNameRetrievalModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName queryTimerMilliSeconds
     * @var int|null
     */
    private $queryTimerMilliSeconds = null;

    /**
     * @ElementName serverNetAddress
     * @var string|null
     */
    private $serverNetAddress = null;

    /**
     * @ElementName serverPort
     * @var int|null
     */
    private $serverPort = null;

    /**
     * @ElementName serverTransportProtocol
     * @var string|null
     */
    private $serverTransportProtocol = null;

    /**
     * Getter for queryTimerMilliSeconds
     *
     * @ElementName queryTimerMilliSeconds
     * @return int|null
     */
    public function getQueryTimerMilliSeconds()
    {
        return $this->queryTimerMilliSeconds;
    }

    /**
     * Setter for queryTimerMilliSeconds
     *
     * @ElementName queryTimerMilliSeconds
     * @param int|null $queryTimerMilliSeconds
     * @return $this
     */
    public function setQueryTimerMilliSeconds($queryTimerMilliSeconds)
    {
        $this->queryTimerMilliSeconds = $queryTimerMilliSeconds;
        return $this;
    }

    /**
     * Getter for serverNetAddress
     *
     * @ElementName serverNetAddress
     * @return string|null
     */
    public function getServerNetAddress()
    {
        return $this->serverNetAddress;
    }

    /**
     * Setter for serverNetAddress
     *
     * @ElementName serverNetAddress
     * @param string|null $serverNetAddress
     * @return $this
     */
    public function setServerNetAddress($serverNetAddress)
    {
        $this->serverNetAddress = $serverNetAddress;
        return $this;
    }

    /**
     * Getter for serverPort
     *
     * @ElementName serverPort
     * @return int|null
     */
    public function getServerPort()
    {
        return $this->serverPort;
    }

    /**
     * Setter for serverPort
     *
     * @ElementName serverPort
     * @param int|null $serverPort
     * @return $this
     */
    public function setServerPort($serverPort)
    {
        $this->serverPort = $serverPort;
        return $this;
    }

    /**
     * Getter for serverTransportProtocol
     *
     * @ElementName serverTransportProtocol
     * @return string|null
     */
    public function getServerTransportProtocol()
    {
        return $this->serverTransportProtocol;
    }

    /**
     * Setter for serverTransportProtocol
     *
     * @ElementName serverTransportProtocol
     * @param string|null $serverTransportProtocol
     * @return $this
     */
    public function setServerTransportProtocol($serverTransportProtocol)
    {
        $this->serverTransportProtocol = $serverTransportProtocol;
        return $this;
    }


}

