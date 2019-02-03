<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallingNameRetrievalModifyRequest
 *
 * Modifies the system's calling name retrieval attributes.
 *                 The response is either a SuccessResponse or an ErrorResponse.
 *
 *                 Replaced by: SystemCallingNameRetrievalModifyRequest16sp1
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see SystemCallingNameRetrievalModifyRequest16sp1
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:14913","type":"sequence"}]
 */
class SystemCallingNameRetrievalModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName queryTimerMilliSeconds
     * @Type int
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:14913
     * @var int|null
     */
    private $queryTimerMilliSeconds = null;

    /**
     * @ElementName serverNetAddress
     * @Type string
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:14913
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $serverNetAddress = null;

    /**
     * @ElementName serverPort
     * @Type int
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:14913
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $serverPort = null;

    /**
     * @ElementName serverTransportProtocol
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TransportProtocol
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:14913
     * @var \CWM\BroadWorksConnector\Ocip\Models\TransportProtocol|null
     */
    private $serverTransportProtocol = null;

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

