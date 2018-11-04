<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseEnterpriseTrunkModifyRequest
 *
 * Request to modify an enterprise trunk in an enterprise.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class EnterpriseEnterpriseTrunkModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName enterpriseTrunkName
     * @var string|null
     */
    private $enterpriseTrunkName = null;

    /**
     * @ElementName newEnterpriseTrunkName
     * @var string|null
     */
    private $newEnterpriseTrunkName = null;

    /**
     * @ElementName maximumRerouteAttempts
     * @var int|null
     */
    private $maximumRerouteAttempts = null;

    /**
     * @ElementName routeExhaustionAction
     * @var string|null
     */
    private $routeExhaustionAction = null;

    /**
     * @ElementName routeExhaustionForwardAddress
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $routeExhaustionForwardAddress = null;

    /**
     * @ElementName orderedRouting
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkModifyRequest\OrderedRouting|null
     */
    private $orderedRouting = null;

    /**
     * @ElementName priorityWeightedRouting
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkModifyRequest\PriorityWeightedRouting|null
     */
    private $priorityWeightedRouting = null;

    /**
     * @ElementName enableCapacityManagement
     * @var bool|null
     */
    private $enableCapacityManagement = null;

    /**
     * @ElementName maxActiveCalls
     * @Nillable
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $maxActiveCalls = null;

    /**
     * @ElementName capacityExceededTrapInitialCalls
     * @Nillable
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $capacityExceededTrapInitialCalls = null;

    /**
     * @ElementName capacityExceededTrapOffsetCalls
     * @Nillable
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $capacityExceededTrapOffsetCalls = null;

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
     * Getter for enterpriseTrunkName
     *
     * @ElementName enterpriseTrunkName
     * @return string|null
     */
    public function getEnterpriseTrunkName()
    {
        return $this->enterpriseTrunkName;
    }

    /**
     * Setter for enterpriseTrunkName
     *
     * @ElementName enterpriseTrunkName
     * @param string|null $enterpriseTrunkName
     * @return $this
     */
    public function setEnterpriseTrunkName($enterpriseTrunkName)
    {
        $this->enterpriseTrunkName = $enterpriseTrunkName;
        return $this;
    }

    /**
     * Getter for newEnterpriseTrunkName
     *
     * @ElementName newEnterpriseTrunkName
     * @return string|null
     */
    public function getNewEnterpriseTrunkName()
    {
        return $this->newEnterpriseTrunkName;
    }

    /**
     * Setter for newEnterpriseTrunkName
     *
     * @ElementName newEnterpriseTrunkName
     * @param string|null $newEnterpriseTrunkName
     * @return $this
     */
    public function setNewEnterpriseTrunkName($newEnterpriseTrunkName)
    {
        $this->newEnterpriseTrunkName = $newEnterpriseTrunkName;
        return $this;
    }

    /**
     * Getter for maximumRerouteAttempts
     *
     * @ElementName maximumRerouteAttempts
     * @return int|null
     */
    public function getMaximumRerouteAttempts()
    {
        return $this->maximumRerouteAttempts;
    }

    /**
     * Setter for maximumRerouteAttempts
     *
     * @ElementName maximumRerouteAttempts
     * @param int|null $maximumRerouteAttempts
     * @return $this
     */
    public function setMaximumRerouteAttempts($maximumRerouteAttempts)
    {
        $this->maximumRerouteAttempts = $maximumRerouteAttempts;
        return $this;
    }

    /**
     * Getter for routeExhaustionAction
     *
     * @ElementName routeExhaustionAction
     * @return string|null
     */
    public function getRouteExhaustionAction()
    {
        return $this->routeExhaustionAction;
    }

    /**
     * Setter for routeExhaustionAction
     *
     * @ElementName routeExhaustionAction
     * @param string|null $routeExhaustionAction
     * @return $this
     */
    public function setRouteExhaustionAction($routeExhaustionAction)
    {
        $this->routeExhaustionAction = $routeExhaustionAction;
        return $this;
    }

    /**
     * Getter for routeExhaustionForwardAddress
     *
     * @ElementName routeExhaustionForwardAddress
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getRouteExhaustionForwardAddress()
    {
        return $this->routeExhaustionForwardAddress;
    }

    /**
     * Setter for routeExhaustionForwardAddress
     *
     * @ElementName routeExhaustionForwardAddress
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $routeExhaustionForwardAddress
     * @return $this
     */
    public function setRouteExhaustionForwardAddress($routeExhaustionForwardAddress)
    {
        $this->routeExhaustionForwardAddress = $routeExhaustionForwardAddress;
        return $this;
    }

    /**
     * Getter for orderedRouting
     *
     * @ElementName orderedRouting
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkModifyRequest\OrderedRouting|null
     */
    public function getOrderedRouting()
    {
        return $this->orderedRouting;
    }

    /**
     * Setter for orderedRouting
     *
     * @ElementName orderedRouting
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkModifyRequest\OrderedRouting|null $orderedRouting
     * @return $this
     */
    public function setOrderedRouting($orderedRouting)
    {
        $this->orderedRouting = $orderedRouting;
        return $this;
    }

    /**
     * Getter for priorityWeightedRouting
     *
     * @ElementName priorityWeightedRouting
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkModifyRequest\PriorityWeightedRouting|null
     */
    public function getPriorityWeightedRouting()
    {
        return $this->priorityWeightedRouting;
    }

    /**
     * Setter for priorityWeightedRouting
     *
     * @ElementName priorityWeightedRouting
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkModifyRequest\PriorityWeightedRouting|null $priorityWeightedRouting
     * @return $this
     */
    public function setPriorityWeightedRouting($priorityWeightedRouting)
    {
        $this->priorityWeightedRouting = $priorityWeightedRouting;
        return $this;
    }

    /**
     * Getter for enableCapacityManagement
     *
     * @ElementName enableCapacityManagement
     * @return bool|null
     */
    public function getEnableCapacityManagement()
    {
        return $this->enableCapacityManagement;
    }

    /**
     * Setter for enableCapacityManagement
     *
     * @ElementName enableCapacityManagement
     * @param bool|null $enableCapacityManagement
     * @return $this
     */
    public function setEnableCapacityManagement($enableCapacityManagement)
    {
        $this->enableCapacityManagement = $enableCapacityManagement;
        return $this;
    }

    /**
     * Getter for maxActiveCalls
     *
     * @ElementName maxActiveCalls
     * @Nillable
     * @return int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getMaxActiveCalls()
    {
        return $this->maxActiveCalls;
    }

    /**
     * Setter for maxActiveCalls
     *
     * @ElementName maxActiveCalls
     * @Nillable
     * @param int|null|\CWM\BroadWorksConnector\Ocip\Nil $maxActiveCalls
     * @return $this
     */
    public function setMaxActiveCalls($maxActiveCalls)
    {
        $this->maxActiveCalls = $maxActiveCalls;
        return $this;
    }

    /**
     * Getter for capacityExceededTrapInitialCalls
     *
     * @ElementName capacityExceededTrapInitialCalls
     * @Nillable
     * @return int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getCapacityExceededTrapInitialCalls()
    {
        return $this->capacityExceededTrapInitialCalls;
    }

    /**
     * Setter for capacityExceededTrapInitialCalls
     *
     * @ElementName capacityExceededTrapInitialCalls
     * @Nillable
     * @param int|null|\CWM\BroadWorksConnector\Ocip\Nil $capacityExceededTrapInitialCalls
     * @return $this
     */
    public function setCapacityExceededTrapInitialCalls($capacityExceededTrapInitialCalls)
    {
        $this->capacityExceededTrapInitialCalls = $capacityExceededTrapInitialCalls;
        return $this;
    }

    /**
     * Getter for capacityExceededTrapOffsetCalls
     *
     * @ElementName capacityExceededTrapOffsetCalls
     * @Nillable
     * @return int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getCapacityExceededTrapOffsetCalls()
    {
        return $this->capacityExceededTrapOffsetCalls;
    }

    /**
     * Setter for capacityExceededTrapOffsetCalls
     *
     * @ElementName capacityExceededTrapOffsetCalls
     * @Nillable
     * @param int|null|\CWM\BroadWorksConnector\Ocip\Nil $capacityExceededTrapOffsetCalls
     * @return $this
     */
    public function setCapacityExceededTrapOffsetCalls($capacityExceededTrapOffsetCalls)
    {
        $this->capacityExceededTrapOffsetCalls = $capacityExceededTrapOffsetCalls;
        return $this;
    }


}

