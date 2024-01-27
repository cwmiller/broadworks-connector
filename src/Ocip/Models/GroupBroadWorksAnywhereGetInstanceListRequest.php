<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupBroadWorksAnywhereGetInstanceListRequest
 *
 * Get a list of BroadWorks Anywhere instances within a group.
 *         The response is either GroupBroadWorksAnywhereGetInstanceListResponse or ErrorResponse.
 *         It is possible to get the instances within a specified department.
 *
 * @see GroupBroadWorksAnywhereGetInstanceListResponse
 * @see ErrorResponse
 * @Groups [{"id":"f39163d0e42e05c4a1692a62f625df9f:105","type":"sequence"}]
 */
class GroupBroadWorksAnywhereGetInstanceListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group f39163d0e42e05c4a1692a62f625df9f:105
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group f39163d0e42e05c4a1692a62f625df9f:105
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $groupId = null;

    /**
     * @ElementName groupDepartmentName
     * @Type string
     * @Optional
     * @Group f39163d0e42e05c4a1692a62f625df9f:105
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

