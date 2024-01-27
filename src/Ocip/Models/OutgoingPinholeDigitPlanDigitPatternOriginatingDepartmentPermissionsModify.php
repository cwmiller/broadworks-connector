<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * OutgoingPinholeDigitPlanDigitPatternOriginatingDepartmentPermissionsModify
 *
 * Modify Outgoing Pinhole Digit Plan originating call permissions for specified digit patterns.
 *
 * @Groups [{"id":"a63afa661ee5c74f4700e562e88c66d0:2294","type":"sequence"}]
 */
class OutgoingPinholeDigitPlanDigitPatternOriginatingDepartmentPermissionsModify
{
    /**
     * @ElementName departmentKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey
     * @Abstract \CWM\BroadWorksConnector\Ocip\Models\EnterpriseDepartmentKey,\CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentKey
     * @Group a63afa661ee5c74f4700e562e88c66d0:2294
     * @var \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey|null
     */
    protected $departmentKey = null;

    /**
     * @ElementName digitPatternPermissions
     * @Type \CWM\BroadWorksConnector\Ocip\Models\OutgoingPinholeDigitPlanDigitPatternOriginatingPermissions
     * @Group a63afa661ee5c74f4700e562e88c66d0:2294
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingPinholeDigitPlanDigitPatternOriginatingPermissions|null
     */
    protected $digitPatternPermissions = null;

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
     * Getter for digitPatternPermissions
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingPinholeDigitPlanDigitPatternOriginatingPermissions
     */
    public function getDigitPatternPermissions()
    {
        return $this->digitPatternPermissions instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->digitPatternPermissions;
    }

    /**
     * Setter for digitPatternPermissions
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingPinholeDigitPlanDigitPatternOriginatingPermissions $digitPatternPermissions
     * @return $this
     */
    public function setDigitPatternPermissions(\CWM\BroadWorksConnector\Ocip\Models\OutgoingPinholeDigitPlanDigitPatternOriginatingPermissions $digitPatternPermissions)
    {
        $this->digitPatternPermissions = $digitPatternPermissions;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDigitPatternPermissions()
    {
        $this->digitPatternPermissions = null;
        return $this;
    }
}

