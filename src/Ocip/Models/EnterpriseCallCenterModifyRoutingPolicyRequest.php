<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseCallCenterModifyRoutingPolicyRequest
 *
 * Modify the enterprise call center routing policy.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"e2c537e3e39483b96620673a7012ffdd:1925","type":"sequence"}]
 */
class EnterpriseCallCenterModifyRoutingPolicyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group e2c537e3e39483b96620673a7012ffdd:1925
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName routingPolicy
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterRoutingPolicy
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:1925
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterRoutingPolicy|null
     */
    private $routingPolicy = null;

    /**
     * @ElementName routingPriorityOrder
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterRoutingPriorityOrder
     * @Array
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:1925
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

