<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemMediaServerAddRequest14
 *
 * Request to add a Media Server to the system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:12047","type":"sequence"}]
 */
class SystemMediaServerAddRequest14 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName netAddress
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:12047
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $netAddress = null;

    /**
     * @ElementName port
     * @Type int
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:12047
     * @MinInclusive 1025
     * @MaxInclusive 65535
     * @var int|null
     */
    protected $port = null;

    /**
     * @ElementName transportProtocol
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TransportProtocol
     * @Group da582a1f8028404e70d260cf1f891033:12047
     * @var \CWM\BroadWorksConnector\Ocip\Models\TransportProtocol|null
     */
    protected $transportProtocol = null;

    /**
     * @ElementName description
     * @Type string
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:12047
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $description = null;

    /**
     * Getter for netAddress
     *
     * @return string
     */
    public function getNetAddress()
    {
        return $this->netAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->netAddress;
    }

    /**
     * Setter for netAddress
     *
     * @param string $netAddress
     * @return $this
     */
    public function setNetAddress($netAddress)
    {
        $this->netAddress = $netAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNetAddress()
    {
        $this->netAddress = null;
        return $this;
    }

    /**
     * Getter for port
     *
     * @return int
     */
    public function getPort()
    {
        return $this->port instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->port;
    }

    /**
     * Setter for port
     *
     * @param int $port
     * @return $this
     */
    public function setPort($port)
    {
        $this->port = $port;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPort()
    {
        $this->port = null;
        return $this;
    }

    /**
     * Getter for transportProtocol
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TransportProtocol
     */
    public function getTransportProtocol()
    {
        return $this->transportProtocol instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->transportProtocol;
    }

    /**
     * Setter for transportProtocol
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TransportProtocol $transportProtocol
     * @return $this
     */
    public function setTransportProtocol(\CWM\BroadWorksConnector\Ocip\Models\TransportProtocol $transportProtocol)
    {
        $this->transportProtocol = $transportProtocol;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTransportProtocol()
    {
        $this->transportProtocol = null;
        return $this;
    }

    /**
     * Getter for description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->description;
    }

    /**
     * Setter for description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDescription()
    {
        $this->description = null;
        return $this;
    }
}

