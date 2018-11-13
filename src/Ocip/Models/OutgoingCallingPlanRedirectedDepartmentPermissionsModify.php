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
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey
     * @var \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey|null
     */
    private $departmentKey = null;

    /**
     * @ElementName permissions
     * @Type \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanRedirectedPermissionsModify
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanRedirectedPermissionsModify|null
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanRedirectedPermissionsModify
     */
    public function getPermissions()
    {
        return $this->permissions instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->permissions;
    }

    /**
     * Setter for permissions
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanRedirectedPermissionsModify $permissions
     * @return $this
     */
    public function setPermissions(\CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanRedirectedPermissionsModify $permissions)
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

