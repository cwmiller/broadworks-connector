<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * OutgoingCallingPlanCallMeNowDepartmentPermissions
 *
 * Outgoing Calling Plan for Call Me Now call permissions for a department.
 *
 * @Groups [{"id":"6f793dfca9bd3d121bb35e0f9cf1cb2e:1748","type":"sequence"}]
 */
class OutgoingCallingPlanCallMeNowDepartmentPermissions
{

    /**
     * @ElementName departmentKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey
     * @Group 6f793dfca9bd3d121bb35e0f9cf1cb2e:1748
     * @var \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey|null
     */
    private $departmentKey = null;

    /**
     * @ElementName departmentName
     * @Type string
     * @Group 6f793dfca9bd3d121bb35e0f9cf1cb2e:1748
     * @var string|null
     */
    private $departmentName = null;

    /**
     * @ElementName permissions
     * @Type \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanCallMeNowPermissions
     * @Group 6f793dfca9bd3d121bb35e0f9cf1cb2e:1748
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanCallMeNowPermissions|null
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanCallMeNowPermissions
     */
    public function getPermissions()
    {
        return $this->permissions instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->permissions;
    }

    /**
     * Setter for permissions
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanCallMeNowPermissions $permissions
     * @return $this
     */
    public function setPermissions(\CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanCallMeNowPermissions $permissions)
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

