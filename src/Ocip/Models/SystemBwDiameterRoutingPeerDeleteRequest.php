<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBwDiameterRoutingPeerDeleteRequest
 *
 * Remove a Diameter routing peer.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemBwDiameterRoutingPeerDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName instance
     * @var string|null
     */
    private $instance = null;

    /**
     * @ElementName realm
     * @var string|null
     */
    private $realm = null;

    /**
     * @ElementName applicationId
     * @var string|null
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
     * @return string|null
     */
    public function getInstance()
    {
        return $this->instance;
    }

    /**
     * Setter for instance
     *
     * @ElementName instance
     * @param string|null $instance
     * @return $this
     */
    public function setInstance($instance)
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
     * @return string|null
     */
    public function getApplicationId()
    {
        return $this->applicationId;
    }

    /**
     * Setter for applicationId
     *
     * @ElementName applicationId
     * @param string|null $applicationId
     * @return $this
     */
    public function setApplicationId($applicationId)
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

