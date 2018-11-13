<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupRoutePointExternalSystemAssignListRequest
 *
 * Assign a list of route point external systems to a group.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class GroupRoutePointExternalSystemAssignListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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
     * @ElementName routePointExternalSystem
     * @Type string
     * @Array
     * @var string[]
     */
    private $routePointExternalSystem = array(
        
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
     * Getter for routePointExternalSystem
     *
     * @return string[]
     */
    public function getRoutePointExternalSystem()
    {
        return $this->routePointExternalSystem instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->routePointExternalSystem;
    }

    /**
     * Setter for routePointExternalSystem
     *
     * @param string[] $routePointExternalSystem
     * @return $this
     */
    public function setRoutePointExternalSystem(array $routePointExternalSystem)
    {
        $this->routePointExternalSystem = $routePointExternalSystem;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRoutePointExternalSystem()
    {
        $this->routePointExternalSystem = null;
        return $this;
    }

    /**
     * Adder for routePointExternalSystem
     *
     * @param string $routePointExternalSystem
     * @return $this
     */
    public function addRoutePointExternalSystem(string $routePointExternalSystem)
    {
        $this->routePointExternalSystem[] = $routePointExternalSystem;
        return $this;
    }


}

