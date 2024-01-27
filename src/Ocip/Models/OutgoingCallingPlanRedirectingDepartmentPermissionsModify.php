<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * OutgoingCallingPlanRedirectingDepartmentPermissionsModify
 *
 * Outgoing Calling Plan initiating call forwards/transfer permissions for a department.
 *
 * @Groups [{"id":"a63afa661ee5c74f4700e562e88c66d0:2147","type":"sequence"}]
 */
class OutgoingCallingPlanRedirectingDepartmentPermissionsModify
{
    /**
     * @ElementName departmentKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey
     * @Abstract \CWM\BroadWorksConnector\Ocip\Models\EnterpriseDepartmentKey,\CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentKey
     * @Group a63afa661ee5c74f4700e562e88c66d0:2147
     * @var \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey|null
     */
    protected $departmentKey = null;

    /**
     * @ElementName permissions
     * @Type \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanRedirectingPermissionsModify
     * @Group a63afa661ee5c74f4700e562e88c66d0:2147
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanRedirectingPermissionsModify|null
     */
    protected $permissions = null;

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
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanRedirectingPermissionsModify
     */
    public function getPermissions()
    {
        return $this->permissions instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->permissions;
    }

    /**
     * Setter for permissions
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanRedirectingPermissionsModify $permissions
     * @return $this
     */
    public function setPermissions(\CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanRedirectingPermissionsModify $permissions)
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

