<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBwDiameterPeerModifyRequest
 *
 * Modifies the attributes of an entry in the Diameter Peer Table.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:2826","type":"sequence"}]
 */
class SystemBwDiameterPeerModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName instance
     * @Type \CWM\BroadWorksConnector\Ocip\Models\BwDiameterPeerInstance
     * @Group da582a1f8028404e70d260cf1f891033:2826
     * @var \CWM\BroadWorksConnector\Ocip\Models\BwDiameterPeerInstance|null
     */
    protected $instance = null;

    /**
     * @ElementName identity
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:2826
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $identity = null;

    /**
     * @ElementName ipAddress
     * @Type string
     * @Nillable
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:2826
     * @MinLength 1
     * @MaxLength 39
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $ipAddress = null;

    /**
     * @ElementName port
     * @Type int
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:2826
     * @MinInclusive 1025
     * @MaxInclusive 65535
     * @var int|null
     */
    protected $port = null;

    /**
     * @ElementName enabled
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:2826
     * @var bool|null
     */
    protected $enabled = null;

    /**
     * @ElementName secure
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:2826
     * @var bool|null
     */
    protected $secure = null;

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
     * @return string|null
     */
    public function getIpAddress()
    {
        return $this->ipAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->ipAddress;
    }

    /**
     * Setter for ipAddress
     *
     * @param string|null $ipAddress
     * @return $this
     */
    public function setIpAddress($ipAddress = null)
    {
        if ($ipAddress === null) {
            $this->ipAddress = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->ipAddress = $ipAddress;
        }
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

