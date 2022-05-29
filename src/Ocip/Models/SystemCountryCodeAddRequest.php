<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCountryCodeAddRequest
 *
 * Add a country code to the system.
 *         If ringPeriodMilliseconds is not specified, a default of 6000 milliseconds is assumed.
 *         If offHookWarningTimerSeconds is not specified, a default of 30 seconds is assumed.
 *         If enableNationalPrefix is not specified, a default of false is assumed.
 *         If nationalPrefix is not specified, a default of null string is assumed.
 *         If disableNationalPrefixForOffNetCalls is not specified, a default of false is assumed.
 *         The following elements are only used in AS data mode:
 *            disableNationalPrefixForOffNetCalls.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:6859","type":"sequence"}]
 */
class SystemCountryCodeAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName countryCode
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:6859
     * @MaxLength 3
     * @Pattern [0-9]|[1-9][0-9]{1,2}
     * @var string|null
     */
    protected $countryCode = null;

    /**
     * @ElementName countryName
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:6859
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $countryName = null;

    /**
     * @ElementName ringPeriodMilliseconds
     * @Type int
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:6859
     * @MinInclusive 1
     * @MaxInclusive 12000
     * @var int|null
     */
    protected $ringPeriodMilliseconds = null;

    /**
     * @ElementName offHookWarningTimerSeconds
     * @Type int
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:6859
     * @MinInclusive 1
     * @MaxInclusive 360
     * @var int|null
     */
    protected $offHookWarningTimerSeconds = null;

    /**
     * @ElementName enableNationalPrefix
     * @Type bool
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:6859
     * @var bool|null
     */
    protected $enableNationalPrefix = null;

    /**
     * @ElementName nationalPrefix
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:6859
     * @MinLength 1
     * @MaxLength 2
     * @var string|null
     */
    protected $nationalPrefix = null;

    /**
     * @ElementName maxCallWaitingTones
     * @Type int
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:6859
     * @MinInclusive 1
     * @MaxInclusive 20
     * @var int|null
     */
    protected $maxCallWaitingTones = null;

    /**
     * @ElementName timeBetweenCallWaitingTonesMilliseconds
     * @Type int
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:6859
     * @MinInclusive 0
     * @MaxInclusive 120000
     * @var int|null
     */
    protected $timeBetweenCallWaitingTonesMilliseconds = null;

    /**
     * @ElementName disableNationalPrefixForOffNetCalls
     * @Type bool
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:6859
     * @var bool|null
     */
    protected $disableNationalPrefixForOffNetCalls = null;

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

