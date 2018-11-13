<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupEnterpriseTrunkModifyRequest
 *
 * Request to modify an enterprise trunk in a group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class GroupEnterpriseTrunkModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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
     * @ElementName enterpriseTrunkName
     * @Type string
     * @var string|null
     */
    private $enterpriseTrunkName = null;

    /**
     * @ElementName newEnterpriseTrunkName
     * @Type string
     * @var string|null
     */
    private $newEnterpriseTrunkName = null;

    /**
     * @ElementName maximumRerouteAttempts
     * @Type int
     * @var int|null
     */
    private $maximumRerouteAttempts = null;

    /**
     * @ElementName routeExhaustionAction
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkRouteExhaustionAction
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkRouteExhaustionAction|null
     */
    private $routeExhaustionAction = null;

    /**
     * @ElementName routeExhaustionForwardAddress
     * @Type string
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $routeExhaustionForwardAddress = null;

    /**
     * @ElementName orderedRouting
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupEnterpriseTrunkModifyRequestOrderedRouting
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupEnterpriseTrunkModifyRequestOrderedRouting|null
     */
    private $orderedRouting = null;

    /**
     * @ElementName priorityWeightedRouting
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupEnterpriseTrunkModifyRequestPriorityWeightedRouting
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupEnterpriseTrunkModifyRequestPriorityWeightedRouting|null
     */
    private $priorityWeightedRouting = null;

    /**
     * @ElementName enableCapacityManagement
     * @Type bool
     * @var bool|null
     */
    private $enableCapacityManagement = null;

    /**
     * @ElementName maxActiveCalls
     * @Type int
     * @Nillable
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $maxActiveCalls = null;

    /**
     * @ElementName capacityExceededTrapInitialCalls
     * @Type int
     * @Nillable
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $capacityExceededTrapInitialCalls = null;

    /**
     * @ElementName capacityExceededTrapOffsetCalls
     * @Type int
     * @Nillable
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $capacityExceededTrapOffsetCalls = null;

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
     * Getter for enterpriseTrunkName
     *
     * @return string
     */
    public function getEnterpriseTrunkName()
    {
        return $this->enterpriseTrunkName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enterpriseTrunkName;
    }

    /**
     * Setter for enterpriseTrunkName
     *
     * @param string $enterpriseTrunkName
     * @return $this
     */
    public function setEnterpriseTrunkName($enterpriseTrunkName)
    {
        $this->enterpriseTrunkName = $enterpriseTrunkName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnterpriseTrunkName()
    {
        $this->enterpriseTrunkName = null;
        return $this;
    }

    /**
     * Getter for newEnterpriseTrunkName
     *
     * @return string
     */
    public function getNewEnterpriseTrunkName()
    {
        return $this->newEnterpriseTrunkName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->newEnterpriseTrunkName;
    }

    /**
     * Setter for newEnterpriseTrunkName
     *
     * @param string $newEnterpriseTrunkName
     * @return $this
     */
    public function setNewEnterpriseTrunkName($newEnterpriseTrunkName)
    {
        $this->newEnterpriseTrunkName = $newEnterpriseTrunkName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNewEnterpriseTrunkName()
    {
        $this->newEnterpriseTrunkName = null;
        return $this;
    }

    /**
     * Getter for maximumRerouteAttempts
     *
     * @return int
     */
    public function getMaximumRerouteAttempts()
    {
        return $this->maximumRerouteAttempts instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maximumRerouteAttempts;
    }

    /**
     * Setter for maximumRerouteAttempts
     *
     * @param int $maximumRerouteAttempts
     * @return $this
     */
    public function setMaximumRerouteAttempts($maximumRerouteAttempts)
    {
        $this->maximumRerouteAttempts = $maximumRerouteAttempts;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaximumRerouteAttempts()
    {
        $this->maximumRerouteAttempts = null;
        return $this;
    }

    /**
     * Getter for routeExhaustionAction
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkRouteExhaustionAction
     */
    public function getRouteExhaustionAction()
    {
        return $this->routeExhaustionAction instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->routeExhaustionAction;
    }

    /**
     * Setter for routeExhaustionAction
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkRouteExhaustionAction $routeExhaustionAction
     * @return $this
     */
    public function setRouteExhaustionAction(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkRouteExhaustionAction $routeExhaustionAction)
    {
        $this->routeExhaustionAction = $routeExhaustionAction;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRouteExhaustionAction()
    {
        $this->routeExhaustionAction = null;
        return $this;
    }

    /**
     * Getter for routeExhaustionForwardAddress
     *
     * @return string|null
     */
    public function getRouteExhaustionForwardAddress()
    {
        return $this->routeExhaustionForwardAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->routeExhaustionForwardAddress;
    }

    /**
     * Setter for routeExhaustionForwardAddress
     *
     * @param string|null $routeExhaustionForwardAddress
     * @return $this
     */
    public function setRouteExhaustionForwardAddress($routeExhaustionForwardAddress)
    {
        if ($routeExhaustionForwardAddress === null) {
            $this->routeExhaustionForwardAddress = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->routeExhaustionForwardAddress = $routeExhaustionForwardAddress;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRouteExhaustionForwardAddress()
    {
        $this->routeExhaustionForwardAddress = null;
        return $this;
    }

    /**
     * Getter for orderedRouting
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupEnterpriseTrunkModifyRequestOrderedRouting
     */
    public function getOrderedRouting()
    {
        return $this->orderedRouting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->orderedRouting;
    }

    /**
     * Setter for orderedRouting
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupEnterpriseTrunkModifyRequestOrderedRouting $orderedRouting
     * @return $this
     */
    public function setOrderedRouting(\CWM\BroadWorksConnector\Ocip\Models\GroupEnterpriseTrunkModifyRequestOrderedRouting $orderedRouting)
    {
        $this->orderedRouting = $orderedRouting;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOrderedRouting()
    {
        $this->orderedRouting = null;
        return $this;
    }

    /**
     * Getter for priorityWeightedRouting
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupEnterpriseTrunkModifyRequestPriorityWeightedRouting
     */
    public function getPriorityWeightedRouting()
    {
        return $this->priorityWeightedRouting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->priorityWeightedRouting;
    }

    /**
     * Setter for priorityWeightedRouting
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupEnterpriseTrunkModifyRequestPriorityWeightedRouting $priorityWeightedRouting
     * @return $this
     */
    public function setPriorityWeightedRouting(\CWM\BroadWorksConnector\Ocip\Models\GroupEnterpriseTrunkModifyRequestPriorityWeightedRouting $priorityWeightedRouting)
    {
        $this->priorityWeightedRouting = $priorityWeightedRouting;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPriorityWeightedRouting()
    {
        $this->priorityWeightedRouting = null;
        return $this;
    }

    /**
     * Getter for enableCapacityManagement
     *
     * @return bool
     */
    public function getEnableCapacityManagement()
    {
        return $this->enableCapacityManagement instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableCapacityManagement;
    }

    /**
     * Setter for enableCapacityManagement
     *
     * @param bool $enableCapacityManagement
     * @return $this
     */
    public function setEnableCapacityManagement($enableCapacityManagement)
    {
        $this->enableCapacityManagement = $enableCapacityManagement;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableCapacityManagement()
    {
        $this->enableCapacityManagement = null;
        return $this;
    }

    /**
     * Getter for maxActiveCalls
     *
     * @return int|null
     */
    public function getMaxActiveCalls()
    {
        return $this->maxActiveCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxActiveCalls;
    }

    /**
     * Setter for maxActiveCalls
     *
     * @param int|null $maxActiveCalls
     * @return $this
     */
    public function setMaxActiveCalls($maxActiveCalls)
    {
        if ($maxActiveCalls === null) {
            $this->maxActiveCalls = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->maxActiveCalls = $maxActiveCalls;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxActiveCalls()
    {
        $this->maxActiveCalls = null;
        return $this;
    }

    /**
     * Getter for capacityExceededTrapInitialCalls
     *
     * @return int|null
     */
    public function getCapacityExceededTrapInitialCalls()
    {
        return $this->capacityExceededTrapInitialCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->capacityExceededTrapInitialCalls;
    }

    /**
     * Setter for capacityExceededTrapInitialCalls
     *
     * @param int|null $capacityExceededTrapInitialCalls
     * @return $this
     */
    public function setCapacityExceededTrapInitialCalls($capacityExceededTrapInitialCalls)
    {
        if ($capacityExceededTrapInitialCalls === null) {
            $this->capacityExceededTrapInitialCalls = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->capacityExceededTrapInitialCalls = $capacityExceededTrapInitialCalls;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCapacityExceededTrapInitialCalls()
    {
        $this->capacityExceededTrapInitialCalls = null;
        return $this;
    }

    /**
     * Getter for capacityExceededTrapOffsetCalls
     *
     * @return int|null
     */
    public function getCapacityExceededTrapOffsetCalls()
    {
        return $this->capacityExceededTrapOffsetCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->capacityExceededTrapOffsetCalls;
    }

    /**
     * Setter for capacityExceededTrapOffsetCalls
     *
     * @param int|null $capacityExceededTrapOffsetCalls
     * @return $this
     */
    public function setCapacityExceededTrapOffsetCalls($capacityExceededTrapOffsetCalls)
    {
        if ($capacityExceededTrapOffsetCalls === null) {
            $this->capacityExceededTrapOffsetCalls = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->capacityExceededTrapOffsetCalls = $capacityExceededTrapOffsetCalls;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCapacityExceededTrapOffsetCalls()
    {
        $this->capacityExceededTrapOffsetCalls = null;
        return $this;
    }


}

