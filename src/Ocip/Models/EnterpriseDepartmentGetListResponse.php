<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseDepartmentGetListResponse
 *
 * Response to EnterpriseDepartmentGetListRequest.
 *         The response includes two parallel arrays of department keys and
 * department display names.
 *
 * @see EnterpriseDepartmentGetListRequest
 */
class EnterpriseDepartmentGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName departmentKey
     * @var \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey[]
     */
    private $departmentKey = array(
        
    );

    /**
     * @ElementName fullPathName
     * @var string[]
     */
    private $fullPathName = array(
        
    );

    /**
     * Getter for departmentKey
     *
     * @ElementName departmentKey
     * @return \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey[]
     */
    public function getDepartmentKey()
    {
        return $this->departmentKey;
    }

    /**
     * Setter for departmentKey
     *
     * @ElementName departmentKey
     * @param \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey[] $departmentKey
     * @return $this
     */
    public function setDepartmentKey(array $departmentKey)
    {
        $this->departmentKey = $departmentKey;
        return $this;
    }

    /**
     * Adder for departmentKey
     *
     * @ElementName departmentKey
     * @param \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey $departmentKey
     * @return $this
     */
    public function addDepartmentKey($departmentKey)
    {
        $this->departmentKey []= $departmentKey;
        return $this;
    }

    /**
     * Getter for fullPathName
     *
     * @ElementName fullPathName
     * @return string[]
     */
    public function getFullPathName()
    {
        return $this->fullPathName;
    }

    /**
     * Setter for fullPathName
     *
     * @ElementName fullPathName
     * @param string[] $fullPathName
     * @return $this
     */
    public function setFullPathName(array $fullPathName)
    {
        $this->fullPathName = $fullPathName;
        return $this;
    }

    /**
     * Adder for fullPathName
     *
     * @ElementName fullPathName
     * @param string $fullPathName
     * @return $this
     */
    public function addFullPathName(string $fullPathName)
    {
        $this->fullPathName []= $fullPathName;
        return $this;
    }


}

