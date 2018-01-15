<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDepartmentGetListRequest18
 *
 * Request a list of departments in a group. You may request only the
 *         list of departments defined at the group-level, or you may request
 *         the list of all departments in the group including all the departments
 *         defined within the enterprise the group belongs to.
 *         The response is either GroupDepartmentGetListResponse18 or
 * ErrorResponse.
 */
class GroupDepartmentGetListRequest18 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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
     * @ElementName includeEnterpriseDepartments
     * @var bool|null
     */
    private $includeEnterpriseDepartments = null;

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
     * Getter for includeEnterpriseDepartments
     *
     * @ElementName includeEnterpriseDepartments
     * @return bool|null
     */
    public function getIncludeEnterpriseDepartments()
    {
        return $this->includeEnterpriseDepartments;
    }

    /**
     * Setter for includeEnterpriseDepartments
     *
     * @ElementName includeEnterpriseDepartments
     * @param bool|null $includeEnterpriseDepartments
     * @return $this
     */
    public function setIncludeEnterpriseDepartments($includeEnterpriseDepartments)
    {
        $this->includeEnterpriseDepartments = $includeEnterpriseDepartments;
        return $this;
    }


}

