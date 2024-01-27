<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupIncomingCallingPlanModifyListRequest
 *
 * Change the group's incoming calling plan settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"22e19489d2787693c01f531be4452169:78","type":"sequence"}]
 */
class GroupIncomingCallingPlanModifyListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 22e19489d2787693c01f531be4452169:78
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group 22e19489d2787693c01f531be4452169:78
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $groupId = null;

    /**
     * @ElementName groupPermissions
     * @Type \CWM\BroadWorksConnector\Ocip\Models\IncomingCallingPlanPermissionsModify
     * @Optional
     * @Group 22e19489d2787693c01f531be4452169:78
     * @var \CWM\BroadWorksConnector\Ocip\Models\IncomingCallingPlanPermissionsModify|null
     */
    protected $groupPermissions = null;

    /**
     * @ElementName departmentPermissions
     * @Type \CWM\BroadWorksConnector\Ocip\Models\IncomingCallingPlanDepartmentPermissionsModify
     * @Array
     * @Optional
     * @Group 22e19489d2787693c01f531be4452169:78
     * @var \CWM\BroadWorksConnector\Ocip\Models\IncomingCallingPlanDepartmentPermissionsModify[]
     */
    protected $departmentPermissions = [
        
    ];

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
     * Getter for groupPermissions
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\IncomingCallingPlanPermissionsModify
     */
    public function getGroupPermissions()
    {
        return $this->groupPermissions instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupPermissions;
    }

    /**
     * Setter for groupPermissions
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\IncomingCallingPlanPermissionsModify $groupPermissions
     * @return $this
     */
    public function setGroupPermissions(\CWM\BroadWorksConnector\Ocip\Models\IncomingCallingPlanPermissionsModify $groupPermissions)
    {
        $this->groupPermissions = $groupPermissions;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupPermissions()
    {
        $this->groupPermissions = null;
        return $this;
    }

    /**
     * Getter for departmentPermissions
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\IncomingCallingPlanDepartmentPermissionsModify[]
     */
    public function getDepartmentPermissions()
    {
        return $this->departmentPermissions instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->departmentPermissions;
    }

    /**
     * Setter for departmentPermissions
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\IncomingCallingPlanDepartmentPermissionsModify[] $departmentPermissions
     * @return $this
     */
    public function setDepartmentPermissions(array $departmentPermissions)
    {
        $this->departmentPermissions = $departmentPermissions;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDepartmentPermissions()
    {
        $this->departmentPermissions = null;
        return $this;
    }

    /**
     * Adder for departmentPermissions
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\IncomingCallingPlanDepartmentPermissionsModify $departmentPermissions
     * @return $this
     */
    public function addDepartmentPermissions($departmentPermissions)
    {
        $this->departmentPermissions[] = $departmentPermissions;
        return $this;
    }
}

