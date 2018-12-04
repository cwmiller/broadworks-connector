<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * IncomingCallingPlanDigitPatternPermission
 *
 * Indicates whether calls from specified digit patterns are permitted.
 *
 * @Groups [{"id":"b24f81403186e75b29216017d9340516:185","type":"sequence"}]
 */
class IncomingCallingPlanDigitPatternPermission
{

    /**
     * @ElementName digitPatternName
     * @Type string
     * @Group b24f81403186e75b29216017d9340516:185
     * @var string|null
     */
    private $digitPatternName = null;

    /**
     * @ElementName allow
     * @Type bool
     * @Group b24f81403186e75b29216017d9340516:185
     * @var bool|null
     */
    private $allow = null;

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

