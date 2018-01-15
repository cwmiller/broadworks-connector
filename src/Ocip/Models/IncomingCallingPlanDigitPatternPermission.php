<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * IncomingCallingPlanDigitPatternPermission
 *
 * Indicates whether calls from specified digit patterns are permitted.
 */
class IncomingCallingPlanDigitPatternPermission
{

    /**
     * @ElementName digitPatternName
     * @var string|null
     */
    private $digitPatternName = null;

    /**
     * @ElementName allow
     * @var bool|null
     */
    private $allow = null;

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
     * Getter for allow
     *
     * @ElementName allow
     * @return bool|null
     */
    public function getAllow()
    {
        return $this->allow;
    }

    /**
     * Setter for allow
     *
     * @ElementName allow
     * @param bool|null $allow
     * @return $this
     */
    public function setAllow($allow)
    {
        $this->allow = $allow;
        return $this;
    }


}

