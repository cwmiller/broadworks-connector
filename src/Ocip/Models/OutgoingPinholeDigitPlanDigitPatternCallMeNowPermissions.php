<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * OutgoingPinholeDigitPlanDigitPatternCallMeNowPermissions
 *
 * Outgoing Pinhole Digit Plan Call Me Now call permissions for specified digit patterns.
 *
 * @Groups [{"id":"a63afa661ee5c74f4700e562e88c66d0:2270","type":"sequence"}]
 */
class OutgoingPinholeDigitPlanDigitPatternCallMeNowPermissions
{
    /**
     * @ElementName digitPatternPermissions
     * @Type \CWM\BroadWorksConnector\Ocip\Models\OutgoingPinholeDigitPlanDigitPatternCallMeNowPermission
     * @Array
     * @Group a63afa661ee5c74f4700e562e88c66d0:2270
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingPinholeDigitPlanDigitPatternCallMeNowPermission[]
     */
    protected $digitPatternPermissions = [
        
    ];

    /**
     * Getter for digitPatternPermissions
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingPinholeDigitPlanDigitPatternCallMeNowPermission[]
     */
    public function getDigitPatternPermissions()
    {
        return $this->digitPatternPermissions instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->digitPatternPermissions;
    }

    /**
     * Setter for digitPatternPermissions
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingPinholeDigitPlanDigitPatternCallMeNowPermission[] $digitPatternPermissions
     * @return $this
     */
    public function setDigitPatternPermissions(array $digitPatternPermissions)
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

    /**
     * Adder for digitPatternPermissions
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingPinholeDigitPlanDigitPatternCallMeNowPermission $digitPatternPermissions
     * @return $this
     */
    public function addDigitPatternPermissions($digitPatternPermissions)
    {
        $this->digitPatternPermissions[] = $digitPatternPermissions;
        return $this;
    }
}

