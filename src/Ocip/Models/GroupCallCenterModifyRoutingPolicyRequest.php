<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterModifyRoutingPolicyRequest
 *
 * Modify the group call center routing policy.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class GroupCallCenterModifyRoutingPolicyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName routingPolicy
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterRoutingPolicy
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterRoutingPolicy|null
     */
    private $routingPolicy = null;

    /**
     * @ElementName routingPriorityOrder
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterRoutingPriorityOrder
     * @Array
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterRoutingPriorityOrder[]
     */
    private $routingPriorityOrder = array(
        
    );

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->groupId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @param string $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupId()
    {
        $this->groupId = null;
        return $this;
    }

    /**
     * Getter for routingPolicy
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterRoutingPolicy
     */
    public function getRoutingPolicy()
    {
        return $this->routingPolicy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->routingPolicy;
    }

    /**
     * Setter for routingPolicy
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterRoutingPolicy $routingPolicy
     * @return $this
     */
    public function setRoutingPolicy(\CWM\BroadWorksConnector\Ocip\Models\CallCenterRoutingPolicy $routingPolicy)
    {
        $this->routingPolicy = $routingPolicy;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRoutingPolicy()
    {
        $this->routingPolicy = null;
        return $this;
    }

    /**
     * Getter for routingPriorityOrder
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterRoutingPriorityOrder[]
     */
    public function getRoutingPriorityOrder()
    {
        return $this->routingPriorityOrder instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->routingPriorityOrder;
    }

    /**
     * Setter for routingPriorityOrder
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterRoutingPriorityOrder[] $routingPriorityOrder
     * @return $this
     */
    public function setRoutingPriorityOrder(array $routingPriorityOrder)
    {
        $this->routingPriorityOrder = $routingPriorityOrder;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRoutingPriorityOrder()
    {
        $this->routingPriorityOrder = null;
        return $this;
    }

    /**
     * Adder for routingPriorityOrder
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterRoutingPriorityOrder $routingPriorityOrder
     * @return $this
     */
    public function addRoutingPriorityOrder($routingPriorityOrder)
    {
        $this->routingPriorityOrder[] = $routingPriorityOrder;
        return $this;
    }


}

