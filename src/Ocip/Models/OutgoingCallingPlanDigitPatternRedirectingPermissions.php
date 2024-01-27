<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * OutgoingCallingPlanDigitPatternRedirectingPermissions
 *
 * Outgoing Calling Plan redirecting call permissions for specified digit patterns.
 *
 * @Groups [{"id":"a63afa661ee5c74f4700e562e88c66d0:1992","type":"sequence"}]
 */
class OutgoingCallingPlanDigitPatternRedirectingPermissions
{
    /**
     * @ElementName digitPatternPermissions
     * @Type \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanDigitPatternRedirectingPermission
     * @Array
     * @Group a63afa661ee5c74f4700e562e88c66d0:1992
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanDigitPatternRedirectingPermission[]
     */
    protected $digitPatternPermissions = [
        
    ];

    /**
     * Getter for digitPatternPermissions
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanDigitPatternRedirectingPermission[]
     */
    public function getDigitPatternPermissions()
    {
        return $this->digitPatternPermissions instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->digitPatternPermissions;
    }

    /**
     * Setter for digitPatternPermissions
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanDigitPatternRedirectingPermission[] $digitPatternPermissions
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanDigitPatternRedirectingPermission $digitPatternPermissions
     * @return $this
     */
    public function addDigitPatternPermissions($digitPatternPermissions)
    {
        $this->digitPatternPermissions[] = $digitPatternPermissions;
        return $this;
    }
}

