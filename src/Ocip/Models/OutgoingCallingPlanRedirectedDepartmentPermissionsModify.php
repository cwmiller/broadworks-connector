<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * OutgoingCallingPlanRedirectedDepartmentPermissionsModify
 *
 * Outgoing Calling Plan being forwarded/transferred permissions for a department.
 */
class OutgoingCallingPlanRedirectedDepartmentPermissionsModify
{

    /**
     * @ElementName departmentKey
     * @var \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey|null
     */
    private $departmentKey = null;

    /**
     * @ElementName permissions
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanRedirectedPermissionsModify|null
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanRedirectedPermissionsModify|null
     */
    public function getPermissions()
    {
        return $this->permissions;
    }

    /**
     * Setter for permissions
     *
     * @ElementName permissions
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanRedirectedPermissionsModify|null $permissions
     * @return $this
     */
    public function setPermissions($permissions)
    {
        $this->permissions = $permissions;
        return $this;
    }


}

