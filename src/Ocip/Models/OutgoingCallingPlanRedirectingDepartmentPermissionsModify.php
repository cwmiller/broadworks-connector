<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * OutgoingCallingPlanRedirectingDepartmentPermissionsModify
 *
 * Outgoing Calling Plan initiating call forwards/transfer permissions for a
 * department.
 */
class OutgoingCallingPlanRedirectingDepartmentPermissionsModify
{

    /**
     * @ElementName departmentKey
     * @var \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey|null
     */
    private $departmentKey = null;

    /**
     * @ElementName permissions
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanRedirectingPermissionsModify|null
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
    public function setDepartmentKey(\CWM\BroadWorksConnector\Ocip\Models\DepartmentKey $departmentKey)
    {
        $this->departmentKey = $departmentKey;
        return $this;
    }

    /**
     * Getter for permissions
     *
     * @ElementName permissions
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanRedirectingPermissionsModify|null
     */
    public function getPermissions()
    {
        return $this->permissions;
    }

    /**
     * Setter for permissions
     *
     * @ElementName permissions
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanRedirectingPermissionsModify|null $permissions
     * @return $this
     */
    public function setPermissions(\CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanRedirectingPermissionsModify $permissions)
    {
        $this->permissions = $permissions;
        return $this;
    }


}

