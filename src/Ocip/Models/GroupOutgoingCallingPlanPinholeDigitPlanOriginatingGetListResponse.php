<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupOutgoingCallingPlanPinholeDigitPlanOriginatingGetListResponse
 *
 * Response to GroupOutgoingCallingPlanPinholeDigitPlanOriginatingGetListRequest.
 *
 * @see GroupOutgoingCallingPlanPinholeDigitPlanOriginatingGetListRequest
 * @Groups [{"id":"a63afa661ee5c74f4700e562e88c66d0:631","type":"sequence"}]
 */
class GroupOutgoingCallingPlanPinholeDigitPlanOriginatingGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName groupPermissions
     * @Type \CWM\BroadWorksConnector\Ocip\Models\OutgoingPinholeDigitPlanDigitPatternOriginatingPermissions
     * @Optional
     * @Group a63afa661ee5c74f4700e562e88c66d0:631
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingPinholeDigitPlanDigitPatternOriginatingPermissions|null
     */
    protected $groupPermissions = null;

    /**
     * @ElementName departmentPermissions
     * @Type \CWM\BroadWorksConnector\Ocip\Models\OutgoingPinholeDigitPlanDigitPatternOriginatingDepartmentPermissions
     * @Array
     * @Optional
     * @Group a63afa661ee5c74f4700e562e88c66d0:631
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingPinholeDigitPlanDigitPatternOriginatingDepartmentPermissions[]
     */
    protected $departmentPermissions = [
        
    ];

    /**
     * Getter for groupPermissions
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingPinholeDigitPlanDigitPatternOriginatingPermissions
     */
    public function getGroupPermissions()
    {
        return $this->groupPermissions instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupPermissions;
    }

    /**
     * Setter for groupPermissions
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingPinholeDigitPlanDigitPatternOriginatingPermissions $groupPermissions
     * @return $this
     */
    public function setGroupPermissions(\CWM\BroadWorksConnector\Ocip\Models\OutgoingPinholeDigitPlanDigitPatternOriginatingPermissions $groupPermissions)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingPinholeDigitPlanDigitPatternOriginatingDepartmentPermissions[]
     */
    public function getDepartmentPermissions()
    {
        return $this->departmentPermissions instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->departmentPermissions;
    }

    /**
     * Setter for departmentPermissions
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingPinholeDigitPlanDigitPatternOriginatingDepartmentPermissions[] $departmentPermissions
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingPinholeDigitPlanDigitPatternOriginatingDepartmentPermissions $departmentPermissions
     * @return $this
     */
    public function addDepartmentPermissions($departmentPermissions)
    {
        $this->departmentPermissions[] = $departmentPermissions;
        return $this;
    }
}

