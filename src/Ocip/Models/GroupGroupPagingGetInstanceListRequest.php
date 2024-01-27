<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupGroupPagingGetInstanceListRequest
 *
 * Get a list of Paging Groups instances within a group.
 *         The response is either GroupGroupPagingGetInstanceListResponse or ErrorResponse.
 *         It is possible to get the instances within a specified department.
 *
 * @see GroupGroupPagingGetInstanceListResponse
 * @see ErrorResponse
 * @Groups [{"id":"8ede928f2a9c1318573ba9c7a105655c:259","type":"sequence"}]
 */
class GroupGroupPagingGetInstanceListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 8ede928f2a9c1318573ba9c7a105655c:259
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group 8ede928f2a9c1318573ba9c7a105655c:259
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $groupId = null;

    /**
     * @ElementName groupDepartmentName
     * @Type string
     * @Optional
     * @Group 8ede928f2a9c1318573ba9c7a105655c:259
     * @MinLength 1
     * @MaxLength 50
     * @var string|null
     */
    protected $groupDepartmentName = null;

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
}

