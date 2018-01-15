<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * OutgoingCallingPlanDigitPatternOriginatingPermissions
 *
 * Outgoing Calling Plan originating call permissions for specified digit patterns.
 */
class OutgoingCallingPlanDigitPatternOriginatingPermissions
{

    /**
     * @ElementName digitPatternPermissions
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanDigitPatternOriginatingPermission[]
     */
    private $digitPatternPermissions = array(
        
    );

    /**
     * Getter for digitPatternPermissions
     *
     * @ElementName digitPatternPermissions
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanDigitPatternOriginatingPermission[]
     */
    public function getDigitPatternPermissions()
    {
        return $this->digitPatternPermissions;
    }

    /**
     * Setter for digitPatternPermissions
     *
     * @ElementName digitPatternPermissions
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanDigitPatternOriginatingPermission[] $digitPatternPermissions
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanDigitPatternOriginatingPermission $digitPatternPermissions
     * @return $this
     */
    public function addDigitPatternPermissions($digitPatternPermissions)
    {
        $this->digitPatternPermissions []= $digitPatternPermissions;
        return $this;
    }


}

