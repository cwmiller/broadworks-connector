<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupTrunkGroupGetInstanceListRequest14sp4
 *
 * Get a list of Trunk Groups for the group or enterprise.
 *         It is possible to restrict the results to a particular department, or
 * expand the list to the entire enterprise.
 *         The response is either a GroupTrunkGroupGetInstanceListResponse14sp4 or
 * an ErrorResponse.
 */
class GroupTrunkGroupGetInstanceListRequest14sp4 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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
     * @ElementName groupDepartmentName
     * @var string|null
     */
    private $groupDepartmentName = null;

    /**
     * @ElementName includeEnterpriseTrunkGroups
     * @var bool|null
     */
    private $includeEnterpriseTrunkGroups = null;

    /**
     * @ElementName onlyTrunkGroupsWithDevice
     * @var bool|null
     */
    private $onlyTrunkGroupsWithDevice = null;

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
     * Getter for groupDepartmentName
     *
     * @ElementName groupDepartmentName
     * @return string|null
     */
    public function getGroupDepartmentName()
    {
        return $this->groupDepartmentName;
    }

    /**
     * Setter for groupDepartmentName
     *
     * @ElementName groupDepartmentName
     * @param string|null $groupDepartmentName
     * @return $this
     */
    public function setGroupDepartmentName($groupDepartmentName)
    {
        $this->groupDepartmentName = $groupDepartmentName;
        return $this;
    }

    /**
     * Getter for includeEnterpriseTrunkGroups
     *
     * @ElementName includeEnterpriseTrunkGroups
     * @return bool|null
     */
    public function getIncludeEnterpriseTrunkGroups()
    {
        return $this->includeEnterpriseTrunkGroups;
    }

    /**
     * Setter for includeEnterpriseTrunkGroups
     *
     * @ElementName includeEnterpriseTrunkGroups
     * @param bool|null $includeEnterpriseTrunkGroups
     * @return $this
     */
    public function setIncludeEnterpriseTrunkGroups($includeEnterpriseTrunkGroups)
    {
        $this->includeEnterpriseTrunkGroups = $includeEnterpriseTrunkGroups;
        return $this;
    }

    /**
     * Getter for onlyTrunkGroupsWithDevice
     *
     * @ElementName onlyTrunkGroupsWithDevice
     * @return bool|null
     */
    public function getOnlyTrunkGroupsWithDevice()
    {
        return $this->onlyTrunkGroupsWithDevice;
    }

    /**
     * Setter for onlyTrunkGroupsWithDevice
     *
     * @ElementName onlyTrunkGroupsWithDevice
     * @param bool|null $onlyTrunkGroupsWithDevice
     * @return $this
     */
    public function setOnlyTrunkGroupsWithDevice($onlyTrunkGroupsWithDevice)
    {
        $this->onlyTrunkGroupsWithDevice = $onlyTrunkGroupsWithDevice;
        return $this;
    }


}

