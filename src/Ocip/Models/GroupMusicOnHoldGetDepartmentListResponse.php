<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupMusicOnHoldGetDepartmentListResponse
 *
 * Response to the GroupMusicOnHoldGetDepartmentListRequest.
 *
 * @see GroupMusicOnHoldGetDepartmentListRequest
 * @Groups [{"id":"130a60503dce5611168ce780c0797cc9:110","type":"sequence"}]
 */
class GroupMusicOnHoldGetDepartmentListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName hasDepartment
     * @Type bool
     * @Group 130a60503dce5611168ce780c0797cc9:110
     * @var bool|null
     */
    private $hasDepartment = null;

    /**
     * @ElementName department
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey
     * @Array
     * @Optional
     * @Group 130a60503dce5611168ce780c0797cc9:110
     * @var \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey[]
     */
    private $department = array(
        
    );

    /**
     * @ElementName departmentFullPath
     * @Type string
     * @Array
     * @Optional
     * @Group 130a60503dce5611168ce780c0797cc9:110
     * @var string[]
     */
    private $departmentFullPath = array(
        
    );

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

