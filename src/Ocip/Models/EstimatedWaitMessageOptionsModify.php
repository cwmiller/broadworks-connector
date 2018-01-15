<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EstimatedWaitMessageOptionsModify
 *
 * Estimated Wait Message Options
 */
class EstimatedWaitMessageOptionsModify
{

    /**
     * @ElementName enabled
     * @var bool|null
     */
    private $enabled = null;

    /**
     * @ElementName operatingMode
     * @var string|null
     */
    private $operatingMode = null;

    /**
     * @ElementName playPositionHighVolume
     * @var bool|null
     */
    private $playPositionHighVolume = null;

    /**
     * @ElementName playTimeHighVolume
     * @var bool|null
     */
    private $playTimeHighVolume = null;

    /**
     * @ElementName maximumPositions
     * @var int|null
     */
    private $maximumPositions = null;

    /**
     * @ElementName maximumWaitingMinutes
     * @var int|null
     */
    private $maximumWaitingMinutes = null;

    /**
     * @ElementName defaultCallHandlingMinutes
     * @var int|null
     */
    private $defaultCallHandlingMinutes = null;

    /**
     * @ElementName playUpdatedEWM
     * @var bool|null
     */
    private $playUpdatedEWM = null;

    /**
     * @ElementName timeBetweenEWMUpdatesSeconds
     * @var int|null
     */
    private $timeBetweenEWMUpdatesSeconds = null;

    /**
     * Getter for enabled
     *
     * @ElementName enabled
     * @return bool|null
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Setter for enabled
     *
     * @ElementName enabled
     * @param bool|null $enabled
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
        return $this;
    }

    /**
     * Getter for operatingMode
     *
     * @ElementName operatingMode
     * @return string|null
     */
    public function getOperatingMode()
    {
        return $this->operatingMode;
    }

    /**
     * Setter for operatingMode
     *
     * @ElementName operatingMode
     * @param string|null $operatingMode
     * @return $this
     */
    public function setOperatingMode($operatingMode)
    {
        $this->operatingMode = $operatingMode;
        return $this;
    }

    /**
     * Getter for playPositionHighVolume
     *
     * @ElementName playPositionHighVolume
     * @return bool|null
     */
    public function getPlayPositionHighVolume()
    {
        return $this->playPositionHighVolume;
    }

    /**
     * Setter for playPositionHighVolume
     *
     * @ElementName playPositionHighVolume
     * @param bool|null $playPositionHighVolume
     * @return $this
     */
    public function setPlayPositionHighVolume($playPositionHighVolume)
    {
        $this->playPositionHighVolume = $playPositionHighVolume;
        return $this;
    }

    /**
     * Getter for playTimeHighVolume
     *
     * @ElementName playTimeHighVolume
     * @return bool|null
     */
    public function getPlayTimeHighVolume()
    {
        return $this->playTimeHighVolume;
    }

    /**
     * Setter for playTimeHighVolume
     *
     * @ElementName playTimeHighVolume
     * @param bool|null $playTimeHighVolume
     * @return $this
     */
    public function setPlayTimeHighVolume($playTimeHighVolume)
    {
        $this->playTimeHighVolume = $playTimeHighVolume;
        return $this;
    }

    /**
     * Getter for maximumPositions
     *
     * @ElementName maximumPositions
     * @return int|null
     */
    public function getMaximumPositions()
    {
        return $this->maximumPositions;
    }

    /**
     * Setter for maximumPositions
     *
     * @ElementName maximumPositions
     * @param int|null $maximumPositions
     * @return $this
     */
    public function setMaximumPositions($maximumPositions)
    {
        $this->maximumPositions = $maximumPositions;
        return $this;
    }

    /**
     * Getter for maximumWaitingMinutes
     *
     * @ElementName maximumWaitingMinutes
     * @return int|null
     */
    public function getMaximumWaitingMinutes()
    {
        return $this->maximumWaitingMinutes;
    }

    /**
     * Setter for maximumWaitingMinutes
     *
     * @ElementName maximumWaitingMinutes
     * @param int|null $maximumWaitingMinutes
     * @return $this
     */
    public function setMaximumWaitingMinutes($maximumWaitingMinutes)
    {
        $this->maximumWaitingMinutes = $maximumWaitingMinutes;
        return $this;
    }

    /**
     * Getter for defaultCallHandlingMinutes
     *
     * @ElementName defaultCallHandlingMinutes
     * @return int|null
     */
    public function getDefaultCallHandlingMinutes()
    {
        return $this->defaultCallHandlingMinutes;
    }

    /**
     * Setter for defaultCallHandlingMinutes
     *
     * @ElementName defaultCallHandlingMinutes
     * @param int|null $defaultCallHandlingMinutes
     * @return $this
     */
    public function setDefaultCallHandlingMinutes($defaultCallHandlingMinutes)
    {
        $this->defaultCallHandlingMinutes = $defaultCallHandlingMinutes;
        return $this;
    }

    /**
     * Getter for playUpdatedEWM
     *
     * @ElementName playUpdatedEWM
     * @return bool|null
     */
    public function getPlayUpdatedEWM()
    {
        return $this->playUpdatedEWM;
    }

    /**
     * Setter for playUpdatedEWM
     *
     * @ElementName playUpdatedEWM
     * @param bool|null $playUpdatedEWM
     * @return $this
     */
    public function setPlayUpdatedEWM($playUpdatedEWM)
    {
        $this->playUpdatedEWM = $playUpdatedEWM;
        return $this;
    }

    /**
     * Getter for timeBetweenEWMUpdatesSeconds
     *
     * @ElementName timeBetweenEWMUpdatesSeconds
     * @return int|null
     */
    public function getTimeBetweenEWMUpdatesSeconds()
    {
        return $this->timeBetweenEWMUpdatesSeconds;
    }

    /**
     * Setter for timeBetweenEWMUpdatesSeconds
     *
     * @ElementName timeBetweenEWMUpdatesSeconds
     * @param int|null $timeBetweenEWMUpdatesSeconds
     * @return $this
     */
    public function setTimeBetweenEWMUpdatesSeconds($timeBetweenEWMUpdatesSeconds)
    {
        $this->timeBetweenEWMUpdatesSeconds = $timeBetweenEWMUpdatesSeconds;
        return $this;
    }


}

