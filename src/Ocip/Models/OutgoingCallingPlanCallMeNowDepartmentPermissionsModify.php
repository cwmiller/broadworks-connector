<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * OutgoingCallingPlanCallMeNowDepartmentPermissionsModify
 *
 * Modify outgoing Calling Plan for Call Me Now call permissions for a department.
 */
class OutgoingCallingPlanCallMeNowDepartmentPermissionsModify
{

    /**
     * @ElementName departmentKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey
     * @var \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey|null
     */
    private $departmentKey = null;

    /**
     * @ElementName permissions
     * @Type \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanCallMeNowPermissionsModify
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanCallMeNowPermissionsModify|null
     */
    private $permissions = null;

    /**
     * Getter for departmentKey
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey
     */
    public function getDepartmentKey()
    {
        return $this->departmentKey instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->departmentKey;
    }

    /**
     * Setter for departmentKey
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey $departmentKey
     * @return $this
     */
    public function setDepartmentKey(\CWM\BroadWorksConnector\Ocip\Models\DepartmentKey $departmentKey)
    {
        $this->departmentKey = $departmentKey;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDepartmentKey()
    {
        $this->departmentKey = null;
        return $this;
    }

    /**
     * Getter for permissions
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanCallMeNowPermissionsModify
     */
    public function getPermissions()
    {
        return $this->permissions instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->permissions;
    }

    /**
     * Setter for permissions
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanCallMeNowPermissionsModify $permissions
     * @return $this
     */
    public function setPermissions(\CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanCallMeNowPermissionsModify $permissions)
    {
        $this->permissions = $permissions;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPermissions()
    {
        $this->permissions = null;
        return $this;
    }


}

