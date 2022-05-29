<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EstimatedWaitMessageOptionsRead
 *
 * Estimated Wait Message Options
 *         
 *         Replaced by EstimatedWaitMessageOptionsRead17sp4
 *
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:48530","type":"sequence"}]
 */
class EstimatedWaitMessageOptionsRead
{

    /**
     * @ElementName enabled
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:48530
     * @var bool|null
     */
    protected $enabled = null;

    /**
     * @ElementName operatingMode
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EstimatedWaitMessageOperatingMode
     * @Group ab0042aa512abc10edb3c55e4b416b0b:48530
     * @var \CWM\BroadWorksConnector\Ocip\Models\EstimatedWaitMessageOperatingMode|null
     */
    protected $operatingMode = null;

    /**
     * @ElementName playPositionHighVolume
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:48530
     * @var bool|null
     */
    protected $playPositionHighVolume = null;

    /**
     * @ElementName playTimeHighVolume
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:48530
     * @var bool|null
     */
    protected $playTimeHighVolume = null;

    /**
     * @ElementName maximumPositions
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:48530
     * @MinInclusive 1
     * @MaxInclusive 100
     * @var int|null
     */
    protected $maximumPositions = null;

    /**
     * @ElementName maximumWaitingMinutes
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:48530
     * @MinInclusive 1
     * @MaxInclusive 100
     * @var int|null
     */
    protected $maximumWaitingMinutes = null;

    /**
     * @ElementName defaultCallHandlingMinutes
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:48530
     * @MinInclusive 1
     * @MaxInclusive 100
     * @var int|null
     */
    protected $defaultCallHandlingMinutes = null;

    /**
     * Getter for enabled
     *
     * @return bool
     */
    public function getEnabled()
    {
        return $this->enabled instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enabled;
    }

    /**
     * Setter for enabled
     *
     * @param bool $enabled
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnabled()
    {
        $this->enabled = null;
        return $this;
    }

    /**
     * Getter for operatingMode
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\EstimatedWaitMessageOperatingMode
     */
    public function getOperatingMode()
    {
        return $this->operatingMode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->operatingMode;
    }

    /**
     * Setter for operatingMode
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EstimatedWaitMessageOperatingMode $operatingMode
     * @return $this
     */
    public function setOperatingMode(\CWM\BroadWorksConnector\Ocip\Models\EstimatedWaitMessageOperatingMode $operatingMode)
    {
        $this->operatingMode = $operatingMode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOperatingMode()
    {
        $this->operatingMode = null;
        return $this;
    }

    /**
     * Getter for playPositionHighVolume
     *
     * @return bool
     */
    public function getPlayPositionHighVolume()
    {
        return $this->playPositionHighVolume instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->playPositionHighVolume;
    }

    /**
     * Setter for playPositionHighVolume
     *
     * @param bool $playPositionHighVolume
     * @return $this
     */
    public function setPlayPositionHighVolume($playPositionHighVolume)
    {
        $this->playPositionHighVolume = $playPositionHighVolume;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPlayPositionHighVolume()
    {
        $this->playPositionHighVolume = null;
        return $this;
    }

    /**
     * Getter for playTimeHighVolume
     *
     * @return bool
     */
    public function getPlayTimeHighVolume()
    {
        return $this->playTimeHighVolume instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->playTimeHighVolume;
    }

    /**
     * Setter for playTimeHighVolume
     *
     * @param bool $playTimeHighVolume
     * @return $this
     */
    public function setPlayTimeHighVolume($playTimeHighVolume)
    {
        $this->playTimeHighVolume = $playTimeHighVolume;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPlayTimeHighVolume()
    {
        $this->playTimeHighVolume = null;
        return $this;
    }

    /**
     * Getter for maximumPositions
     *
     * @return int
     */
    public function getMaximumPositions()
    {
        return $this->maximumPositions instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maximumPositions;
    }

    /**
     * Setter for maximumPositions
     *
     * @param int $maximumPositions
     * @return $this
     */
    public function setMaximumPositions($maximumPositions)
    {
        $this->maximumPositions = $maximumPositions;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaximumPositions()
    {
        $this->maximumPositions = null;
        return $this;
    }

    /**
     * Getter for maximumWaitingMinutes
     *
     * @return int
     */
    public function getMaximumWaitingMinutes()
    {
        return $this->maximumWaitingMinutes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maximumWaitingMinutes;
    }

    /**
     * Setter for maximumWaitingMinutes
     *
     * @param int $maximumWaitingMinutes
     * @return $this
     */
    public function setMaximumWaitingMinutes($maximumWaitingMinutes)
    {
        $this->maximumWaitingMinutes = $maximumWaitingMinutes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaximumWaitingMinutes()
    {
        $this->maximumWaitingMinutes = null;
        return $this;
    }

    /**
     * Getter for defaultCallHandlingMinutes
     *
     * @return int
     */
    public function getDefaultCallHandlingMinutes()
    {
        return $this->defaultCallHandlingMinutes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultCallHandlingMinutes;
    }

    /**
     * Setter for defaultCallHandlingMinutes
     *
     * @param int $defaultCallHandlingMinutes
     * @return $this
     */
    public function setDefaultCallHandlingMinutes($defaultCallHandlingMinutes)
    {
        $this->defaultCallHandlingMinutes = $defaultCallHandlingMinutes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultCallHandlingMinutes()
    {
        $this->defaultCallHandlingMinutes = null;
        return $this;
    }


}

