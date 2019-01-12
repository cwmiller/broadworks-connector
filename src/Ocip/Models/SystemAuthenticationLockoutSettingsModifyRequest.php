<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAuthenticationLockoutSettingsModifyRequest
 *
 * Request to modify the system level device password lockout settings
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:2048","type":"sequence"}]
 */
class SystemAuthenticationLockoutSettingsModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName counterResetIntervalDays
     * @Type int
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:2048
     * @var int|null
     */
    private $counterResetIntervalDays = null;

    /**
     * @ElementName counterResetHour
     * @Type int
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:2048
     * @var int|null
     */
    private $counterResetHour = null;

    /**
     * @ElementName counterResetMinute
     * @Type int
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:2048
     * @var int|null
     */
    private $counterResetMinute = null;

    /**
     * @ElementName emergencySIPBypassAllowed
     * @Type bool
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:2048
     * @var bool|null
     */
    private $emergencySIPBypassAllowed = null;

    /**
     * Getter for counterResetIntervalDays
     *
     * @return int
     */
    public function getCounterResetIntervalDays()
    {
        return $this->counterResetIntervalDays instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->counterResetIntervalDays;
    }

    /**
     * Setter for counterResetIntervalDays
     *
     * @param int $counterResetIntervalDays
     * @return $this
     */
    public function setCounterResetIntervalDays($counterResetIntervalDays)
    {
        $this->counterResetIntervalDays = $counterResetIntervalDays;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCounterResetIntervalDays()
    {
        $this->counterResetIntervalDays = null;
        return $this;
    }

    /**
     * Getter for counterResetHour
     *
     * @return int
     */
    public function getCounterResetHour()
    {
        return $this->counterResetHour instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->counterResetHour;
    }

    /**
     * Setter for counterResetHour
     *
     * @param int $counterResetHour
     * @return $this
     */
    public function setCounterResetHour($counterResetHour)
    {
        $this->counterResetHour = $counterResetHour;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCounterResetHour()
    {
        $this->counterResetHour = null;
        return $this;
    }

    /**
     * Getter for counterResetMinute
     *
     * @return int
     */
    public function getCounterResetMinute()
    {
        return $this->counterResetMinute instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->counterResetMinute;
    }

    /**
     * Setter for counterResetMinute
     *
     * @param int $counterResetMinute
     * @return $this
     */
    public function setCounterResetMinute($counterResetMinute)
    {
        $this->counterResetMinute = $counterResetMinute;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCounterResetMinute()
    {
        $this->counterResetMinute = null;
        return $this;
    }

    /**
     * Getter for emergencySIPBypassAllowed
     *
     * @return bool
     */
    public function getEmergencySIPBypassAllowed()
    {
        return $this->emergencySIPBypassAllowed instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->emergencySIPBypassAllowed;
    }

    /**
     * Setter for emergencySIPBypassAllowed
     *
     * @param bool $emergencySIPBypassAllowed
     * @return $this
     */
    public function setEmergencySIPBypassAllowed($emergencySIPBypassAllowed)
    {
        $this->emergencySIPBypassAllowed = $emergencySIPBypassAllowed;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEmergencySIPBypassAllowed()
    {
        $this->emergencySIPBypassAllowed = null;
        return $this;
    }


}

