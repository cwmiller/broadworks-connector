<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBwDiameterPeerAddRequest22
 *
 * Add a static entry in the Diameter Peer Table.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:2709","type":"sequence"}]
 */
class SystemBwDiameterPeerAddRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName instance
     * @Type \CWM\BroadWorksConnector\Ocip\Models\BwDiameterPeerInstance
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:2709
     * @var \CWM\BroadWorksConnector\Ocip\Models\BwDiameterPeerInstance|null
     */
    private $instance = null;

    /**
     * @ElementName identity
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:2709
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $identity = null;

    /**
     * @ElementName ipAddress
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:2709
     * @MinLength 1
     * @MaxLength 39
     * @var string|null
     */
    private $ipAddress = null;

    /**
     * @ElementName port
     * @Type int
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:2709
     * @MinInclusive 1025
     * @MaxInclusive 65535
     * @var int|null
     */
    private $port = null;

    /**
     * @ElementName enabled
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:2709
     * @var bool|null
     */
    private $enabled = null;

    /**
     * @ElementName secure
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:2709
     * @var bool|null
     */
    private $secure = null;

    /**
     * Getter for instance
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\BwDiameterPeerInstance
     */
    public function getInstance()
    {
        return $this->instance instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->instance;
    }

    /**
     * Setter for instance
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\BwDiameterPeerInstance $instance
     * @return $this
     */
    public function setInstance(\CWM\BroadWorksConnector\Ocip\Models\BwDiameterPeerInstance $instance)
    {
        $this->instance = $instance;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetInstance()
    {
        $this->instance = null;
        return $this;
    }

    /**
     * Getter for identity
     *
     * @return string
     */
    public function getIdentity()
    {
        return $this->identity instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->identity;
    }

    /**
     * Setter for identity
     *
     * @param string $identity
     * @return $this
     */
    public function setIdentity($identity)
    {
        $this->identity = $identity;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIdentity()
    {
        $this->identity = null;
        return $this;
    }

    /**
     * Getter for ipAddress
     *
     * @return string
     */
    public function getIpAddress()
    {
        return $this->ipAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->ipAddress;
    }

    /**
     * Setter for ipAddress
     *
     * @param string $ipAddress
     * @return $this
     */
    public function setIpAddress($ipAddress)
    {
        $this->ipAddress = $ipAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIpAddress()
    {
        $this->ipAddress = null;
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
     * Getter for enabled
     *
     * @return bool
     */
    public function getEnabled()
    {
        return $this->enabled instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enabled;
    }

    /**
     * Setter for enabled
     *
     * @param bool $enabled
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnabled()
    {
        $this->enabled = null;
        return $this;
    }

    /**
     * Getter for secure
     *
     * @return bool
     */
    public function getSecure()
    {
        return $this->secure instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->secure;
    }

    /**
     * Setter for secure
     *
     * @param bool $secure
     * @return $this
     */
    public function setSecure($secure)
    {
        $this->secure = $secure;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSecure()
    {
        $this->secure = null;
        return $this;
    }


}

