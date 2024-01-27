<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCountryCodeModifyRequest
 *
 * Modify the attributes of a country code.
 *         If becomeDefaultCountryCode is true, the country code
 *         in this request becomes the default country code for the system.
 *         The following elements are only used in AS data mode:
 *           disableNationalPrefixForOffNetCalls
 *           
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:7057","type":"sequence"}]
 */
class SystemCountryCodeModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName countryCode
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:7057
     * @MaxLength 3
     * @Pattern [0-9]|[1-9][0-9]{1,2}
     * @var string|null
     */
    protected $countryCode = null;

    /**
     * @ElementName ringPeriodMilliseconds
     * @Type int
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:7057
     * @MinInclusive 1
     * @MaxInclusive 12000
     * @var int|null
     */
    protected $ringPeriodMilliseconds = null;

    /**
     * @ElementName offHookWarningTimerSeconds
     * @Type int
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:7057
     * @MinInclusive 1
     * @MaxInclusive 360
     * @var int|null
     */
    protected $offHookWarningTimerSeconds = null;

    /**
     * @ElementName enableNationalPrefix
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:7057
     * @var bool|null
     */
    protected $enableNationalPrefix = null;

    /**
     * @ElementName nationalPrefix
     * @Type string
     * @Nillable
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:7057
     * @MinLength 1
     * @MaxLength 2
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $nationalPrefix = null;

    /**
     * @ElementName becomeDefaultCountryCode
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:7057
     * @var bool|null
     */
    protected $becomeDefaultCountryCode = null;

    /**
     * @ElementName maxCallWaitingTones
     * @Type int
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:7057
     * @MinInclusive 1
     * @MaxInclusive 20
     * @var int|null
     */
    protected $maxCallWaitingTones = null;

    /**
     * @ElementName timeBetweenCallWaitingTonesMilliseconds
     * @Type int
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:7057
     * @MinInclusive 0
     * @MaxInclusive 120000
     * @var int|null
     */
    protected $timeBetweenCallWaitingTonesMilliseconds = null;

    /**
     * @ElementName disableNationalPrefixForOffNetCalls
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:7057
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
     * @return string|null
     */
    public function getNationalPrefix()
    {
        return $this->nationalPrefix instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->nationalPrefix;
    }

    /**
     * Setter for nationalPrefix
     *
     * @param string|null $nationalPrefix
     * @return $this
     */
    public function setNationalPrefix($nationalPrefix = null)
    {
        if ($nationalPrefix === null) {
            $this->nationalPrefix = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->nationalPrefix = $nationalPrefix;
        }
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
     * Getter for becomeDefaultCountryCode
     *
     * @return bool
     */
    public function getBecomeDefaultCountryCode()
    {
        return $this->becomeDefaultCountryCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->becomeDefaultCountryCode;
    }

    /**
     * Setter for becomeDefaultCountryCode
     *
     * @param bool $becomeDefaultCountryCode
     * @return $this
     */
    public function setBecomeDefaultCountryCode($becomeDefaultCountryCode)
    {
        $this->becomeDefaultCountryCode = $becomeDefaultCountryCode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetBecomeDefaultCountryCode()
    {
        $this->becomeDefaultCountryCode = null;
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

