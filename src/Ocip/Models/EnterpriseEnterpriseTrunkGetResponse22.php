<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseEnterpriseTrunkGetResponse22
 *
 * Response to EnterpriseEnterpriseTrunkGetRequest22.
 *
 * @see EnterpriseEnterpriseTrunkGetRequest22
 * @Groups [{"id":"090e91b2d78e873f5d76a2f16af08d3a:337","type":"sequence","children":[{"id":"090e91b2d78e873f5d76a2f16af08d3a:341","type":"choice"}]}]
 */
class EnterpriseEnterpriseTrunkGetResponse22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName maximumRerouteAttempts
     * @Type int
     * @Group 090e91b2d78e873f5d76a2f16af08d3a:337
     * @MinInclusive 1
     * @MaxInclusive 10
     * @var int|null
     */
    protected $maximumRerouteAttempts = null;

    /**
     * @ElementName routeExhaustionAction
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkRouteExhaustionAction
     * @Group 090e91b2d78e873f5d76a2f16af08d3a:337
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkRouteExhaustionAction|null
     */
    protected $routeExhaustionAction = null;

    /**
     * @ElementName routeExhaustionForwardAddress
     * @Type string
     * @Optional
     * @Group 090e91b2d78e873f5d76a2f16af08d3a:337
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $routeExhaustionForwardAddress = null;

    /**
     * @ElementName orderedRouting
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkGetResponse22OrderedRouting
     * @Group 090e91b2d78e873f5d76a2f16af08d3a:341
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkGetResponse22OrderedRouting|null
     */
    protected $orderedRouting = null;

    /**
     * @ElementName priorityWeightedRouting
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkGetResponse22PriorityWeightedRouting
     * @Group 090e91b2d78e873f5d76a2f16af08d3a:341
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkGetResponse22PriorityWeightedRouting|null
     */
    protected $priorityWeightedRouting = null;

    /**
     * @ElementName enableCapacityManagement
     * @Type bool
     * @Group 090e91b2d78e873f5d76a2f16af08d3a:337
     * @var bool|null
     */
    protected $enableCapacityManagement = null;

    /**
     * @ElementName maxActiveCalls
     * @Type int
     * @Optional
     * @Group 090e91b2d78e873f5d76a2f16af08d3a:337
     * @MinInclusive 1
     * @var int|null
     */
    protected $maxActiveCalls = null;

    /**
     * @ElementName capacityExceededTrapInitialCalls
     * @Type int
     * @Optional
     * @Group 090e91b2d78e873f5d76a2f16af08d3a:337
     * @MinInclusive 0
     * @var int|null
     */
    protected $capacityExceededTrapInitialCalls = null;

    /**
     * @ElementName capacityExceededTrapOffsetCalls
     * @Type int
     * @Optional
     * @Group 090e91b2d78e873f5d76a2f16af08d3a:337
     * @MinInclusive 0
     * @var int|null
     */
    protected $capacityExceededTrapOffsetCalls = null;

    /**
     * @ElementName maximumActiveIncomingCallsAllowed
     * @Type int
     * @Optional
     * @Group 090e91b2d78e873f5d76a2f16af08d3a:337
     * @MinInclusive 0
     * @var int|null
     */
    protected $maximumActiveIncomingCallsAllowed = null;

    /**
     * @ElementName maximumActiveOutgoingCallsAllowed
     * @Type int
     * @Optional
     * @Group 090e91b2d78e873f5d76a2f16af08d3a:337
     * @MinInclusive 0
     * @var int|null
     */
    protected $maximumActiveOutgoingCallsAllowed = null;

    /**
     * @ElementName minimumActiveCallsReserved
     * @Type int
     * @Optional
     * @Group 090e91b2d78e873f5d76a2f16af08d3a:337
     * @MinInclusive 0
     * @var int|null
     */
    protected $minimumActiveCallsReserved = null;

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
     * @return string
     */
    public function getRouteExhaustionForwardAddress()
    {
        return $this->routeExhaustionForwardAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->routeExhaustionForwardAddress;
    }

    /**
     * Setter for routeExhaustionForwardAddress
     *
     * @param string $routeExhaustionForwardAddress
     * @return $this
     */
    public function setRouteExhaustionForwardAddress($routeExhaustionForwardAddress)
    {
        $this->routeExhaustionForwardAddress = $routeExhaustionForwardAddress;
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkGetResponse22OrderedRouting
     */
    public function getOrderedRouting()
    {
        return $this->orderedRouting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->orderedRouting;
    }

    /**
     * Setter for orderedRouting
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkGetResponse22OrderedRouting $orderedRouting
     * @return $this
     */
    public function setOrderedRouting(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkGetResponse22OrderedRouting $orderedRouting)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkGetResponse22PriorityWeightedRouting
     */
    public function getPriorityWeightedRouting()
    {
        return $this->priorityWeightedRouting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->priorityWeightedRouting;
    }

    /**
     * Setter for priorityWeightedRouting
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkGetResponse22PriorityWeightedRouting $priorityWeightedRouting
     * @return $this
     */
    public function setPriorityWeightedRouting(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkGetResponse22PriorityWeightedRouting $priorityWeightedRouting)
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
     * @return int
     */
    public function getMaxActiveCalls()
    {
        return $this->maxActiveCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxActiveCalls;
    }

    /**
     * Setter for maxActiveCalls
     *
     * @param int $maxActiveCalls
     * @return $this
     */
    public function setMaxActiveCalls($maxActiveCalls)
    {
        $this->maxActiveCalls = $maxActiveCalls;
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
     * @return int
     */
    public function getCapacityExceededTrapInitialCalls()
    {
        return $this->capacityExceededTrapInitialCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->capacityExceededTrapInitialCalls;
    }

    /**
     * Setter for capacityExceededTrapInitialCalls
     *
     * @param int $capacityExceededTrapInitialCalls
     * @return $this
     */
    public function setCapacityExceededTrapInitialCalls($capacityExceededTrapInitialCalls)
    {
        $this->capacityExceededTrapInitialCalls = $capacityExceededTrapInitialCalls;
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
     * @return int
     */
    public function getCapacityExceededTrapOffsetCalls()
    {
        return $this->capacityExceededTrapOffsetCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->capacityExceededTrapOffsetCalls;
    }

    /**
     * Setter for capacityExceededTrapOffsetCalls
     *
     * @param int $capacityExceededTrapOffsetCalls
     * @return $this
     */
    public function setCapacityExceededTrapOffsetCalls($capacityExceededTrapOffsetCalls)
    {
        $this->capacityExceededTrapOffsetCalls = $capacityExceededTrapOffsetCalls;
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

    /**
     * Getter for maximumActiveIncomingCallsAllowed
     *
     * @return int
     */
    public function getMaximumActiveIncomingCallsAllowed()
    {
        return $this->maximumActiveIncomingCallsAllowed instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maximumActiveIncomingCallsAllowed;
    }

    /**
     * Setter for maximumActiveIncomingCallsAllowed
     *
     * @param int $maximumActiveIncomingCallsAllowed
     * @return $this
     */
    public function setMaximumActiveIncomingCallsAllowed($maximumActiveIncomingCallsAllowed)
    {
        $this->maximumActiveIncomingCallsAllowed = $maximumActiveIncomingCallsAllowed;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaximumActiveIncomingCallsAllowed()
    {
        $this->maximumActiveIncomingCallsAllowed = null;
        return $this;
    }

    /**
     * Getter for maximumActiveOutgoingCallsAllowed
     *
     * @return int
     */
    public function getMaximumActiveOutgoingCallsAllowed()
    {
        return $this->maximumActiveOutgoingCallsAllowed instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maximumActiveOutgoingCallsAllowed;
    }

    /**
     * Setter for maximumActiveOutgoingCallsAllowed
     *
     * @param int $maximumActiveOutgoingCallsAllowed
     * @return $this
     */
    public function setMaximumActiveOutgoingCallsAllowed($maximumActiveOutgoingCallsAllowed)
    {
        $this->maximumActiveOutgoingCallsAllowed = $maximumActiveOutgoingCallsAllowed;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaximumActiveOutgoingCallsAllowed()
    {
        $this->maximumActiveOutgoingCallsAllowed = null;
        return $this;
    }

    /**
     * Getter for minimumActiveCallsReserved
     *
     * @return int
     */
    public function getMinimumActiveCallsReserved()
    {
        return $this->minimumActiveCallsReserved instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->minimumActiveCallsReserved;
    }

    /**
     * Setter for minimumActiveCallsReserved
     *
     * @param int $minimumActiveCallsReserved
     * @return $this
     */
    public function setMinimumActiveCallsReserved($minimumActiveCallsReserved)
    {
        $this->minimumActiveCallsReserved = $minimumActiveCallsReserved;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMinimumActiveCallsReserved()
    {
        $this->minimumActiveCallsReserved = null;
        return $this;
    }
}

