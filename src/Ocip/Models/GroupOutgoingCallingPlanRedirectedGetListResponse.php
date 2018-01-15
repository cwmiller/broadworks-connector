<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupOutgoingCallingPlanRedirectedGetListResponse
 *
 * Response to GroupOutgoingCallingPlanRedirectedGetListRequest.
 */
class GroupOutgoingCallingPlanRedirectedGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName groupPermissions
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanRedirectedPermissions|null
     */
    private $groupPermissions = null;

    /**
     * @ElementName departmentPermissions
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanRedirectedDepartmentPermissions[]
     */
    private $departmentPermissions = array(
        
    );

    /**
     * Getter for groupPermissions
     *
     * @ElementName groupPermissions
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanRedirectedPermissions|null
     */
    public function getGroupPermissions()
    {
        return $this->groupPermissions;
    }

    /**
     * Setter for groupPermissions
     *
     * @ElementName groupPermissions
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanRedirectedPermissions|null $groupPermissions
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanRedirectedDepartmentPermissions[]
     */
    public function getDepartmentPermissions()
    {
        return $this->departmentPermissions;
    }

    /**
     * Setter for departmentPermissions
     *
     * @ElementName departmentPermissions
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanRedirectedDepartmentPermissions[] $departmentPermissions
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanRedirectedDepartmentPermissions $departmentPermissions
     * @return $this
     */
    public function addDepartmentPermissions($departmentPermissions)
    {
        $this->departmentPermissions []= $departmentPermissions;
        return $this;
    }


}

