<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseEnterpriseTrunkGetResponse21
 *
 * Response to EnterpriseEnterpriseTrunkGetRequest21.
 *
 * @see EnterpriseEnterpriseTrunkGetRequest21
 */
class EnterpriseEnterpriseTrunkGetResponse21 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName maximumRerouteAttempts
     * @var int|null
     */
    private $maximumRerouteAttempts = null;

    /**
     * @ElementName routeExhaustionAction
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkRouteExhaustionAction|null
     */
    private $routeExhaustionAction = null;

    /**
     * @ElementName routeExhaustionForwardAddress
     * @var string|null
     */
    private $routeExhaustionForwardAddress = null;

    /**
     * @ElementName orderedRouting
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkGetResponse21OrderedRouting|null
     */
    private $orderedRouting = null;

    /**
     * @ElementName priorityWeightedRouting
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkGetResponse21PriorityWeightedRouting|null
     */
    private $priorityWeightedRouting = null;

    /**
     * @ElementName enableCapacityManagement
     * @var bool|null
     */
    private $enableCapacityManagement = null;

    /**
     * @ElementName maxActiveCalls
     * @var int|null
     */
    private $maxActiveCalls = null;

    /**
     * @ElementName capacityExceededTrapInitialCalls
     * @var int|null
     */
    private $capacityExceededTrapInitialCalls = null;

    /**
     * @ElementName capacityExceededTrapOffsetCalls
     * @var int|null
     */
    private $capacityExceededTrapOffsetCalls = null;

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
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkRouteExhaustionAction|null
     */
    public function getRouteExhaustionAction()
    {
        return $this->routeExhaustionAction;
    }

    /**
     * Setter for routeExhaustionAction
     *
     * @ElementName routeExhaustionAction
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkRouteExhaustionAction|null $routeExhaustionAction
     * @return $this
     */
    public function setRouteExhaustionAction(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkRouteExhaustionAction $routeExhaustionAction)
    {
        $this->routeExhaustionAction = $routeExhaustionAction;
        return $this;
    }

    /**
     * Getter for routeExhaustionForwardAddress
     *
     * @ElementName routeExhaustionForwardAddress
     * @return string|null
     */
    public function getRouteExhaustionForwardAddress()
    {
        return $this->routeExhaustionForwardAddress;
    }

    /**
     * Setter for routeExhaustionForwardAddress
     *
     * @ElementName routeExhaustionForwardAddress
     * @param string|null $routeExhaustionForwardAddress
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkGetResponse21OrderedRouting|null
     */
    public function getOrderedRouting()
    {
        return $this->orderedRouting;
    }

    /**
     * Setter for orderedRouting
     *
     * @ElementName orderedRouting
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkGetResponse21OrderedRouting|null $orderedRouting
     * @return $this
     */
    public function setOrderedRouting(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkGetResponse21OrderedRouting $orderedRouting)
    {
        $this->orderedRouting = $orderedRouting;
        return $this;
    }

    /**
     * Getter for priorityWeightedRouting
     *
     * @ElementName priorityWeightedRouting
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkGetResponse21PriorityWeightedRouting|null
     */
    public function getPriorityWeightedRouting()
    {
        return $this->priorityWeightedRouting;
    }

    /**
     * Setter for priorityWeightedRouting
     *
     * @ElementName priorityWeightedRouting
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkGetResponse21PriorityWeightedRouting|null $priorityWeightedRouting
     * @return $this
     */
    public function setPriorityWeightedRouting(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkGetResponse21PriorityWeightedRouting $priorityWeightedRouting)
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
     * @return int|null
     */
    public function getMaxActiveCalls()
    {
        return $this->maxActiveCalls;
    }

    /**
     * Setter for maxActiveCalls
     *
     * @ElementName maxActiveCalls
     * @param int|null $maxActiveCalls
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
     * @return int|null
     */
    public function getCapacityExceededTrapInitialCalls()
    {
        return $this->capacityExceededTrapInitialCalls;
    }

    /**
     * Setter for capacityExceededTrapInitialCalls
     *
     * @ElementName capacityExceededTrapInitialCalls
     * @param int|null $capacityExceededTrapInitialCalls
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
     * @return int|null
     */
    public function getCapacityExceededTrapOffsetCalls()
    {
        return $this->capacityExceededTrapOffsetCalls;
    }

    /**
     * Setter for capacityExceededTrapOffsetCalls
     *
     * @ElementName capacityExceededTrapOffsetCalls
     * @param int|null $capacityExceededTrapOffsetCalls
     * @return $this
     */
    public function setCapacityExceededTrapOffsetCalls($capacityExceededTrapOffsetCalls)
    {
        $this->capacityExceededTrapOffsetCalls = $capacityExceededTrapOffsetCalls;
        return $this;
    }


}

