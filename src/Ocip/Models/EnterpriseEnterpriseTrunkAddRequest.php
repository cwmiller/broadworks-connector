<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseEnterpriseTrunkAddRequest
 *
 * Request to add an enterprise trunk in an enterprise.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         Replaced by: EnterpriseEnterpriseTrunkAddRequest21
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see EnterpriseEnterpriseTrunkAddRequest21
 * @Groups [{"id":"4f0fb68b4d4b3ac50a70eeb01a628dce:1338","type":"sequence","children":[{"id":"4f0fb68b4d4b3ac50a70eeb01a628dce:1344","type":"choice"}]}]
 */
class EnterpriseEnterpriseTrunkAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:1338
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName enterpriseTrunkName
     * @Type string
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:1338
     * @var string|null
     */
    private $enterpriseTrunkName = null;

    /**
     * @ElementName maximumRerouteAttempts
     * @Type int
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:1338
     * @var int|null
     */
    private $maximumRerouteAttempts = null;

    /**
     * @ElementName routeExhaustionAction
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkRouteExhaustionAction
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:1338
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkRouteExhaustionAction|null
     */
    private $routeExhaustionAction = null;

    /**
     * @ElementName routeExhaustionForwardAddress
     * @Type string
     * @Optional
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:1338
     * @var string|null
     */
    private $routeExhaustionForwardAddress = null;

    /**
     * @ElementName orderedRouting
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkAddRequestOrderedRouting
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:1344
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkAddRequestOrderedRouting|null
     */
    private $orderedRouting = null;

    /**
     * @ElementName priorityWeightedRouting
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkAddRequestPriorityWeightedRouting
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:1344
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkAddRequestPriorityWeightedRouting|null
     */
    private $priorityWeightedRouting = null;

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
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkAddRequestOrderedRouting
     */
    public function getOrderedRouting()
    {
        return $this->orderedRouting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->orderedRouting;
    }

    /**
     * Setter for orderedRouting
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkAddRequestOrderedRouting $orderedRouting
     * @return $this
     */
    public function setOrderedRouting(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkAddRequestOrderedRouting $orderedRouting)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkAddRequestPriorityWeightedRouting
     */
    public function getPriorityWeightedRouting()
    {
        return $this->priorityWeightedRouting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->priorityWeightedRouting;
    }

    /**
     * Setter for priorityWeightedRouting
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkAddRequestPriorityWeightedRouting $priorityWeightedRouting
     * @return $this
     */
    public function setPriorityWeightedRouting(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkAddRequestPriorityWeightedRouting $priorityWeightedRouting)
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


}

