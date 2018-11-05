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
 */
class SystemCountryCodeModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName countryCode
     * @var string|null
     */
    private $countryCode = null;

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
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $nationalPrefix = null;

    /**
     * @ElementName becomeDefaultCountryCode
     * @var bool|null
     */
    private $becomeDefaultCountryCode = null;

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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getNationalPrefix()
    {
        return $this->nationalPrefix;
    }

    /**
     * Setter for nationalPrefix
     *
     * @ElementName nationalPrefix
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $nationalPrefix
     * @return $this
     */
    public function setNationalPrefix($nationalPrefix)
    {
        $this->nationalPrefix = $nationalPrefix;
        return $this;
    }

    /**
     * Getter for becomeDefaultCountryCode
     *
     * @ElementName becomeDefaultCountryCode
     * @return bool|null
     */
    public function getBecomeDefaultCountryCode()
    {
        return $this->becomeDefaultCountryCode;
    }

    /**
     * Setter for becomeDefaultCountryCode
     *
     * @ElementName becomeDefaultCountryCode
     * @param bool|null $becomeDefaultCountryCode
     * @return $this
     */
    public function setBecomeDefaultCountryCode($becomeDefaultCountryCode)
    {
        $this->becomeDefaultCountryCode = $becomeDefaultCountryCode;
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

