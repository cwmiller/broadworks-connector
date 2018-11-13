<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterGetResponse
 *
 * Response to GroupCallCenterGetRequest.
 *         
 *         Replaced by GroupCallCenterGetResponse17sp4.
 *
 * @see GroupCallCenterGetRequest
 * @see GroupCallCenterGetResponse17sp4
 */
class GroupCallCenterGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName useSystemDefaultGuardTimer
     * @Type bool
     * @var bool|null
     */
    private $useSystemDefaultGuardTimer = null;

    /**
     * @ElementName enableGuardTimer
     * @Type bool
     * @var bool|null
     */
    private $enableGuardTimer = null;

    /**
     * @ElementName guardTimerSeconds
     * @Type int
     * @var int|null
     */
    private $guardTimerSeconds = null;

    /**
     * @ElementName useSystemDefaultUnavailableSettings
     * @Type bool
     * @var bool|null
     */
    private $useSystemDefaultUnavailableSettings = null;

    /**
     * @ElementName forceAgentUnavailableOnDNDActivation
     * @Type bool
     * @var bool|null
     */
    private $forceAgentUnavailableOnDNDActivation = null;

    /**
     * @ElementName forceAgentUnavailableOnPersonalCalls
     * @Type bool
     * @var bool|null
     */
    private $forceAgentUnavailableOnPersonalCalls = null;

    /**
     * @ElementName forceAgentUnavailableOnBouncedCallLimit
     * @Type bool
     * @var bool|null
     */
    private $forceAgentUnavailableOnBouncedCallLimit = null;

    /**
     * @ElementName numberConsecutiveBouncedCallsToForceAgentUnavailable
     * @Type int
     * @var int|null
     */
    private $numberConsecutiveBouncedCallsToForceAgentUnavailable = null;

    /**
     * Getter for useSystemDefaultGuardTimer
     *
     * @return bool
     */
    public function getUseSystemDefaultGuardTimer()
    {
        return $this->useSystemDefaultGuardTimer instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useSystemDefaultGuardTimer;
    }

    /**
     * Setter for useSystemDefaultGuardTimer
     *
     * @param bool $useSystemDefaultGuardTimer
     * @return $this
     */
    public function setUseSystemDefaultGuardTimer($useSystemDefaultGuardTimer)
    {
        $this->useSystemDefaultGuardTimer = $useSystemDefaultGuardTimer;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseSystemDefaultGuardTimer()
    {
        $this->useSystemDefaultGuardTimer = null;
        return $this;
    }

    /**
     * Getter for enableGuardTimer
     *
     * @return bool
     */
    public function getEnableGuardTimer()
    {
        return $this->enableGuardTimer instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableGuardTimer;
    }

    /**
     * Setter for enableGuardTimer
     *
     * @param bool $enableGuardTimer
     * @return $this
     */
    public function setEnableGuardTimer($enableGuardTimer)
    {
        $this->enableGuardTimer = $enableGuardTimer;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableGuardTimer()
    {
        $this->enableGuardTimer = null;
        return $this;
    }

    /**
     * Getter for guardTimerSeconds
     *
     * @return int
     */
    public function getGuardTimerSeconds()
    {
        return $this->guardTimerSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->guardTimerSeconds;
    }

    /**
     * Setter for guardTimerSeconds
     *
     * @param int $guardTimerSeconds
     * @return $this
     */
    public function setGuardTimerSeconds($guardTimerSeconds)
    {
        $this->guardTimerSeconds = $guardTimerSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGuardTimerSeconds()
    {
        $this->guardTimerSeconds = null;
        return $this;
    }

    /**
     * Getter for useSystemDefaultUnavailableSettings
     *
     * @return bool
     */
    public function getUseSystemDefaultUnavailableSettings()
    {
        return $this->useSystemDefaultUnavailableSettings instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useSystemDefaultUnavailableSettings;
    }

    /**
     * Setter for useSystemDefaultUnavailableSettings
     *
     * @param bool $useSystemDefaultUnavailableSettings
     * @return $this
     */
    public function setUseSystemDefaultUnavailableSettings($useSystemDefaultUnavailableSettings)
    {
        $this->useSystemDefaultUnavailableSettings = $useSystemDefaultUnavailableSettings;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseSystemDefaultUnavailableSettings()
    {
        $this->useSystemDefaultUnavailableSettings = null;
        return $this;
    }

    /**
     * Getter for forceAgentUnavailableOnDNDActivation
     *
     * @return bool
     */
    public function getForceAgentUnavailableOnDNDActivation()
    {
        return $this->forceAgentUnavailableOnDNDActivation instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->forceAgentUnavailableOnDNDActivation;
    }

    /**
     * Setter for forceAgentUnavailableOnDNDActivation
     *
     * @param bool $forceAgentUnavailableOnDNDActivation
     * @return $this
     */
    public function setForceAgentUnavailableOnDNDActivation($forceAgentUnavailableOnDNDActivation)
    {
        $this->forceAgentUnavailableOnDNDActivation = $forceAgentUnavailableOnDNDActivation;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetForceAgentUnavailableOnDNDActivation()
    {
        $this->forceAgentUnavailableOnDNDActivation = null;
        return $this;
    }

    /**
     * Getter for forceAgentUnavailableOnPersonalCalls
     *
     * @return bool
     */
    public function getForceAgentUnavailableOnPersonalCalls()
    {
        return $this->forceAgentUnavailableOnPersonalCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->forceAgentUnavailableOnPersonalCalls;
    }

    /**
     * Setter for forceAgentUnavailableOnPersonalCalls
     *
     * @param bool $forceAgentUnavailableOnPersonalCalls
     * @return $this
     */
    public function setForceAgentUnavailableOnPersonalCalls($forceAgentUnavailableOnPersonalCalls)
    {
        $this->forceAgentUnavailableOnPersonalCalls = $forceAgentUnavailableOnPersonalCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetForceAgentUnavailableOnPersonalCalls()
    {
        $this->forceAgentUnavailableOnPersonalCalls = null;
        return $this;
    }

    /**
     * Getter for forceAgentUnavailableOnBouncedCallLimit
     *
     * @return bool
     */
    public function getForceAgentUnavailableOnBouncedCallLimit()
    {
        return $this->forceAgentUnavailableOnBouncedCallLimit instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->forceAgentUnavailableOnBouncedCallLimit;
    }

    /**
     * Setter for forceAgentUnavailableOnBouncedCallLimit
     *
     * @param bool $forceAgentUnavailableOnBouncedCallLimit
     * @return $this
     */
    public function setForceAgentUnavailableOnBouncedCallLimit($forceAgentUnavailableOnBouncedCallLimit)
    {
        $this->forceAgentUnavailableOnBouncedCallLimit = $forceAgentUnavailableOnBouncedCallLimit;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetForceAgentUnavailableOnBouncedCallLimit()
    {
        $this->forceAgentUnavailableOnBouncedCallLimit = null;
        return $this;
    }

    /**
     * Getter for numberConsecutiveBouncedCallsToForceAgentUnavailable
     *
     * @return int
     */
    public function getNumberConsecutiveBouncedCallsToForceAgentUnavailable()
    {
        return $this->numberConsecutiveBouncedCallsToForceAgentUnavailable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->numberConsecutiveBouncedCallsToForceAgentUnavailable;
    }

    /**
     * Setter for numberConsecutiveBouncedCallsToForceAgentUnavailable
     *
     * @param int $numberConsecutiveBouncedCallsToForceAgentUnavailable
     * @return $this
     */
    public function setNumberConsecutiveBouncedCallsToForceAgentUnavailable($numberConsecutiveBouncedCallsToForceAgentUnavailable)
    {
        $this->numberConsecutiveBouncedCallsToForceAgentUnavailable = $numberConsecutiveBouncedCallsToForceAgentUnavailable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNumberConsecutiveBouncedCallsToForceAgentUnavailable()
    {
        $this->numberConsecutiveBouncedCallsToForceAgentUnavailable = null;
        return $this;
    }


}

