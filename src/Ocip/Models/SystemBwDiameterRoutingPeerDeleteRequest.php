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
 */
class SystemBwDiameterRoutingPeerDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName instance
     * @var \CWM\BroadWorksConnector\Ocip\Models\BwDiameterPeerInstance|null
     */
    private $instance = null;

    /**
     * @ElementName realm
     * @var string|null
     */
    private $realm = null;

    /**
     * @ElementName applicationId
     * @var \CWM\BroadWorksConnector\Ocip\Models\BwDiameterApplicationId|null
     */
    private $applicationId = null;

    /**
     * @ElementName identity
     * @var string|null
     */
    private $identity = null;

    /**
     * Getter for instance
     *
     * @ElementName instance
     * @return \CWM\BroadWorksConnector\Ocip\Models\BwDiameterPeerInstance|null
     */
    public function getInstance()
    {
        return $this->instance;
    }

    /**
     * Setter for instance
     *
     * @ElementName instance
     * @param \CWM\BroadWorksConnector\Ocip\Models\BwDiameterPeerInstance|null $instance
     * @return $this
     */
    public function setInstance(\CWM\BroadWorksConnector\Ocip\Models\BwDiameterPeerInstance $instance)
    {
        $this->instance = $instance;
        return $this;
    }

    /**
     * Getter for realm
     *
     * @ElementName realm
     * @return string|null
     */
    public function getRealm()
    {
        return $this->realm;
    }

    /**
     * Setter for realm
     *
     * @ElementName realm
     * @param string|null $realm
     * @return $this
     */
    public function setRealm($realm)
    {
        $this->realm = $realm;
        return $this;
    }

    /**
     * Getter for applicationId
     *
     * @ElementName applicationId
     * @return \CWM\BroadWorksConnector\Ocip\Models\BwDiameterApplicationId|null
     */
    public function getApplicationId()
    {
        return $this->applicationId;
    }

    /**
     * Setter for applicationId
     *
     * @ElementName applicationId
     * @param \CWM\BroadWorksConnector\Ocip\Models\BwDiameterApplicationId|null $applicationId
     * @return $this
     */
    public function setApplicationId(\CWM\BroadWorksConnector\Ocip\Models\BwDiameterApplicationId $applicationId)
    {
        $this->applicationId = $applicationId;
        return $this;
    }

    /**
     * Getter for identity
     *
     * @ElementName identity
     * @return string|null
     */
    public function getIdentity()
    {
        return $this->identity;
    }

    /**
     * Setter for identity
     *
     * @ElementName identity
     * @param string|null $identity
     * @return $this
     */
    public function setIdentity($identity)
    {
        $this->identity = $identity;
        return $this;
    }


}

