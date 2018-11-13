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
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemCountryCodeAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName countryCode
     * @Type string
     * @var string|null
     */
    private $countryCode = null;

    /**
     * @ElementName countryName
     * @Type string
     * @var string|null
     */
    private $countryName = null;

    /**
     * @ElementName ringPeriodMilliseconds
     * @Type int
     * @var int|null
     */
    private $ringPeriodMilliseconds = null;

    /**
     * @ElementName offHookWarningTimerSeconds
     * @Type int
     * @var int|null
     */
    private $offHookWarningTimerSeconds = null;

    /**
     * @ElementName enableNationalPrefix
     * @Type bool
     * @var bool|null
     */
    private $enableNationalPrefix = null;

    /**
     * @ElementName nationalPrefix
     * @Type string
     * @var string|null
     */
    private $nationalPrefix = null;

    /**
     * @ElementName maxCallWaitingTones
     * @Type int
     * @var int|null
     */
    private $maxCallWaitingTones = null;

    /**
     * @ElementName timeBetweenCallWaitingTonesMilliseconds
     * @Type int
     * @var int|null
     */
    private $timeBetweenCallWaitingTonesMilliseconds = null;

    /**
     * @ElementName disableNationalPrefixForOffNetCalls
     * @Type bool
     * @var bool|null
     */
    private $disableNationalPrefixForOffNetCalls = null;

    /**
     * Getter for countryCode
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->countryCode;
    }

    /**
     * Setter for countryCode
     *
     * @param string $countryCode
     * @return $this
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCountryCode()
    {
        $this->countryCode = null;
        return $this;
    }

    /**
     * Getter for countryName
     *
     * @return string
     */
    public function getCountryName()
    {
        return $this->countryName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->countryName;
    }

    /**
     * Setter for countryName
     *
     * @param string $countryName
     * @return $this
     */
    public function setCountryName($countryName)
    {
        $this->countryName = $countryName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCountryName()
    {
        $this->countryName = null;
        return $this;
    }

    /**
     * Getter for ringPeriodMilliseconds
     *
     * @return int
     */
    public function getRingPeriodMilliseconds()
    {
        return $this->ringPeriodMilliseconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->ringPeriodMilliseconds;
    }

    /**
     * Setter for ringPeriodMilliseconds
     *
     * @param int $ringPeriodMilliseconds
     * @return $this
     */
    public function setRingPeriodMilliseconds($ringPeriodMilliseconds)
    {
        $this->ringPeriodMilliseconds = $ringPeriodMilliseconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRingPeriodMilliseconds()
    {
        $this->ringPeriodMilliseconds = null;
        return $this;
    }

    /**
     * Getter for offHookWarningTimerSeconds
     *
     * @return int
     */
    public function getOffHookWarningTimerSeconds()
    {
        return $this->offHookWarningTimerSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->offHookWarningTimerSeconds;
    }

    /**
     * Setter for offHookWarningTimerSeconds
     *
     * @param int $offHookWarningTimerSeconds
     * @return $this
     */
    public function setOffHookWarningTimerSeconds($offHookWarningTimerSeconds)
    {
        $this->offHookWarningTimerSeconds = $offHookWarningTimerSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOffHookWarningTimerSeconds()
    {
        $this->offHookWarningTimerSeconds = null;
        return $this;
    }

    /**
     * Getter for enableNationalPrefix
     *
     * @return bool
     */
    public function getEnableNationalPrefix()
    {
        return $this->enableNationalPrefix instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableNationalPrefix;
    }

    /**
     * Setter for enableNationalPrefix
     *
     * @param bool $enableNationalPrefix
     * @return $this
     */
    public function setEnableNationalPrefix($enableNationalPrefix)
    {
        $this->enableNationalPrefix = $enableNationalPrefix;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableNationalPrefix()
    {
        $this->enableNationalPrefix = null;
        return $this;
    }

    /**
     * Getter for nationalPrefix
     *
     * @return string
     */
    public function getNationalPrefix()
    {
        return $this->nationalPrefix instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->nationalPrefix;
    }

    /**
     * Setter for nationalPrefix
     *
     * @param string $nationalPrefix
     * @return $this
     */
    public function setNationalPrefix($nationalPrefix)
    {
        $this->nationalPrefix = $nationalPrefix;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNationalPrefix()
    {
        $this->nationalPrefix = null;
        return $this;
    }

    /**
     * Getter for maxCallWaitingTones
     *
     * @return int
     */
    public function getMaxCallWaitingTones()
    {
        return $this->maxCallWaitingTones instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxCallWaitingTones;
    }

    /**
     * Setter for maxCallWaitingTones
     *
     * @param int $maxCallWaitingTones
     * @return $this
     */
    public function setMaxCallWaitingTones($maxCallWaitingTones)
    {
        $this->maxCallWaitingTones = $maxCallWaitingTones;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxCallWaitingTones()
    {
        $this->maxCallWaitingTones = null;
        return $this;
    }

    /**
     * Getter for timeBetweenCallWaitingTonesMilliseconds
     *
     * @return int
     */
    public function getTimeBetweenCallWaitingTonesMilliseconds()
    {
        return $this->timeBetweenCallWaitingTonesMilliseconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->timeBetweenCallWaitingTonesMilliseconds;
    }

    /**
     * Setter for timeBetweenCallWaitingTonesMilliseconds
     *
     * @param int $timeBetweenCallWaitingTonesMilliseconds
     * @return $this
     */
    public function setTimeBetweenCallWaitingTonesMilliseconds($timeBetweenCallWaitingTonesMilliseconds)
    {
        $this->timeBetweenCallWaitingTonesMilliseconds = $timeBetweenCallWaitingTonesMilliseconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTimeBetweenCallWaitingTonesMilliseconds()
    {
        $this->timeBetweenCallWaitingTonesMilliseconds = null;
        return $this;
    }

    /**
     * Getter for disableNationalPrefixForOffNetCalls
     *
     * @return bool
     */
    public function getDisableNationalPrefixForOffNetCalls()
    {
        return $this->disableNationalPrefixForOffNetCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->disableNationalPrefixForOffNetCalls;
    }

    /**
     * Setter for disableNationalPrefixForOffNetCalls
     *
     * @param bool $disableNationalPrefixForOffNetCalls
     * @return $this
     */
    public function setDisableNationalPrefixForOffNetCalls($disableNationalPrefixForOffNetCalls)
    {
        $this->disableNationalPrefixForOffNetCalls = $disableNationalPrefixForOffNetCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDisableNationalPrefixForOffNetCalls()
    {
        $this->disableNationalPrefixForOffNetCalls = null;
        return $this;
    }


}

