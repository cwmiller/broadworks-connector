<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * OutgoingCallingPlanDigitPatternOriginatingPermissions
 *
 * Outgoing Calling Plan originating call permissions for specified digit patterns.
 *
 * @Groups [{"id":"a63afa661ee5c74f4700e562e88c66d0:1944","type":"sequence"}]
 */
class OutgoingCallingPlanDigitPatternOriginatingPermissions
{
    /**
     * @ElementName digitPatternPermissions
     * @Type \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanDigitPatternOriginatingPermission
     * @Array
     * @Group a63afa661ee5c74f4700e562e88c66d0:1944
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanDigitPatternOriginatingPermission[]
     */
    protected $digitPatternPermissions = [
        
    ];

    /**
     * Getter for digitPatternPermissions
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanDigitPatternOriginatingPermission[]
     */
    public function getDigitPatternPermissions()
    {
        return $this->digitPatternPermissions instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->digitPatternPermissions;
    }

    /**
     * Setter for digitPatternPermissions
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanDigitPatternOriginatingPermission[] $digitPatternPermissions
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanDigitPatternOriginatingPermission $digitPatternPermissions
     * @return $this
     */
    public function addDigitPatternPermissions($digitPatternPermissions)
    {
        $this->digitPatternPermissions[] = $digitPatternPermissions;
        return $this;
    }
}

