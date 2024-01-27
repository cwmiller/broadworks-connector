<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBwDiameterRoutingPeerDeleteRequest
 *
 * Remove a Diameter routing peer.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:2868","type":"sequence"}]
 */
class SystemBwDiameterRoutingPeerDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName instance
     * @Type \CWM\BroadWorksConnector\Ocip\Models\BwDiameterPeerInstance
     * @Group da582a1f8028404e70d260cf1f891033:2868
     * @var \CWM\BroadWorksConnector\Ocip\Models\BwDiameterPeerInstance|null
     */
    protected $instance = null;

    /**
     * @ElementName realm
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:2868
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $realm = null;

    /**
     * @ElementName applicationId
     * @Type \CWM\BroadWorksConnector\Ocip\Models\BwDiameterApplicationId
     * @Group da582a1f8028404e70d260cf1f891033:2868
     * @var \CWM\BroadWorksConnector\Ocip\Models\BwDiameterApplicationId|null
     */
    protected $applicationId = null;

    /**
     * @ElementName identity
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:2868
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
     * Getter for realm
     *
     * @return string
     */
    public function getRealm()
    {
        return $this->realm instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->realm;
    }

    /**
     * Setter for realm
     *
     * @param string $realm
     * @return $this
     */
    public function setRealm($realm)
    {
        $this->realm = $realm;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRealm()
    {
        $this->realm = null;
        return $this;
    }

    /**
     * Getter for applicationId
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\BwDiameterApplicationId
     */
    public function getApplicationId()
    {
        return $this->applicationId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->applicationId;
    }

    /**
     * Setter for applicationId
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\BwDiameterApplicationId $applicationId
     * @return $this
     */
    public function setApplicationId(\CWM\BroadWorksConnector\Ocip\Models\BwDiameterApplicationId $applicationId)
    {
        $this->applicationId = $applicationId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetApplicationId()
    {
        $this->applicationId = null;
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

