<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemMediaServerModifyRequest
 *
 * Request to modify a Media Server in the system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemMediaServerModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName netAddress
     * @var string|null
     */
    private $netAddress = null;

    /**
     * @ElementName port
     * @Nillable
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $port = null;

    /**
     * @ElementName transportProtocol
     * @var string|null
     */
    private $transportProtocol = null;

    /**
     * @ElementName description
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $description = null;

    /**
     * Getter for netAddress
     *
     * @ElementName netAddress
     * @return string|null
     */
    public function getNetAddress()
    {
        return $this->netAddress;
    }

    /**
     * Setter for netAddress
     *
     * @ElementName netAddress
     * @param string|null $netAddress
     * @return $this
     */
    public function setNetAddress($netAddress)
    {
        $this->netAddress = $netAddress;
        return $this;
    }

    /**
     * Getter for port
     *
     * @ElementName port
     * @Nillable
     * @return int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * Setter for port
     *
     * @ElementName port
     * @Nillable
     * @param int|null|\CWM\BroadWorksConnector\Ocip\Nil $port
     * @return $this
     */
    public function setPort($port)
    {
        $this->port = $port;
        return $this;
    }

    /**
     * Getter for transportProtocol
     *
     * @ElementName transportProtocol
     * @return string|null
     */
    public function getTransportProtocol()
    {
        return $this->transportProtocol;
    }

    /**
     * Setter for transportProtocol
     *
     * @ElementName transportProtocol
     * @param string|null $transportProtocol
     * @return $this
     */
    public function setTransportProtocol($transportProtocol)
    {
        $this->transportProtocol = $transportProtocol;
        return $this;
    }

    /**
     * Getter for description
     *
     * @ElementName description
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Setter for description
     *
     * @ElementName description
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }


}

