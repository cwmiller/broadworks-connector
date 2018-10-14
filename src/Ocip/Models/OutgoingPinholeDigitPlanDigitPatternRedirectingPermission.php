<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * OutgoingPinholeDigitPlanDigitPatternRedirectingPermission
 *
 * Indicates whether redirecting calls using specified Pinhole digit patterns are
 * permitted.
 */
class OutgoingPinholeDigitPlanDigitPatternRedirectingPermission
{

    /**
     * @ElementName digitPatternName
     * @var string|null
     */
    private $digitPatternName = null;

    /**
     * @ElementName permission
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingPinholeDigitPlanRedirectingPermission|null
     */
    private $permission = null;

    /**
     * Getter for digitPatternName
     *
     * @ElementName digitPatternName
     * @return string|null
     */
    public function getDigitPatternName()
    {
        return $this->digitPatternName;
    }

    /**
     * Setter for digitPatternName
     *
     * @ElementName digitPatternName
     * @param string|null $digitPatternName
     * @return $this
     */
    public function setDigitPatternName($digitPatternName)
    {
        $this->digitPatternName = $digitPatternName;
        return $this;
    }

    /**
     * Getter for permission
     *
     * @ElementName permission
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingPinholeDigitPlanRedirectingPermission|null
     */
    public function getPermission()
    {
        return $this->permission;
    }

    /**
     * Setter for permission
     *
     * @ElementName permission
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingPinholeDigitPlanRedirectingPermission|null $permission
     * @return $this
     */
    public function setPermission(\CWM\BroadWorksConnector\Ocip\Models\OutgoingPinholeDigitPlanRedirectingPermission $permission)
    {
        $this->permission = $permission;
        return $this;
    }


}

