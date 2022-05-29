<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBwDiameterRoutingPeerAddRequest
 *
 * Add a Diameter routing peer.  The realm must refer to a Diameter routing realm whose action is relay.  The destinationPeerIdentity must refer to an existing Diameter peer whose mode is active.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:2797","type":"sequence"}]
 */
class SystemBwDiameterRoutingPeerAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName instance
     * @Type \CWM\BroadWorksConnector\Ocip\Models\BwDiameterPeerInstance
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:2797
     * @var \CWM\BroadWorksConnector\Ocip\Models\BwDiameterPeerInstance|null
     */
    protected $instance = null;

    /**
     * @ElementName realm
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:2797
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $realm = null;

    /**
     * @ElementName applicationId
     * @Type \CWM\BroadWorksConnector\Ocip\Models\BwDiameterApplicationId
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:2797
     * @var \CWM\BroadWorksConnector\Ocip\Models\BwDiameterApplicationId|null
     */
    protected $applicationId = null;

    /**
     * @ElementName identity
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:2797
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $identity = null;

    /**
     * @ElementName priority
     * @Type int
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:2797
     * @MinInclusive 0
     * @MaxInclusive 65535
     * @var int|null
     */
    protected $priority = null;

    /**
     * @ElementName weight
     * @Type int
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:2797
     * @MinInclusive 0
     * @MaxInclusive 65535
     * @var int|null
     */
    protected $weight = null;

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

    /**
     * Getter for priority
     *
     * @return int
     */
    public function getPriority()
    {
        return $this->priority instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->priority;
    }

    /**
     * Setter for priority
     *
     * @param int $priority
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPriority()
    {
        $this->priority = null;
        return $this;
    }

    /**
     * Getter for weight
     *
     * @return int
     */
    public function getWeight()
    {
        return $this->weight instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->weight;
    }

    /**
     * Setter for weight
     *
     * @param int $weight
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetWeight()
    {
        $this->weight = null;
        return $this;
    }


}

