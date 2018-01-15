<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * OutgoingCallingPlanDigitPatternCallMeNowPermissions
 *
 * Outgoing Calling Plan Call Me Now call permissions for specified digit patterns.
 */
class OutgoingCallingPlanDigitPatternCallMeNowPermissions
{

    /**
     * @ElementName digitPatternPermissions
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanDigitPatternCallMeNowPermission[]
     */
    private $digitPatternPermissions = array(
        
    );

    /**
     * Getter for digitPatternPermissions
     *
     * @ElementName digitPatternPermissions
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanDigitPatternCallMeNowPermission[]
     */
    public function getDigitPatternPermissions()
    {
        return $this->digitPatternPermissions;
    }

    /**
     * Setter for digitPatternPermissions
     *
     * @ElementName digitPatternPermissions
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanDigitPatternCallMeNowPermission[] $digitPatternPermissions
     * @return $this
     */
    public function setDigitPatternPermissions($digitPatternPermissions)
    {
        $this->digitPatternPermissions = $digitPatternPermissions;
        return $this;
    }

    /**
     * Adder for digitPatternPermissions
     *
     * @ElementName digitPatternPermissions
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanDigitPatternCallMeNowPermission $digitPatternPermissions
     * @return $this
     */
    public function addDigitPatternPermissions($digitPatternPermissions)
    {
        $this->digitPatternPermissions []= $digitPatternPermissions;
        return $this;
    }


}

