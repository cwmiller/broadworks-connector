<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupOutgoingCallingPlanCallMeNowGetListResponse
 *
 * Response to GroupOutgoingCallingPlanCallMeNowGetListRequest.
 *
 * @see GroupOutgoingCallingPlanCallMeNowGetListRequest
 * @Groups [{"id":"a63afa661ee5c74f4700e562e88c66d0:156","type":"sequence"}]
 */
class GroupOutgoingCallingPlanCallMeNowGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName groupPermissions
     * @Type \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanCallMeNowPermissions
     * @Group a63afa661ee5c74f4700e562e88c66d0:156
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanCallMeNowPermissions|null
     */
    protected $groupPermissions = null;

    /**
     * @ElementName departmentPermissions
     * @Type \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanCallMeNowDepartmentPermissions
     * @Array
     * @Optional
     * @Group a63afa661ee5c74f4700e562e88c66d0:156
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanCallMeNowDepartmentPermissions[]
     */
    protected $departmentPermissions = [
        
    ];

    /**
     * Getter for groupPermissions
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanCallMeNowPermissions
     */
    public function getGroupPermissions()
    {
        return $this->groupPermissions instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupPermissions;
    }

    /**
     * Setter for groupPermissions
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanCallMeNowPermissions $groupPermissions
     * @return $this
     */
    public function setGroupPermissions(\CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanCallMeNowPermissions $groupPermissions)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanCallMeNowDepartmentPermissions[]
     */
    public function getDepartmentPermissions()
    {
        return $this->departmentPermissions instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->departmentPermissions;
    }

    /**
     * Setter for departmentPermissions
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanCallMeNowDepartmentPermissions[] $departmentPermissions
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanCallMeNowDepartmentPermissions $departmentPermissions
     * @return $this
     */
    public function addDepartmentPermissions($departmentPermissions)
    {
        $this->departmentPermissions[] = $departmentPermissions;
        return $this;
    }
}

