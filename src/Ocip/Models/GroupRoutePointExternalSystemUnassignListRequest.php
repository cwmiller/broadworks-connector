<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupRoutePointExternalSystemUnassignListRequest
 *
 * Unassign a list of route point external systems from a group.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupRoutePointExternalSystemUnassignListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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
     * @ElementName routePointExternalSystem
     * @var string[]
     */
    private $routePointExternalSystem = array(
        
    );

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
     * Getter for routePointExternalSystem
     *
     * @ElementName routePointExternalSystem
     * @return string[]
     */
    public function getRoutePointExternalSystem()
    {
        return $this->routePointExternalSystem;
    }

    /**
     * Setter for routePointExternalSystem
     *
     * @ElementName routePointExternalSystem
     * @param string[] $routePointExternalSystem
     * @return $this
     */
    public function setRoutePointExternalSystem($routePointExternalSystem)
    {
        $this->routePointExternalSystem = $routePointExternalSystem;
        return $this;
    }

    /**
     * Adder for routePointExternalSystem
     *
     * @ElementName routePointExternalSystem
     * @param string $routePointExternalSystem
     * @return $this
     */
    public function addRoutePointExternalSystem($routePointExternalSystem)
    {
        $this->routePointExternalSystem []= $routePointExternalSystem;
        return $this;
    }


}

