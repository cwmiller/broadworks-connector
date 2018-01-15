<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterModifyRoutingPolicyRequest
 *
 * Modify the group call center routing policy.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupCallCenterModifyRoutingPolicyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName routingPolicy
     * @var string|null
     */
    private $routingPolicy = null;

    /**
     * @ElementName routingPriorityOrder
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterRoutingPriorityOrder[]
     */
    private $routingPriorityOrder = array(
        
    );

    /**
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @ElementName groupId
     * @return string|null
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @ElementName groupId
     * @param string|null $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * Getter for routingPolicy
     *
     * @ElementName routingPolicy
     * @return string|null
     */
    public function getRoutingPolicy()
    {
        return $this->routingPolicy;
    }

    /**
     * Setter for routingPolicy
     *
     * @ElementName routingPolicy
     * @param string|null $routingPolicy
     * @return $this
     */
    public function setRoutingPolicy($routingPolicy)
    {
        $this->routingPolicy = $routingPolicy;
        return $this;
    }

    /**
     * Getter for routingPriorityOrder
     *
     * @ElementName routingPriorityOrder
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterRoutingPriorityOrder[]
     */
    public function getRoutingPriorityOrder()
    {
        return $this->routingPriorityOrder;
    }

    /**
     * Setter for routingPriorityOrder
     *
     * @ElementName routingPriorityOrder
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterRoutingPriorityOrder[] $routingPriorityOrder
     * @return $this
     */
    public function setRoutingPriorityOrder($routingPriorityOrder)
    {
        $this->routingPriorityOrder = $routingPriorityOrder;
        return $this;
    }

    /**
     * Adder for routingPriorityOrder
     *
     * @ElementName routingPriorityOrder
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterRoutingPriorityOrder $routingPriorityOrder
     * @return $this
     */
    public function addRoutingPriorityOrder($routingPriorityOrder)
    {
        $this->routingPriorityOrder []= $routingPriorityOrder;
        return $this;
    }


}

