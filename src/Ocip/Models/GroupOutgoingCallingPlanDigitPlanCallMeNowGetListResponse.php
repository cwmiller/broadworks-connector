<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupOutgoingCallingPlanDigitPlanCallMeNowGetListResponse
 *
 * Response to GroupOutgoingCallingPlanDigitPlanCallMeNowGetListRequest.
 *
 * @see GroupOutgoingCallingPlanDigitPlanCallMeNowGetListRequest
 * @Groups [{"id":"a63afa661ee5c74f4700e562e88c66d0:282","type":"sequence"}]
 */
class GroupOutgoingCallingPlanDigitPlanCallMeNowGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName groupPermissions
     * @Type \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanDigitPatternCallMeNowPermissions
     * @Optional
     * @Group a63afa661ee5c74f4700e562e88c66d0:282
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanDigitPatternCallMeNowPermissions|null
     */
    protected $groupPermissions = null;

    /**
     * @ElementName departmentPermissions
     * @Type \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanDigitPatternCallMeNowDepartmentPermissions
     * @Array
     * @Optional
     * @Group a63afa661ee5c74f4700e562e88c66d0:282
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanDigitPatternCallMeNowDepartmentPermissions[]
     */
    protected $departmentPermissions = [
        
    ];

    /**
     * Getter for groupPermissions
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanDigitPatternCallMeNowPermissions
     */
    public function getGroupPermissions()
    {
        return $this->groupPermissions instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupPermissions;
    }

    /**
     * Setter for groupPermissions
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanDigitPatternCallMeNowPermissions $groupPermissions
     * @return $this
     */
    public function setGroupPermissions(\CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanDigitPatternCallMeNowPermissions $groupPermissions)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanDigitPatternCallMeNowDepartmentPermissions[]
     */
    public function getDepartmentPermissions()
    {
        return $this->departmentPermissions instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->departmentPermissions;
    }

    /**
     * Setter for departmentPermissions
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanDigitPatternCallMeNowDepartmentPermissions[] $departmentPermissions
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanDigitPatternCallMeNowDepartmentPermissions $departmentPermissions
     * @return $this
     */
    public function addDepartmentPermissions($departmentPermissions)
    {
        $this->departmentPermissions[] = $departmentPermissions;
        return $this;
    }
}

