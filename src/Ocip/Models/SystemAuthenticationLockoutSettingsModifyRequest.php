<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAuthenticationLockoutSettingsModifyRequest
 *
 * Request to modify the system level device password lockout settings
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemAuthenticationLockoutSettingsModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName counterResetIntervalDays
     * @var int|null
     */
    private $counterResetIntervalDays = null;

    /**
     * @ElementName counterResetHour
     * @var int|null
     */
    private $counterResetHour = null;

    /**
     * @ElementName counterResetMinute
     * @var int|null
     */
    private $counterResetMinute = null;

    /**
     * @ElementName emergencySIPBypassAllowed
     * @var bool|null
     */
    private $emergencySIPBypassAllowed = null;

    /**
     * Getter for counterResetIntervalDays
     *
     * @ElementName counterResetIntervalDays
     * @return int|null
     */
    public function getCounterResetIntervalDays()
    {
        return $this->counterResetIntervalDays;
    }

    /**
     * Setter for counterResetIntervalDays
     *
     * @ElementName counterResetIntervalDays
     * @param int|null $counterResetIntervalDays
     * @return $this
     */
    public function setCounterResetIntervalDays($counterResetIntervalDays)
    {
        $this->counterResetIntervalDays = $counterResetIntervalDays;
        return $this;
    }

    /**
     * Getter for counterResetHour
     *
     * @ElementName counterResetHour
     * @return int|null
     */
    public function getCounterResetHour()
    {
        return $this->counterResetHour;
    }

    /**
     * Setter for counterResetHour
     *
     * @ElementName counterResetHour
     * @param int|null $counterResetHour
     * @return $this
     */
    public function setCounterResetHour($counterResetHour)
    {
        $this->counterResetHour = $counterResetHour;
        return $this;
    }

    /**
     * Getter for counterResetMinute
     *
     * @ElementName counterResetMinute
     * @return int|null
     */
    public function getCounterResetMinute()
    {
        return $this->counterResetMinute;
    }

    /**
     * Setter for counterResetMinute
     *
     * @ElementName counterResetMinute
     * @param int|null $counterResetMinute
     * @return $this
     */
    public function setCounterResetMinute($counterResetMinute)
    {
        $this->counterResetMinute = $counterResetMinute;
        return $this;
    }

    /**
     * Getter for emergencySIPBypassAllowed
     *
     * @ElementName emergencySIPBypassAllowed
     * @return bool|null
     */
    public function getEmergencySIPBypassAllowed()
    {
        return $this->emergencySIPBypassAllowed;
    }

    /**
     * Setter for emergencySIPBypassAllowed
     *
     * @ElementName emergencySIPBypassAllowed
     * @param bool|null $emergencySIPBypassAllowed
     * @return $this
     */
    public function setEmergencySIPBypassAllowed($emergencySIPBypassAllowed)
    {
        $this->emergencySIPBypassAllowed = $emergencySIPBypassAllowed;
        return $this;
    }


}

