<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * IncomingCallingPlanDepartmentPermissions
 *
 * Allows or disallows various types of incoming calls for a specified department.
 */
class IncomingCallingPlanDepartmentPermissions
{

    /**
     * @ElementName departmentKey
     * @var \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey|null
     */
    private $departmentKey = null;

    /**
     * @ElementName departmentFullPathName
     * @var string|null
     */
    private $departmentFullPathName = null;

    /**
     * @ElementName allowFromWithinGroup
     * @var bool|null
     */
    private $allowFromWithinGroup = null;

    /**
     * @ElementName allowFromOutsideGroup
     * @var string|null
     */
    private $allowFromOutsideGroup = null;

    /**
     * @ElementName allowCollectCalls
     * @var bool|null
     */
    private $allowCollectCalls = null;

    /**
     * @ElementName digitPatternPermission
     * @var \CWM\BroadWorksConnector\Ocip\Models\IncomingCallingPlanDigitPatternPermission[]
     */
    private $digitPatternPermission = array(
        
    );

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
     * Getter for departmentFullPathName
     *
     * @ElementName departmentFullPathName
     * @return string|null
     */
    public function getDepartmentFullPathName()
    {
        return $this->departmentFullPathName;
    }

    /**
     * Setter for departmentFullPathName
     *
     * @ElementName departmentFullPathName
     * @param string|null $departmentFullPathName
     * @return $this
     */
    public function setDepartmentFullPathName($departmentFullPathName)
    {
        $this->departmentFullPathName = $departmentFullPathName;
        return $this;
    }

    /**
     * Getter for allowFromWithinGroup
     *
     * @ElementName allowFromWithinGroup
     * @return bool|null
     */
    public function getAllowFromWithinGroup()
    {
        return $this->allowFromWithinGroup;
    }

    /**
     * Setter for allowFromWithinGroup
     *
     * @ElementName allowFromWithinGroup
     * @param bool|null $allowFromWithinGroup
     * @return $this
     */
    public function setAllowFromWithinGroup($allowFromWithinGroup)
    {
        $this->allowFromWithinGroup = $allowFromWithinGroup;
        return $this;
    }

    /**
     * Getter for allowFromOutsideGroup
     *
     * @ElementName allowFromOutsideGroup
     * @return string|null
     */
    public function getAllowFromOutsideGroup()
    {
        return $this->allowFromOutsideGroup;
    }

    /**
     * Setter for allowFromOutsideGroup
     *
     * @ElementName allowFromOutsideGroup
     * @param string|null $allowFromOutsideGroup
     * @return $this
     */
    public function setAllowFromOutsideGroup($allowFromOutsideGroup)
    {
        $this->allowFromOutsideGroup = $allowFromOutsideGroup;
        return $this;
    }

    /**
     * Getter for allowCollectCalls
     *
     * @ElementName allowCollectCalls
     * @return bool|null
     */
    public function getAllowCollectCalls()
    {
        return $this->allowCollectCalls;
    }

    /**
     * Setter for allowCollectCalls
     *
     * @ElementName allowCollectCalls
     * @param bool|null $allowCollectCalls
     * @return $this
     */
    public function setAllowCollectCalls($allowCollectCalls)
    {
        $this->allowCollectCalls = $allowCollectCalls;
        return $this;
    }

    /**
     * Getter for digitPatternPermission
     *
     * @ElementName digitPatternPermission
     * @return \CWM\BroadWorksConnector\Ocip\Models\IncomingCallingPlanDigitPatternPermission[]
     */
    public function getDigitPatternPermission()
    {
        return $this->digitPatternPermission;
    }

    /**
     * Setter for digitPatternPermission
     *
     * @ElementName digitPatternPermission
     * @param \CWM\BroadWorksConnector\Ocip\Models\IncomingCallingPlanDigitPatternPermission[] $digitPatternPermission
     * @return $this
     */
    public function setDigitPatternPermission($digitPatternPermission)
    {
        $this->digitPatternPermission = $digitPatternPermission;
        return $this;
    }

    /**
     * Adder for digitPatternPermission
     *
     * @ElementName digitPatternPermission
     * @param \CWM\BroadWorksConnector\Ocip\Models\IncomingCallingPlanDigitPatternPermission $digitPatternPermission
     * @return $this
     */
    public function addDigitPatternPermission($digitPatternPermission)
    {
        $this->digitPatternPermission []= $digitPatternPermission;
        return $this;
    }


}

