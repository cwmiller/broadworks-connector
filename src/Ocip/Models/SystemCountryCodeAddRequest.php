<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCountryCodeAddRequest
 *
 * Add a country code to the system.
 *         If ringPeriodMilliseconds is not specified, a default of 6000
 * milliseconds is assumed.
 *         If offHookWarningTimerSeconds is not specified, a default of 30 seconds
 * is assumed.
 *         If enableNationalPrefix is not specified, a default of false is assumed.
 *         If nationalPrefix is not specified, a default of null string is assumed.
 *         If disableNationalPrefixForOffNetCalls is not specified, a default of
 * false is assumed.
 *         The following elements are only used in AS data mode:
 *            disableNationalPrefixForOffNetCalls.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemCountryCodeAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName countryCode
     * @var string|null
     */
    private $countryCode = null;

    /**
     * @ElementName countryName
     * @var string|null
     */
    private $countryName = null;

    /**
     * @ElementName ringPeriodMilliseconds
     * @var int|null
     */
    private $ringPeriodMilliseconds = null;

    /**
     * @ElementName offHookWarningTimerSeconds
     * @var int|null
     */
    private $offHookWarningTimerSeconds = null;

    /**
     * @ElementName enableNationalPrefix
     * @var bool|null
     */
    private $enableNationalPrefix = null;

    /**
     * @ElementName nationalPrefix
     * @var string|null
     */
    private $nationalPrefix = null;

    /**
     * @ElementName maxCallWaitingTones
     * @var int|null
     */
    private $maxCallWaitingTones = null;

    /**
     * @ElementName timeBetweenCallWaitingTonesMilliseconds
     * @var int|null
     */
    private $timeBetweenCallWaitingTonesMilliseconds = null;

    /**
     * @ElementName disableNationalPrefixForOffNetCalls
     * @var bool|null
     */
    private $disableNationalPrefixForOffNetCalls = null;

    /**
     * Getter for countryCode
     *
     * @ElementName countryCode
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * Setter for countryCode
     *
     * @ElementName countryCode
     * @param string|null $countryCode
     * @return $this
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    /**
     * Getter for countryName
     *
     * @ElementName countryName
     * @return string|null
     */
    public function getCountryName()
    {
        return $this->countryName;
    }

    /**
     * Setter for countryName
     *
     * @ElementName countryName
     * @param string|null $countryName
     * @return $this
     */
    public function setCountryName($countryName)
    {
        $this->countryName = $countryName;
        return $this;
    }

    /**
     * Getter for ringPeriodMilliseconds
     *
     * @ElementName ringPeriodMilliseconds
     * @return int|null
     */
    public function getRingPeriodMilliseconds()
    {
        return $this->ringPeriodMilliseconds;
    }

    /**
     * Setter for ringPeriodMilliseconds
     *
     * @ElementName ringPeriodMilliseconds
     * @param int|null $ringPeriodMilliseconds
     * @return $this
     */
    public function setRingPeriodMilliseconds($ringPeriodMilliseconds)
    {
        $this->ringPeriodMilliseconds = $ringPeriodMilliseconds;
        return $this;
    }

    /**
     * Getter for offHookWarningTimerSeconds
     *
     * @ElementName offHookWarningTimerSeconds
     * @return int|null
     */
    public function getOffHookWarningTimerSeconds()
    {
        return $this->offHookWarningTimerSeconds;
    }

    /**
     * Setter for offHookWarningTimerSeconds
     *
     * @ElementName offHookWarningTimerSeconds
     * @param int|null $offHookWarningTimerSeconds
     * @return $this
     */
    public function setOffHookWarningTimerSeconds($offHookWarningTimerSeconds)
    {
        $this->offHookWarningTimerSeconds = $offHookWarningTimerSeconds;
        return $this;
    }

    /**
     * Getter for enableNationalPrefix
     *
     * @ElementName enableNationalPrefix
     * @return bool|null
     */
    public function getEnableNationalPrefix()
    {
        return $this->enableNationalPrefix;
    }

    /**
     * Setter for enableNationalPrefix
     *
     * @ElementName enableNationalPrefix
     * @param bool|null $enableNationalPrefix
     * @return $this
     */
    public function setEnableNationalPrefix($enableNationalPrefix)
    {
        $this->enableNationalPrefix = $enableNationalPrefix;
        return $this;
    }

    /**
     * Getter for nationalPrefix
     *
     * @ElementName nationalPrefix
     * @return string|null
     */
    public function getNationalPrefix()
    {
        return $this->nationalPrefix;
    }

    /**
     * Setter for nationalPrefix
     *
     * @ElementName nationalPrefix
     * @param string|null $nationalPrefix
     * @return $this
     */
    public function setNationalPrefix($nationalPrefix)
    {
        $this->nationalPrefix = $nationalPrefix;
        return $this;
    }

    /**
     * Getter for maxCallWaitingTones
     *
     * @ElementName maxCallWaitingTones
     * @return int|null
     */
    public function getMaxCallWaitingTones()
    {
        return $this->maxCallWaitingTones;
    }

    /**
     * Setter for maxCallWaitingTones
     *
     * @ElementName maxCallWaitingTones
     * @param int|null $maxCallWaitingTones
     * @return $this
     */
    public function setMaxCallWaitingTones($maxCallWaitingTones)
    {
        $this->maxCallWaitingTones = $maxCallWaitingTones;
        return $this;
    }

    /**
     * Getter for timeBetweenCallWaitingTonesMilliseconds
     *
     * @ElementName timeBetweenCallWaitingTonesMilliseconds
     * @return int|null
     */
    public function getTimeBetweenCallWaitingTonesMilliseconds()
    {
        return $this->timeBetweenCallWaitingTonesMilliseconds;
    }

    /**
     * Setter for timeBetweenCallWaitingTonesMilliseconds
     *
     * @ElementName timeBetweenCallWaitingTonesMilliseconds
     * @param int|null $timeBetweenCallWaitingTonesMilliseconds
     * @return $this
     */
    public function setTimeBetweenCallWaitingTonesMilliseconds($timeBetweenCallWaitingTonesMilliseconds)
    {
        $this->timeBetweenCallWaitingTonesMilliseconds = $timeBetweenCallWaitingTonesMilliseconds;
        return $this;
    }

    /**
     * Getter for disableNationalPrefixForOffNetCalls
     *
     * @ElementName disableNationalPrefixForOffNetCalls
     * @return bool|null
     */
    public function getDisableNationalPrefixForOffNetCalls()
    {
        return $this->disableNationalPrefixForOffNetCalls;
    }

    /**
     * Setter for disableNationalPrefixForOffNetCalls
     *
     * @ElementName disableNationalPrefixForOffNetCalls
     * @param bool|null $disableNationalPrefixForOffNetCalls
     * @return $this
     */
    public function setDisableNationalPrefixForOffNetCalls($disableNationalPrefixForOffNetCalls)
    {
        $this->disableNationalPrefixForOffNetCalls = $disableNationalPrefixForOffNetCalls;
        return $this;
    }


}

