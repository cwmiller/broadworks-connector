<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupOutgoingCallingPlanDigitPlanRedirectingGetListResponse
 *
 * Response to GroupOutgoingCallingPlanDigitPlanRedirectingGetListRequest.
 *
 * @see GroupOutgoingCallingPlanDigitPlanRedirectingGetListRequest
 * @Groups [{"id":"a63afa661ee5c74f4700e562e88c66d0:386","type":"sequence"}]
 */
class GroupOutgoingCallingPlanDigitPlanRedirectingGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName groupPermissions
     * @Type \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanDigitPatternRedirectingPermissions
     * @Optional
     * @Group a63afa661ee5c74f4700e562e88c66d0:386
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanDigitPatternRedirectingPermissions|null
     */
    protected $groupPermissions = null;

    /**
     * @ElementName departmentPermissions
     * @Type \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanDigitPatternRedirectingDepartmentPermissions
     * @Array
     * @Optional
     * @Group a63afa661ee5c74f4700e562e88c66d0:386
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanDigitPatternRedirectingDepartmentPermissions[]
     */
    protected $departmentPermissions = [
        
    ];

    /**
     * Getter for groupPermissions
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanDigitPatternRedirectingPermissions
     */
    public function getGroupPermissions()
    {
        return $this->groupPermissions instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupPermissions;
    }

    /**
     * Setter for groupPermissions
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanDigitPatternRedirectingPermissions $groupPermissions
     * @return $this
     */
    public function setGroupPermissions(\CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanDigitPatternRedirectingPermissions $groupPermissions)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanDigitPatternRedirectingDepartmentPermissions[]
     */
    public function getDepartmentPermissions()
    {
        return $this->departmentPermissions instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->departmentPermissions;
    }

    /**
     * Setter for departmentPermissions
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanDigitPatternRedirectingDepartmentPermissions[] $departmentPermissions
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanDigitPatternRedirectingDepartmentPermissions $departmentPermissions
     * @return $this
     */
    public function addDepartmentPermissions($departmentPermissions)
    {
        $this->departmentPermissions[] = $departmentPermissions;
        return $this;
    }
}

