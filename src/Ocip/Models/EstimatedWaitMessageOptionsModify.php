<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EstimatedWaitMessageOptionsModify
 *
 * Estimated Wait Message Options
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:2634","type":"sequence"}]
 */
class EstimatedWaitMessageOptionsModify
{

    /**
     * @ElementName enabled
     * @Type bool
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2634
     * @var bool|null
     */
    protected $enabled = null;

    /**
     * @ElementName operatingMode
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EstimatedWaitMessageOperatingMode
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2634
     * @var \CWM\BroadWorksConnector\Ocip\Models\EstimatedWaitMessageOperatingMode|null
     */
    protected $operatingMode = null;

    /**
     * @ElementName playPositionHighVolume
     * @Type bool
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2634
     * @var bool|null
     */
    protected $playPositionHighVolume = null;

    /**
     * @ElementName playTimeHighVolume
     * @Type bool
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2634
     * @var bool|null
     */
    protected $playTimeHighVolume = null;

    /**
     * @ElementName maximumPositions
     * @Type int
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2634
     * @MinInclusive 1
     * @MaxInclusive 100
     * @var int|null
     */
    protected $maximumPositions = null;

    /**
     * @ElementName maximumWaitingMinutes
     * @Type int
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2634
     * @MinInclusive 1
     * @MaxInclusive 100
     * @var int|null
     */
    protected $maximumWaitingMinutes = null;

    /**
     * @ElementName defaultCallHandlingMinutes
     * @Type int
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2634
     * @MinInclusive 1
     * @MaxInclusive 100
     * @var int|null
     */
    protected $defaultCallHandlingMinutes = null;

    /**
     * @ElementName playUpdatedEWM
     * @Type bool
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2634
     * @var bool|null
     */
    protected $playUpdatedEWM = null;

    /**
     * @ElementName timeBetweenEWMUpdatesSeconds
     * @Type int
     * @Nillable
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2634
     * @MinInclusive 10
     * @MaxInclusive 600
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $timeBetweenEWMUpdatesSeconds = null;

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

    /**
     * Getter for playUpdatedEWM
     *
     * @return bool
     */
    public function getPlayUpdatedEWM()
    {
        return $this->playUpdatedEWM instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->playUpdatedEWM;
    }

    /**
     * Setter for playUpdatedEWM
     *
     * @param bool $playUpdatedEWM
     * @return $this
     */
    public function setPlayUpdatedEWM($playUpdatedEWM)
    {
        $this->playUpdatedEWM = $playUpdatedEWM;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPlayUpdatedEWM()
    {
        $this->playUpdatedEWM = null;
        return $this;
    }

    /**
     * Getter for timeBetweenEWMUpdatesSeconds
     *
     * @return int|null
     */
    public function getTimeBetweenEWMUpdatesSeconds()
    {
        return $this->timeBetweenEWMUpdatesSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->timeBetweenEWMUpdatesSeconds;
    }

    /**
     * Setter for timeBetweenEWMUpdatesSeconds
     *
     * @param int|null $timeBetweenEWMUpdatesSeconds
     * @return $this
     */
    public function setTimeBetweenEWMUpdatesSeconds($timeBetweenEWMUpdatesSeconds = null)
    {
        if ($timeBetweenEWMUpdatesSeconds === null) {
            $this->timeBetweenEWMUpdatesSeconds = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->timeBetweenEWMUpdatesSeconds = $timeBetweenEWMUpdatesSeconds;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTimeBetweenEWMUpdatesSeconds()
    {
        $this->timeBetweenEWMUpdatesSeconds = null;
        return $this;
    }


}

