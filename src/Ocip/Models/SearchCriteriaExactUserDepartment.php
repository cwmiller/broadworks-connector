<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactUserDepartment
 *
 * Criteria for searching for a particular fully specified user's department.
 *
 * @Groups [{"id":"972fbf832439609ec8f2765c5637c3f1:1318","type":"sequence"}]
 */
class SearchCriteriaExactUserDepartment extends SearchCriteria
{
    /**
     * @ElementName departmentKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey
     * @Abstract \CWM\BroadWorksConnector\Ocip\Models\EnterpriseDepartmentKey,\CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentKey
     * @Group 972fbf832439609ec8f2765c5637c3f1:1318
     * @var \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey|null
     */
    protected $departmentKey = null;

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
}

