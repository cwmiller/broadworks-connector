<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallingNameRetrievalModifyRequest
 *
 * Modifies the system's calling name retrieval attributes.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         
 *         Replaced by: SystemCallingNameRetrievalModifyRequest16sp1
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see SystemCallingNameRetrievalModifyRequest16sp1
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:21935","type":"sequence"}]
 */
class SystemCallingNameRetrievalModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName queryTimerMilliSeconds
     * @Type int
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:21935
     * @MinInclusive 500
     * @MaxInclusive 5000
     * @var int|null
     */
    protected $queryTimerMilliSeconds = null;

    /**
     * @ElementName serverNetAddress
     * @Type string
     * @Nillable
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:21935
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $serverNetAddress = null;

    /**
     * @ElementName serverPort
     * @Type int
     * @Nillable
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:21935
     * @MinInclusive 1025
     * @MaxInclusive 65535
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $serverPort = null;

    /**
     * @ElementName serverTransportProtocol
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TransportProtocol
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:21935
     * @var \CWM\BroadWorksConnector\Ocip\Models\TransportProtocol|null
     */
    protected $serverTransportProtocol = null;

    /**
     * Getter for queryTimerMilliSeconds
     *
     * @return int
     */
    public function getQueryTimerMilliSeconds()
    {
        return $this->queryTimerMilliSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->queryTimerMilliSeconds;
    }

    /**
     * Setter for queryTimerMilliSeconds
     *
     * @param int $queryTimerMilliSeconds
     * @return $this
     */
    public function setQueryTimerMilliSeconds($queryTimerMilliSeconds)
    {
        $this->queryTimerMilliSeconds = $queryTimerMilliSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetQueryTimerMilliSeconds()
    {
        $this->queryTimerMilliSeconds = null;
        return $this;
    }

    /**
     * Getter for serverNetAddress
     *
     * @return string|null
     */
    public function getServerNetAddress()
    {
        return $this->serverNetAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serverNetAddress;
    }

    /**
     * Setter for serverNetAddress
     *
     * @param string|null $serverNetAddress
     * @return $this
     */
    public function setServerNetAddress($serverNetAddress = null)
    {
        if ($serverNetAddress === null) {
            $this->serverNetAddress = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->serverNetAddress = $serverNetAddress;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServerNetAddress()
    {
        $this->serverNetAddress = null;
        return $this;
    }

    /**
     * Getter for serverPort
     *
     * @return int|null
     */
    public function getServerPort()
    {
        return $this->serverPort instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serverPort;
    }

    /**
     * Setter for serverPort
     *
     * @param int|null $serverPort
     * @return $this
     */
    public function setServerPort($serverPort = null)
    {
        if ($serverPort === null) {
            $this->serverPort = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->serverPort = $serverPort;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServerPort()
    {
        $this->serverPort = null;
        return $this;
    }

    /**
     * Getter for serverTransportProtocol
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TransportProtocol
     */
    public function getServerTransportProtocol()
    {
        return $this->serverTransportProtocol instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serverTransportProtocol;
    }

    /**
     * Setter for serverTransportProtocol
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TransportProtocol $serverTransportProtocol
     * @return $this
     */
    public function setServerTransportProtocol(\CWM\BroadWorksConnector\Ocip\Models\TransportProtocol $serverTransportProtocol)
    {
        $this->serverTransportProtocol = $serverTransportProtocol;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServerTransportProtocol()
    {
        $this->serverTransportProtocol = null;
        return $this;
    }
}

