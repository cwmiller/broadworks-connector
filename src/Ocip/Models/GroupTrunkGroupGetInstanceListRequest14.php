<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupTrunkGroupGetInstanceListRequest14
 *
 * Get a list of Trunk Groups for the group or enterprise.
 *         It is possible to restrict the results to a particular department, or
 * expand the list to the entire enterprise.
 *         The response is either a GroupTrunkGroupGetInstanceListResponse14 or an
 * ErrorResponse.
 *
 * @see GroupTrunkGroupGetInstanceListResponse14
 * @see ErrorResponse
 */
class GroupTrunkGroupGetInstanceListRequest14 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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
     * @ElementName groupDepartmentName
     * @Type string
     * @var string|null
     */
    private $groupDepartmentName = null;

    /**
     * @ElementName includeEnterpriseTrunkGroups
     * @Type bool
     * @var bool|null
     */
    private $includeEnterpriseTrunkGroups = null;

    /**
     * @ElementName onlyTrunkGroupsWithDevice
     * @Type bool
     * @var bool|null
     */
    private $onlyTrunkGroupsWithDevice = null;

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
     * Getter for groupDepartmentName
     *
     * @return string
     */
    public function getGroupDepartmentName()
    {
        return $this->groupDepartmentName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupDepartmentName;
    }

    /**
     * Setter for groupDepartmentName
     *
     * @param string $groupDepartmentName
     * @return $this
     */
    public function setGroupDepartmentName($groupDepartmentName)
    {
        $this->groupDepartmentName = $groupDepartmentName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupDepartmentName()
    {
        $this->groupDepartmentName = null;
        return $this;
    }

    /**
     * Getter for includeEnterpriseTrunkGroups
     *
     * @return bool
     */
    public function getIncludeEnterpriseTrunkGroups()
    {
        return $this->includeEnterpriseTrunkGroups instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->includeEnterpriseTrunkGroups;
    }

    /**
     * Setter for includeEnterpriseTrunkGroups
     *
     * @param bool $includeEnterpriseTrunkGroups
     * @return $this
     */
    public function setIncludeEnterpriseTrunkGroups($includeEnterpriseTrunkGroups)
    {
        $this->includeEnterpriseTrunkGroups = $includeEnterpriseTrunkGroups;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIncludeEnterpriseTrunkGroups()
    {
        $this->includeEnterpriseTrunkGroups = null;
        return $this;
    }

    /**
     * Getter for onlyTrunkGroupsWithDevice
     *
     * @return bool
     */
    public function getOnlyTrunkGroupsWithDevice()
    {
        return $this->onlyTrunkGroupsWithDevice instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->onlyTrunkGroupsWithDevice;
    }

    /**
     * Setter for onlyTrunkGroupsWithDevice
     *
     * @param bool $onlyTrunkGroupsWithDevice
     * @return $this
     */
    public function setOnlyTrunkGroupsWithDevice($onlyTrunkGroupsWithDevice)
    {
        $this->onlyTrunkGroupsWithDevice = $onlyTrunkGroupsWithDevice;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOnlyTrunkGroupsWithDevice()
    {
        $this->onlyTrunkGroupsWithDevice = null;
        return $this;
    }


}

