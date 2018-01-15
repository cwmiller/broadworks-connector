<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCollaborateBridgeGetInstanceListRequest
 *
 * Get a list of collaborate bridges within a group.
 *         The response is either GroupCollaborateBridgeGetInstanceListResponse or
 * ErrorResponse.
 *         It is possible to get the instances within a specified department.
 */
class GroupCollaborateBridgeGetInstanceListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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
     * @ElementName departmentName
     * @var string|null
     */
    private $departmentName = null;

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
     * Getter for departmentName
     *
     * @ElementName departmentName
     * @return string|null
     */
    public function getDepartmentName()
    {
        return $this->departmentName;
    }

    /**
     * Setter for departmentName
     *
     * @ElementName departmentName
     * @param string|null $departmentName
     * @return $this
     */
    public function setDepartmentName($departmentName)
    {
        $this->departmentName = $departmentName;
        return $this;
    }


}

