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
     * @var \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey|null
     */
    private $departmentKey = null;

    /**
     * @ElementName permissions
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanCallMeNowPermissionsModify|null
     */
    private $permissions = null;

    /**
     * Getter for departmentKey
     *
     * @ElementName departmentKey
     * @return \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey|null
     */
    public function getDepartmentKey()
    {
        return $this->departmentKey;
    }

    /**
     * Setter for departmentKey
     *
     * @ElementName departmentKey
     * @param \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey|null $departmentKey
     * @return $this
     */
    public function setDepartmentKey($departmentKey)
    {
        $this->departmentKey = $departmentKey;
        return $this;
    }

    /**
     * Getter for permissions
     *
     * @ElementName permissions
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanCallMeNowPermissionsModify|null
     */
    public function getPermissions()
    {
        return $this->permissions;
    }

    /**
     * Setter for permissions
     *
     * @ElementName permissions
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanCallMeNowPermissionsModify|null $permissions
     * @return $this
     */
    public function setPermissions($permissions)
    {
        $this->permissions = $permissions;
        return $this;
    }


}

