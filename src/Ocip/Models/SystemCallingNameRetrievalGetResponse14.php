<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallingNameRetrievalGetResponse14
 *
 * Response to SystemCallingNameRetrievalGetRequest14.
 *
 * @see SystemCallingNameRetrievalGetRequest14
 * @Groups [{"id":"1a79c7896cb04feac6eff47a5321756e:18235","type":"sequence"}]
 */
class SystemCallingNameRetrievalGetResponse14 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName queryTimerMilliSeconds
     * @Type int
     * @Group 1a79c7896cb04feac6eff47a5321756e:18235
     * @var int|null
     */
    private $queryTimerMilliSeconds = null;

    /**
     * @ElementName serverNetAddress
     * @Type string
     * @Optional
     * @Group 1a79c7896cb04feac6eff47a5321756e:18235
     * @var string|null
     */
    private $serverNetAddress = null;

    /**
     * @ElementName serverPort
     * @Type int
     * @Optional
     * @Group 1a79c7896cb04feac6eff47a5321756e:18235
     * @var int|null
     */
    private $serverPort = null;

    /**
     * @ElementName serverTransportProtocol
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TransportProtocol
     * @Group 1a79c7896cb04feac6eff47a5321756e:18235
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
     * @return string
     */
    public function getServerNetAddress()
    {
        return $this->serverNetAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serverNetAddress;
    }

    /**
     * Setter for serverNetAddress
     *
     * @param string $serverNetAddress
     * @return $this
     */
    public function setServerNetAddress($serverNetAddress)
    {
        $this->serverNetAddress = $serverNetAddress;
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
     * @return int
     */
    public function getServerPort()
    {
        return $this->serverPort instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serverPort;
    }

    /**
     * Setter for serverPort
     *
     * @param int $serverPort
     * @return $this
     */
    public function setServerPort($serverPort)
    {
        $this->serverPort = $serverPort;
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

