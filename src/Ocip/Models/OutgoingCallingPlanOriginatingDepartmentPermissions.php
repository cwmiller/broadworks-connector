<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * OutgoingCallingPlanOriginatingDepartmentPermissions
 *
 * Outgoing Calling Plan originating call permissions for a department.
 */
class OutgoingCallingPlanOriginatingDepartmentPermissions
{

    /**
     * @ElementName departmentKey
     * @var \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey|null
     */
    private $departmentKey = null;

    /**
     * @ElementName departmentName
     * @var string|null
     */
    private $departmentName = null;

    /**
     * @ElementName permissions
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermissions|null
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
     * Getter for departmentName
     *
     * @ElementName departmentName
     * @return string|null
     */
    public function getDepartmentName()
    {
        return $this->departmentName;
    }

    /**
     * Setter for departmentName
     *
     * @ElementName departmentName
     * @param string|null $departmentName
     * @return $this
     */
    public function setDepartmentName($departmentName)
    {
        $this->departmentName = $departmentName;
        return $this;
    }

    /**
     * Getter for permissions
     *
     * @ElementName permissions
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermissions|null
     */
    public function getPermissions()
    {
        return $this->permissions;
    }

    /**
     * Setter for permissions
     *
     * @ElementName permissions
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanOriginatingPermissions|null $permissions
     * @return $this
     */
    public function setPermissions($permissions)
    {
        $this->permissions = $permissions;
        return $this;
    }


}

