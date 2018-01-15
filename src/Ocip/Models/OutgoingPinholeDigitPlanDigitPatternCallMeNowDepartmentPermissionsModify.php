<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * OutgoingPinholeDigitPlanDigitPatternCallMeNowDepartmentPermissionsModify
 *
 * Modify Outgoing Pinhole Digit Plan Call Me Now call permissions for specified
 * digit patterns.
 */
class OutgoingPinholeDigitPlanDigitPatternCallMeNowDepartmentPermissionsModify
{

    /**
     * @ElementName departmentKey
     * @var \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey|null
     */
    private $departmentKey = null;

    /**
     * @ElementName digitPatternPermissions
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingPinholeDigitPlanDigitPatternCallMeNowPermissions|null
     */
    private $digitPatternPermissions = null;

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
     * Getter for digitPatternPermissions
     *
     * @ElementName digitPatternPermissions
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingPinholeDigitPlanDigitPatternCallMeNowPermissions|null
     */
    public function getDigitPatternPermissions()
    {
        return $this->digitPatternPermissions;
    }

    /**
     * Setter for digitPatternPermissions
     *
     * @ElementName digitPatternPermissions
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingPinholeDigitPlanDigitPatternCallMeNowPermissions|null $digitPatternPermissions
     * @return $this
     */
    public function setDigitPatternPermissions($digitPatternPermissions)
    {
        $this->digitPatternPermissions = $digitPatternPermissions;
        return $this;
    }


}

