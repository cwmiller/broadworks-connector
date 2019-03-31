<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDepartmentGetListResponse
 *
 * Response to GroupDepartmentGetListRequest.
 *                 The response includes two parallel arrays of department keys and department display names.
 *
 *                 Replaced by: GroupDepartmentGetListResponse18
 *
 * @see GroupDepartmentGetListRequest
 * @see GroupDepartmentGetListResponse18
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:19441","type":"sequence"}]
 */
class GroupDepartmentGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName departmentKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey
     * @Array
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:19441
     * @var \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey[]
     */
    private $departmentKey = array(
        
    );

    /**
     * @ElementName fullPathName
     * @Type string
     * @Array
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:19441
     * @MinLength 1
     * @var string[]
     */
    private $fullPathName = array(
        
    );

    /**
     * Getter for departmentKey
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey[]
     */
    public function getDepartmentKey()
    {
        return $this->departmentKey instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->departmentKey;
    }

    /**
     * Setter for departmentKey
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey[] $departmentKey
     * @return $this
     */
    public function setDepartmentKey(array $departmentKey)
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
     * Adder for departmentKey
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey $departmentKey
     * @return $this
     */
    public function addDepartmentKey($departmentKey)
    {
        $this->departmentKey[] = $departmentKey;
        return $this;
    }

    /**
     * Getter for fullPathName
     *
     * @return string[]
     */
    public function getFullPathName()
    {
        return $this->fullPathName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->fullPathName;
    }

    /**
     * Setter for fullPathName
     *
     * @param string[] $fullPathName
     * @return $this
     */
    public function setFullPathName(array $fullPathName)
    {
        $this->fullPathName = $fullPathName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFullPathName()
    {
        $this->fullPathName = null;
        return $this;
    }

    /**
     * Adder for fullPathName
     *
     * @param string $fullPathName
     * @return $this
     */
    public function addFullPathName(string $fullPathName)
    {
        $this->fullPathName[] = $fullPathName;
        return $this;
    }


}

