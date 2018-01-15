<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNetworkSynchingServerModifyRequest
 *
 * Request to modify a Network Server in the system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemNetworkSynchingServerModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName netAddress
     * @var string|null
     */
    private $netAddress = null;

    /**
     * @ElementName port
     * @var int|null
     */
    private $port = null;

    /**
     * @ElementName description
     * @var string|null
     */
    private $description = null;

    /**
     * @ElementName becomePreferred
     * @var bool|null
     */
    private $becomePreferred = null;

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
     * @return int|null
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * Setter for port
     *
     * @ElementName port
     * @param int|null $port
     * @return $this
     */
    public function setPort($port)
    {
        $this->port = $port;
        return $this;
    }

    /**
     * Getter for description
     *
     * @ElementName description
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Setter for description
     *
     * @ElementName description
     * @param string|null $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Getter for becomePreferred
     *
     * @ElementName becomePreferred
     * @return bool|null
     */
    public function getBecomePreferred()
    {
        return $this->becomePreferred;
    }

    /**
     * Setter for becomePreferred
     *
     * @ElementName becomePreferred
     * @param bool|null $becomePreferred
     * @return $this
     */
    public function setBecomePreferred($becomePreferred)
    {
        $this->becomePreferred = $becomePreferred;
        return $this;
    }


}

