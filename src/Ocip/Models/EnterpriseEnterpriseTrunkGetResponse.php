<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseEnterpriseTrunkGetResponse
 *
 * Response to EnterpriseEnterpriseTrunkGetRequest.
 *         Replaced by: EnterpriseEnterpriseTrunkGetResponse21.
 *
 * @see EnterpriseEnterpriseTrunkGetRequest
 * @see EnterpriseEnterpriseTrunkGetResponse21
 */
class EnterpriseEnterpriseTrunkGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkGetResponseOrderedRouting|null
     */
    private $orderedRouting = null;

    /**
     * @ElementName priorityWeightedRouting
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkGetResponsePriorityWeightedRouting|null
     */
    private $priorityWeightedRouting = null;

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
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkGetResponseOrderedRouting|null
     */
    public function getOrderedRouting()
    {
        return $this->orderedRouting;
    }

    /**
     * Setter for orderedRouting
     *
     * @ElementName orderedRouting
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkGetResponseOrderedRouting|null $orderedRouting
     * @return $this
     */
    public function setOrderedRouting(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkGetResponseOrderedRouting $orderedRouting)
    {
        $this->orderedRouting = $orderedRouting;
        return $this;
    }

    /**
     * Getter for priorityWeightedRouting
     *
     * @ElementName priorityWeightedRouting
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkGetResponsePriorityWeightedRouting|null
     */
    public function getPriorityWeightedRouting()
    {
        return $this->priorityWeightedRouting;
    }

    /**
     * Setter for priorityWeightedRouting
     *
     * @ElementName priorityWeightedRouting
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkGetResponsePriorityWeightedRouting|null $priorityWeightedRouting
     * @return $this
     */
    public function setPriorityWeightedRouting(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkGetResponsePriorityWeightedRouting $priorityWeightedRouting)
    {
        $this->priorityWeightedRouting = $priorityWeightedRouting;
        return $this;
    }


}

