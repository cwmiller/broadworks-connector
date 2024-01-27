<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * OutgoingCallingPlanRedirectedDepartmentPermissions
 *
 * Outgoing Calling Plan being forwarded/transferred permissions for a department.
 *
 * @Groups [{"id":"a63afa661ee5c74f4700e562e88c66d0:2087","type":"sequence"}]
 */
class OutgoingCallingPlanRedirectedDepartmentPermissions
{
    /**
     * @ElementName departmentKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey
     * @Abstract \CWM\BroadWorksConnector\Ocip\Models\EnterpriseDepartmentKey,\CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentKey
     * @Group a63afa661ee5c74f4700e562e88c66d0:2087
     * @var \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey|null
     */
    protected $departmentKey = null;

    /**
     * @ElementName departmentName
     * @Type string
     * @Group a63afa661ee5c74f4700e562e88c66d0:2087
     * @MinLength 1
     * @var string|null
     */
    protected $departmentName = null;

    /**
     * @ElementName permissions
     * @Type \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanRedirectedPermissions
     * @Group a63afa661ee5c74f4700e562e88c66d0:2087
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanRedirectedPermissions|null
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
     * Getter for departmentName
     *
     * @return string
     */
    public function getDepartmentName()
    {
        return $this->departmentName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->departmentName;
    }

    /**
     * Setter for departmentName
     *
     * @param string $departmentName
     * @return $this
     */
    public function setDepartmentName($departmentName)
    {
        $this->departmentName = $departmentName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDepartmentName()
    {
        $this->departmentName = null;
        return $this;
    }

    /**
     * Getter for permissions
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanRedirectedPermissions
     */
    public function getPermissions()
    {
        return $this->permissions instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->permissions;
    }

    /**
     * Setter for permissions
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanRedirectedPermissions $permissions
     * @return $this
     */
    public function setPermissions(\CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanRedirectedPermissions $permissions)
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

