<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * OutgoingPinholeDigitPlanDigitPatternOriginatingPermissions
 *
 * Outgoing Pinhole Digit Plan originating call permissions for specified digit patterns.
 *
 * @Groups [{"id":"a63afa661ee5c74f4700e562e88c66d0:2318","type":"sequence"}]
 */
class OutgoingPinholeDigitPlanDigitPatternOriginatingPermissions
{
    /**
     * @ElementName digitPatternPermissions
     * @Type \CWM\BroadWorksConnector\Ocip\Models\OutgoingPinholeDigitPlanDigitPatternOriginatingPermission
     * @Array
     * @Group a63afa661ee5c74f4700e562e88c66d0:2318
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingPinholeDigitPlanDigitPatternOriginatingPermission[]
     */
    protected $digitPatternPermissions = [
        
    ];

    /**
     * Getter for digitPatternPermissions
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingPinholeDigitPlanDigitPatternOriginatingPermission[]
     */
    public function getDigitPatternPermissions()
    {
        return $this->digitPatternPermissions instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->digitPatternPermissions;
    }

    /**
     * Setter for digitPatternPermissions
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingPinholeDigitPlanDigitPatternOriginatingPermission[] $digitPatternPermissions
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingPinholeDigitPlanDigitPatternOriginatingPermission $digitPatternPermissions
     * @return $this
     */
    public function addDigitPatternPermissions($digitPatternPermissions)
    {
        $this->digitPatternPermissions[] = $digitPatternPermissions;
        return $this;
    }
}

