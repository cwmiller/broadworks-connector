<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupMusicOnHoldGetDepartmentListResponse
 *
 * Response to the GroupMusicOnHoldGetDepartmentListRequest.
 *
 * @see GroupMusicOnHoldGetDepartmentListRequest
 */
class GroupMusicOnHoldGetDepartmentListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName hasDepartment
     * @var bool|null
     */
    private $hasDepartment = null;

    /**
     * @ElementName department
     * @var \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey[]
     */
    private $department = array(
        
    );

    /**
     * @ElementName departmentFullPath
     * @var string[]
     */
    private $departmentFullPath = array(
        
    );

    /**
     * Getter for hasDepartment
     *
     * @ElementName hasDepartment
     * @return bool|null
     */
    public function getHasDepartment()
    {
        return $this->hasDepartment;
    }

    /**
     * Setter for hasDepartment
     *
     * @ElementName hasDepartment
     * @param bool|null $hasDepartment
     * @return $this
     */
    public function setHasDepartment($hasDepartment)
    {
        $this->hasDepartment = $hasDepartment;
        return $this;
    }

    /**
     * Getter for department
     *
     * @ElementName department
     * @return \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey[]
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * Setter for department
     *
     * @ElementName department
     * @param \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey[] $department
     * @return $this
     */
    public function setDepartment(array $department)
    {
        $this->department = $department;
        return $this;
    }

    /**
     * Adder for department
     *
     * @ElementName department
     * @param \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey $department
     * @return $this
     */
    public function addDepartment($department)
    {
        $this->department []= $department;
        return $this;
    }

    /**
     * Getter for departmentFullPath
     *
     * @ElementName departmentFullPath
     * @return string[]
     */
    public function getDepartmentFullPath()
    {
        return $this->departmentFullPath;
    }

    /**
     * Setter for departmentFullPath
     *
     * @ElementName departmentFullPath
     * @param string[] $departmentFullPath
     * @return $this
     */
    public function setDepartmentFullPath(array $departmentFullPath)
    {
        $this->departmentFullPath = $departmentFullPath;
        return $this;
    }

    /**
     * Adder for departmentFullPath
     *
     * @ElementName departmentFullPath
     * @param string $departmentFullPath
     * @return $this
     */
    public function addDepartmentFullPath(string $departmentFullPath)
    {
        $this->departmentFullPath []= $departmentFullPath;
        return $this;
    }


}

