<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupMusicOnHoldGetDepartmentListResponse
 *
 * Response to the GroupMusicOnHoldGetDepartmentListRequest.
 *
 * @see GroupMusicOnHoldGetDepartmentListRequest
 * @Groups [{"id":"3a0309eb8d406fefc891f554ef114669:113","type":"sequence"}]
 */
class GroupMusicOnHoldGetDepartmentListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName hasDepartment
     * @Type bool
     * @Group 3a0309eb8d406fefc891f554ef114669:113
     * @var bool|null
     */
    protected $hasDepartment = null;

    /**
     * @ElementName department
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey
     * @Array
     * @Abstract \CWM\BroadWorksConnector\Ocip\Models\EnterpriseDepartmentKey,\CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentKey
     * @Optional
     * @Group 3a0309eb8d406fefc891f554ef114669:113
     * @var \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey[]
     */
    protected $department = [
        
    ];

    /**
     * @ElementName departmentFullPath
     * @Type string
     * @Array
     * @Optional
     * @Group 3a0309eb8d406fefc891f554ef114669:113
     * @MinLength 1
     * @var string[]
     */
    protected $departmentFullPath = [
        
    ];

    /**
     * Getter for hasDepartment
     *
     * @return bool
     */
    public function getHasDepartment()
    {
        return $this->hasDepartment instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->hasDepartment;
    }

    /**
     * Setter for hasDepartment
     *
     * @param bool $hasDepartment
     * @return $this
     */
    public function setHasDepartment($hasDepartment)
    {
        $this->hasDepartment = $hasDepartment;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHasDepartment()
    {
        $this->hasDepartment = null;
        return $this;
    }

    /**
     * Getter for department
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey[]
     */
    public function getDepartment()
    {
        return $this->department instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->department;
    }

    /**
     * Setter for department
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey[] $department
     * @return $this
     */
    public function setDepartment(array $department)
    {
        $this->department = $department;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDepartment()
    {
        $this->department = null;
        return $this;
    }

    /**
     * Adder for department
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey $department
     * @return $this
     */
    public function addDepartment($department)
    {
        $this->department[] = $department;
        return $this;
    }

    /**
     * Getter for departmentFullPath
     *
     * @return string[]
     */
    public function getDepartmentFullPath()
    {
        return $this->departmentFullPath instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->departmentFullPath;
    }

    /**
     * Setter for departmentFullPath
     *
     * @param string[] $departmentFullPath
     * @return $this
     */
    public function setDepartmentFullPath(array $departmentFullPath)
    {
        $this->departmentFullPath = $departmentFullPath;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDepartmentFullPath()
    {
        $this->departmentFullPath = null;
        return $this;
    }

    /**
     * Adder for departmentFullPath
     *
     * @param string $departmentFullPath
     * @return $this
     */
    public function addDepartmentFullPath(string $departmentFullPath)
    {
        $this->departmentFullPath[] = $departmentFullPath;
        return $this;
    }
}

