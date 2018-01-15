<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBwDiameterRoutingPeerAddRequest
 *
 * Add a Diameter routing peer.  The realm must refer to a Diameter routing realm
 * whose action is relay.  The destinationPeerIdentity must refer to an existing
 * Diameter peer whose mode is active.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemBwDiameterRoutingPeerAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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
     * @ElementName priority
     * @var int|null
     */
    private $priority = null;

    /**
     * @ElementName weight
     * @var int|null
     */
    private $weight = null;

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

    /**
     * Getter for priority
     *
     * @ElementName priority
     * @return int|null
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Setter for priority
     *
     * @ElementName priority
     * @param int|null $priority
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * Getter for weight
     *
     * @ElementName weight
     * @return int|null
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Setter for weight
     *
     * @ElementName weight
     * @param int|null $weight
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
        return $this;
    }


}

