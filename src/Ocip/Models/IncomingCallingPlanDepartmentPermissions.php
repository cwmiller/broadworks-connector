<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * IncomingCallingPlanDepartmentPermissions
 *
 * Allows or disallows various types of incoming calls for a specified department.
 *
 * @Groups [{"id":"3dd296d55b56269ae23d86a934b8b35c:153","type":"sequence"}]
 */
class IncomingCallingPlanDepartmentPermissions
{

    /**
     * @ElementName departmentKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey
     * @Abstract \CWM\BroadWorksConnector\Ocip\Models\EnterpriseDepartmentKey,\CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentKey
     * @Group 3dd296d55b56269ae23d86a934b8b35c:153
     * @var \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey|null
     */
    private $departmentKey = null;

    /**
     * @ElementName departmentFullPathName
     * @Type string
     * @Group 3dd296d55b56269ae23d86a934b8b35c:153
     * @MinLength 1
     * @var string|null
     */
    private $departmentFullPathName = null;

    /**
     * @ElementName allowFromWithinGroup
     * @Type bool
     * @Group 3dd296d55b56269ae23d86a934b8b35c:153
     * @var bool|null
     */
    private $allowFromWithinGroup = null;

    /**
     * @ElementName allowFromOutsideGroup
     * @Type \CWM\BroadWorksConnector\Ocip\Models\IncomingCallingPlanOutsideCallPermission
     * @Group 3dd296d55b56269ae23d86a934b8b35c:153
     * @var \CWM\BroadWorksConnector\Ocip\Models\IncomingCallingPlanOutsideCallPermission|null
     */
    private $allowFromOutsideGroup = null;

    /**
     * @ElementName allowCollectCalls
     * @Type bool
     * @Group 3dd296d55b56269ae23d86a934b8b35c:153
     * @var bool|null
     */
    private $allowCollectCalls = null;

    /**
     * @ElementName digitPatternPermission
     * @Type \CWM\BroadWorksConnector\Ocip\Models\IncomingCallingPlanDigitPatternPermission
     * @Array
     * @Optional
     * @Group 3dd296d55b56269ae23d86a934b8b35c:153
     * @var \CWM\BroadWorksConnector\Ocip\Models\IncomingCallingPlanDigitPatternPermission[]
     */
    private $digitPatternPermission = array(
        
    );

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
     * Getter for departmentFullPathName
     *
     * @return string
     */
    public function getDepartmentFullPathName()
    {
        return $this->departmentFullPathName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->departmentFullPathName;
    }

    /**
     * Setter for departmentFullPathName
     *
     * @param string $departmentFullPathName
     * @return $this
     */
    public function setDepartmentFullPathName($departmentFullPathName)
    {
        $this->departmentFullPathName = $departmentFullPathName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDepartmentFullPathName()
    {
        $this->departmentFullPathName = null;
        return $this;
    }

    /**
     * Getter for allowFromWithinGroup
     *
     * @return bool
     */
    public function getAllowFromWithinGroup()
    {
        return $this->allowFromWithinGroup instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowFromWithinGroup;
    }

    /**
     * Setter for allowFromWithinGroup
     *
     * @param bool $allowFromWithinGroup
     * @return $this
     */
    public function setAllowFromWithinGroup($allowFromWithinGroup)
    {
        $this->allowFromWithinGroup = $allowFromWithinGroup;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowFromWithinGroup()
    {
        $this->allowFromWithinGroup = null;
        return $this;
    }

    /**
     * Getter for allowFromOutsideGroup
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\IncomingCallingPlanOutsideCallPermission
     */
    public function getAllowFromOutsideGroup()
    {
        return $this->allowFromOutsideGroup instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowFromOutsideGroup;
    }

    /**
     * Setter for allowFromOutsideGroup
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\IncomingCallingPlanOutsideCallPermission $allowFromOutsideGroup
     * @return $this
     */
    public function setAllowFromOutsideGroup(\CWM\BroadWorksConnector\Ocip\Models\IncomingCallingPlanOutsideCallPermission $allowFromOutsideGroup)
    {
        $this->allowFromOutsideGroup = $allowFromOutsideGroup;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowFromOutsideGroup()
    {
        $this->allowFromOutsideGroup = null;
        return $this;
    }

    /**
     * Getter for allowCollectCalls
     *
     * @return bool
     */
    public function getAllowCollectCalls()
    {
        return $this->allowCollectCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowCollectCalls;
    }

    /**
     * Setter for allowCollectCalls
     *
     * @param bool $allowCollectCalls
     * @return $this
     */
    public function setAllowCollectCalls($allowCollectCalls)
    {
        $this->allowCollectCalls = $allowCollectCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowCollectCalls()
    {
        $this->allowCollectCalls = null;
        return $this;
    }

    /**
     * Getter for digitPatternPermission
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\IncomingCallingPlanDigitPatternPermission[]
     */
    public function getDigitPatternPermission()
    {
        return $this->digitPatternPermission instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->digitPatternPermission;
    }

    /**
     * Setter for digitPatternPermission
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\IncomingCallingPlanDigitPatternPermission[] $digitPatternPermission
     * @return $this
     */
    public function setDigitPatternPermission(array $digitPatternPermission)
    {
        $this->digitPatternPermission = $digitPatternPermission;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDigitPatternPermission()
    {
        $this->digitPatternPermission = null;
        return $this;
    }

    /**
     * Adder for digitPatternPermission
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\IncomingCallingPlanDigitPatternPermission $digitPatternPermission
     * @return $this
     */
    public function addDigitPatternPermission($digitPatternPermission)
    {
        $this->digitPatternPermission[] = $digitPatternPermission;
        return $this;
    }


}

