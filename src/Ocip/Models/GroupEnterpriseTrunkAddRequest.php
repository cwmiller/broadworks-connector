<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupEnterpriseTrunkAddRequest
 *
 * Request to add an enterprise trunk in a group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         Replaced by: GroupEnterpriseTrunkAddRequest21.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see GroupEnterpriseTrunkAddRequest21
 */
class GroupEnterpriseTrunkAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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
     * @ElementName enterpriseTrunkName
     * @var string|null
     */
    private $enterpriseTrunkName = null;

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
     * @var string|null
     */
    private $routeExhaustionForwardAddress = null;

    /**
     * @ElementName orderedRouting
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupEnterpriseTrunkAddRequest\OrderedRouting|null
     */
    private $orderedRouting = null;

    /**
     * @ElementName priorityWeightedRouting
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupEnterpriseTrunkAddRequest\PriorityWeightedRouting|null
     */
    private $priorityWeightedRouting = null;

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
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupEnterpriseTrunkAddRequest\OrderedRouting|null
     */
    public function getOrderedRouting()
    {
        return $this->orderedRouting;
    }

    /**
     * Setter for orderedRouting
     *
     * @ElementName orderedRouting
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupEnterpriseTrunkAddRequest\OrderedRouting|null $orderedRouting
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupEnterpriseTrunkAddRequest\PriorityWeightedRouting|null
     */
    public function getPriorityWeightedRouting()
    {
        return $this->priorityWeightedRouting;
    }

    /**
     * Setter for priorityWeightedRouting
     *
     * @ElementName priorityWeightedRouting
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupEnterpriseTrunkAddRequest\PriorityWeightedRouting|null $priorityWeightedRouting
     * @return $this
     */
    public function setPriorityWeightedRouting($priorityWeightedRouting)
    {
        $this->priorityWeightedRouting = $priorityWeightedRouting;
        return $this;
    }


}

