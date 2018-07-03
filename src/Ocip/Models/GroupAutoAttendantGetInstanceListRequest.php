<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAutoAttendantGetInstanceListRequest
 *
 * Get a list of Auto Attendant instances within a group.
 *         The response is either GroupAutoAttendantGetInstanceListResponse or
 * ErrorResponse.
 *         It is possible to get the instances within a specified department.
 *
 * @see GroupAutoAttendantGetInstanceListResponse
 * @see ErrorResponse
 */
class GroupAutoAttendantGetInstanceListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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


}

