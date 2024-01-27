<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * IncomingCallingPlanDigitPatternPermission
 *
 * Indicates whether calls from specified digit patterns are permitted.
 *
 * @Groups [{"id":"22e19489d2787693c01f531be4452169:184","type":"sequence"}]
 */
class IncomingCallingPlanDigitPatternPermission
{
    /**
     * @ElementName digitPatternName
     * @Type string
     * @Group 22e19489d2787693c01f531be4452169:184
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $digitPatternName = null;

    /**
     * @ElementName allow
     * @Type bool
     * @Group 22e19489d2787693c01f531be4452169:184
     * @var bool|null
     */
    protected $allow = null;

    /**
     * Getter for digitPatternName
     *
     * @return string
     */
    public function getDigitPatternName()
    {
        return $this->digitPatternName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->digitPatternName;
    }

    /**
     * Setter for digitPatternName
     *
     * @param string $digitPatternName
     * @return $this
     */
    public function setDigitPatternName($digitPatternName)
    {
        $this->digitPatternName = $digitPatternName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDigitPatternName()
    {
        $this->digitPatternName = null;
        return $this;
    }

    /**
     * Getter for allow
     *
     * @return bool
     */
    public function getAllow()
    {
        return $this->allow instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allow;
    }

    /**
     * Setter for allow
     *
     * @param bool $allow
     * @return $this
     */
    public function setAllow($allow)
    {
        $this->allow = $allow;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllow()
    {
        $this->allow = null;
        return $this;
    }
}

