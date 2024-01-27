<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBwDiameterPeerDeleteRequest
 *
 * Remove a Diameter peer.  A peer cannot be removed if is referenced by a Realm Routing Table entry.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:2780","type":"sequence"}]
 */
class SystemBwDiameterPeerDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName instance
     * @Type \CWM\BroadWorksConnector\Ocip\Models\BwDiameterPeerInstance
     * @Group da582a1f8028404e70d260cf1f891033:2780
     * @var \CWM\BroadWorksConnector\Ocip\Models\BwDiameterPeerInstance|null
     */
    protected $instance = null;

    /**
     * @ElementName identity
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:2780
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $identity = null;

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
}

