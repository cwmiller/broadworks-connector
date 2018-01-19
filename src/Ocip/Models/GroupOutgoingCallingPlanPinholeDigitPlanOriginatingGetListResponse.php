<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupOutgoingCallingPlanPinholeDigitPlanOriginatingGetListResponse
 *
 * Response to GroupOutgoingCallingPlanPinholeDigitPlanOriginatingGetListRequest.
 */
class GroupOutgoingCallingPlanPinholeDigitPlanOriginatingGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName groupPermissions
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingPinholeDigitPlanDigitPatternOriginatingPermissions|null
     */
    private $groupPermissions = null;

    /**
     * @ElementName departmentPermissions
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingPinholeDigitPlanDigitPatternOriginatingDepartmentPermissions[]
     */
    private $departmentPermissions = array(
        
    );

    /**
     * Getter for groupPermissions
     *
     * @ElementName groupPermissions
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingPinholeDigitPlanDigitPatternOriginatingPermissions|null
     */
    public function getGroupPermissions()
    {
        return $this->groupPermissions;
    }

    /**
     * Setter for groupPermissions
     *
     * @ElementName groupPermissions
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingPinholeDigitPlanDigitPatternOriginatingPermissions|null $groupPermissions
     * @return $this
     */
    public function setGroupPermissions($groupPermissions)
    {
        $this->groupPermissions = $groupPermissions;
        return $this;
    }

    /**
     * Getter for departmentPermissions
     *
     * @ElementName departmentPermissions
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingPinholeDigitPlanDigitPatternOriginatingDepartmentPermissions[]
     */
    public function getDepartmentPermissions()
    {
        return $this->departmentPermissions;
    }

    /**
     * Setter for departmentPermissions
     *
     * @ElementName departmentPermissions
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingPinholeDigitPlanDigitPatternOriginatingDepartmentPermissions[] $departmentPermissions
     * @return $this
     */
    public function setDepartmentPermissions($departmentPermissions)
    {
        $this->departmentPermissions = $departmentPermissions;
        return $this;
    }

    /**
     * Adder for departmentPermissions
     *
     * @ElementName departmentPermissions
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingPinholeDigitPlanDigitPatternOriginatingDepartmentPermissions $departmentPermissions
     * @return $this
     */
    public function addDepartmentPermissions($departmentPermissions)
    {
        $this->departmentPermissions []= $departmentPermissions;
        return $this;
    }


}
