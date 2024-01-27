<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDepartmentGetListResponse
 *
 * Response to GroupDepartmentGetListRequest.
 *         The response includes two parallel arrays of department keys and department display names.
 *         
 *         Replaced by: GroupDepartmentGetListResponse18
 *
 * @see GroupDepartmentGetListRequest
 * @see GroupDepartmentGetListResponse18
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:9198","type":"sequence"}]
 */
class GroupDepartmentGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName departmentKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey
     * @Array
     * @Abstract \CWM\BroadWorksConnector\Ocip\Models\EnterpriseDepartmentKey,\CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentKey
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:9198
     * @var \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey[]
     */
    protected $departmentKey = [
        
    ];

    /**
     * @ElementName fullPathName
     * @Type string
     * @Array
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:9198
     * @MinLength 1
     * @var string[]
     */
    protected $fullPathName = [
        
    ];

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

