<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * OutgoingPinholeDigitPlanDigitPatternOriginatingPermission
 *
 * Indicates whether originating calls using specified Pinhole digit patterns are
 * permitted.
 */
class OutgoingPinholeDigitPlanDigitPatternOriginatingPermission
{

    /**
     * @ElementName digitPatternName
     * @var string|null
     */
    private $digitPatternName = null;

    /**
     * @ElementName permission
     * @var string|null
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
     * @return string|null
     */
    public function getPermission()
    {
        return $this->permission;
    }

    /**
     * Setter for permission
     *
     * @ElementName permission
     * @param string|null $permission
     * @return $this
     */
    public function setPermission($permission)
    {
        $this->permission = $permission;
        return $this;
    }


}

