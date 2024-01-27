<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupIncomingCallingPlanGetListResponse
 *
 * Response to GroupIncomingCallingPlanGetListRequest.
 *
 * @see GroupIncomingCallingPlanGetListRequest
 * @Groups [{"id":"22e19489d2787693c01f531be4452169:61","type":"sequence"}]
 */
class GroupIncomingCallingPlanGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName groupPermissions
     * @Type \CWM\BroadWorksConnector\Ocip\Models\IncomingCallingPlanPermissions
     * @Group 22e19489d2787693c01f531be4452169:61
     * @var \CWM\BroadWorksConnector\Ocip\Models\IncomingCallingPlanPermissions|null
     */
    protected $groupPermissions = null;

    /**
     * @ElementName departmentPermissions
     * @Type \CWM\BroadWorksConnector\Ocip\Models\IncomingCallingPlanDepartmentPermissions
     * @Array
     * @Optional
     * @Group 22e19489d2787693c01f531be4452169:61
     * @var \CWM\BroadWorksConnector\Ocip\Models\IncomingCallingPlanDepartmentPermissions[]
     */
    protected $departmentPermissions = [
        
    ];

    /**
     * Getter for groupPermissions
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\IncomingCallingPlanPermissions
     */
    public function getGroupPermissions()
    {
        return $this->groupPermissions instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupPermissions;
    }

    /**
     * Setter for groupPermissions
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\IncomingCallingPlanPermissions $groupPermissions
     * @return $this
     */
    public function setGroupPermissions(\CWM\BroadWorksConnector\Ocip\Models\IncomingCallingPlanPermissions $groupPermissions)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\IncomingCallingPlanDepartmentPermissions[]
     */
    public function getDepartmentPermissions()
    {
        return $this->departmentPermissions instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->departmentPermissions;
    }

    /**
     * Setter for departmentPermissions
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\IncomingCallingPlanDepartmentPermissions[] $departmentPermissions
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\IncomingCallingPlanDepartmentPermissions $departmentPermissions
     * @return $this
     */
    public function addDepartmentPermissions($departmentPermissions)
    {
        $this->departmentPermissions[] = $departmentPermissions;
        return $this;
    }
}

