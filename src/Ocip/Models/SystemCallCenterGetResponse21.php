<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallCenterGetResponse21
 *
 * Response to SystemCallCenterGetRequest21.
 *         
 *          The following elements are only used in AS data mode:
 *           callHandlingSamplingPeriodMinutes, value "15" is returned in Amplify data mode
 *           callHandlingMinimumSamplingSize, value "5" is returned in Amplify data mode
 *           thresholdCrossingNotificationEmailGuardTimerSeconds, value "5" is returned in Amplify mode
 *
 * @see SystemCallCenterGetRequest21
 * @Groups [{"id":"3ac5f05d969bc771d6ba8d344d95aa72:5857","type":"sequence"}]
 */
class SystemCallCenterGetResponse21 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName defaultFromAddress
     * @Type string
     * @Group 3ac5f05d969bc771d6ba8d344d95aa72:5857
     * @var string|null
     */
    private $defaultFromAddress = null;

    /**
     * @ElementName statisticsSamplingPeriodMinutes
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterStatisticsSamplingPeriodMinutes
     * @Group 3ac5f05d969bc771d6ba8d344d95aa72:5857
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterStatisticsSamplingPeriodMinutes|null
     */
    private $statisticsSamplingPeriodMinutes = null;

    /**
     * @ElementName defaultEnableGuardTimer
     * @Type bool
     * @Group 3ac5f05d969bc771d6ba8d344d95aa72:5857
     * @var bool|null
     */
    private $defaultEnableGuardTimer = null;

    /**
     * @ElementName defaultGuardTimerSeconds
     * @Type int
     * @Group 3ac5f05d969bc771d6ba8d344d95aa72:5857
     * @var int|null
     */
    private $defaultGuardTimerSeconds = null;

    /**
     * @ElementName forceAgentUnavailableOnDNDActivation
     * @Type bool
     * @Group 3ac5f05d969bc771d6ba8d344d95aa72:5857
     * @var bool|null
     */
    private $forceAgentUnavailableOnDNDActivation = null;

    /**
     * @ElementName forceAgentUnavailableOnPersonalCalls
     * @Type bool
     * @Group 3ac5f05d969bc771d6ba8d344d95aa72:5857
     * @var bool|null
     */
    private $forceAgentUnavailableOnPersonalCalls = null;

    /**
     * @ElementName forceAgentUnavailableOnBouncedCallLimit
     * @Type bool
     * @Group 3ac5f05d969bc771d6ba8d344d95aa72:5857
     * @var bool|null
     */
    private $forceAgentUnavailableOnBouncedCallLimit = null;

    /**
     * @ElementName numberConsecutiveBouncedCallsToForceAgentUnavailable
     * @Type int
     * @Group 3ac5f05d969bc771d6ba8d344d95aa72:5857
     * @var int|null
     */
    private $numberConsecutiveBouncedCallsToForceAgentUnavailable = null;

    /**
     * @ElementName forceAgentUnavailableOnNotReachable
     * @Type bool
     * @Group 3ac5f05d969bc771d6ba8d344d95aa72:5857
     * @var bool|null
     */
    private $forceAgentUnavailableOnNotReachable = null;

    /**
     * @ElementName defaultPlayRingWhenOfferCall
     * @Type bool
     * @Group 3ac5f05d969bc771d6ba8d344d95aa72:5857
     * @var bool|null
     */
    private $defaultPlayRingWhenOfferCall = null;

    /**
     * @ElementName uniformCallDistributionPolicyScope
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterUniformCallDistributionPolicyScope
     * @Group 3ac5f05d969bc771d6ba8d344d95aa72:5857
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterUniformCallDistributionPolicyScope|null
     */
    private $uniformCallDistributionPolicyScope = null;

    /**
     * @ElementName callHandlingSamplingPeriodMinutes
     * @Type int
     * @Group 3ac5f05d969bc771d6ba8d344d95aa72:5857
     * @var int|null
     */
    private $callHandlingSamplingPeriodMinutes = null;

    /**
     * @ElementName callHandlingMinimumSamplingSize
     * @Type int
     * @Group 3ac5f05d969bc771d6ba8d344d95aa72:5857
     * @var int|null
     */
    private $callHandlingMinimumSamplingSize = null;

    /**
     * @ElementName playToneToAgentForEmergencyCall
     * @Type bool
     * @Group 3ac5f05d969bc771d6ba8d344d95aa72:5857
     * @var bool|null
     */
    private $playToneToAgentForEmergencyCall = null;

    /**
     * @ElementName emergencyCallCLIDPrefix
     * @Type string
     * @Group 3ac5f05d969bc771d6ba8d344d95aa72:5857
     * @var string|null
     */
    private $emergencyCallCLIDPrefix = null;

    /**
     * @ElementName thresholdCrossingNotificationEmailGuardTimerSeconds
     * @Type int
     * @Group 3ac5f05d969bc771d6ba8d344d95aa72:5857
     * @var int|null
     */
    private $thresholdCrossingNotificationEmailGuardTimerSeconds = null;

    /**
     * @ElementName allowAgentDeviceInitiatedForward
     * @Type bool
     * @Group 3ac5f05d969bc771d6ba8d344d95aa72:5857
     * @var bool|null
     */
    private $allowAgentDeviceInitiatedForward = null;

    /**
     * Getter for defaultFromAddress
     *
     * @return string
     */
    public function getDefaultFromAddress()
    {
        return $this->defaultFromAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultFromAddress;
    }

    /**
     * Setter for defaultFromAddress
     *
     * @param string $defaultFromAddress
     * @return $this
     */
    public function setDefaultFromAddress($defaultFromAddress)
    {
        $this->defaultFromAddress = $defaultFromAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultFromAddress()
    {
        $this->defaultFromAddress = null;
        return $this;
    }

    /**
     * Getter for statisticsSamplingPeriodMinutes
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterStatisticsSamplingPeriodMinutes
     */
    public function getStatisticsSamplingPeriodMinutes()
    {
        return $this->statisticsSamplingPeriodMinutes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->statisticsSamplingPeriodMinutes;
    }

    /**
     * Setter for statisticsSamplingPeriodMinutes
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterStatisticsSamplingPeriodMinutes $statisticsSamplingPeriodMinutes
     * @return $this
     */
    public function setStatisticsSamplingPeriodMinutes(\CWM\BroadWorksConnector\Ocip\Models\CallCenterStatisticsSamplingPeriodMinutes $statisticsSamplingPeriodMinutes)
    {
        $this->statisticsSamplingPeriodMinutes = $statisticsSamplingPeriodMinutes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetStatisticsSamplingPeriodMinutes()
    {
        $this->statisticsSamplingPeriodMinutes = null;
        return $this;
    }

    /**
     * Getter for defaultEnableGuardTimer
     *
     * @return bool
     */
    public function getDefaultEnableGuardTimer()
    {
        return $this->defaultEnableGuardTimer instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultEnableGuardTimer;
    }

    /**
     * Setter for defaultEnableGuardTimer
     *
     * @param bool $defaultEnableGuardTimer
     * @return $this
     */
    public function setDefaultEnableGuardTimer($defaultEnableGuardTimer)
    {
        $this->defaultEnableGuardTimer = $defaultEnableGuardTimer;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultEnableGuardTimer()
    {
        $this->defaultEnableGuardTimer = null;
        return $this;
    }

    /**
     * Getter for defaultGuardTimerSeconds
     *
     * @return int
     */
    public function getDefaultGuardTimerSeconds()
    {
        return $this->defaultGuardTimerSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultGuardTimerSeconds;
    }

    /**
     * Setter for defaultGuardTimerSeconds
     *
     * @param int $defaultGuardTimerSeconds
     * @return $this
     */
    public function setDefaultGuardTimerSeconds($defaultGuardTimerSeconds)
    {
        $this->defaultGuardTimerSeconds = $defaultGuardTimerSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultGuardTimerSeconds()
    {
        $this->defaultGuardTimerSeconds = null;
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

    /**
     * Getter for forceAgentUnavailableOnNotReachable
     *
     * @return bool
     */
    public function getForceAgentUnavailableOnNotReachable()
    {
        return $this->forceAgentUnavailableOnNotReachable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->forceAgentUnavailableOnNotReachable;
    }

    /**
     * Setter for forceAgentUnavailableOnNotReachable
     *
     * @param bool $forceAgentUnavailableOnNotReachable
     * @return $this
     */
    public function setForceAgentUnavailableOnNotReachable($forceAgentUnavailableOnNotReachable)
    {
        $this->forceAgentUnavailableOnNotReachable = $forceAgentUnavailableOnNotReachable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetForceAgentUnavailableOnNotReachable()
    {
        $this->forceAgentUnavailableOnNotReachable = null;
        return $this;
    }

    /**
     * Getter for defaultPlayRingWhenOfferCall
     *
     * @return bool
     */
    public function getDefaultPlayRingWhenOfferCall()
    {
        return $this->defaultPlayRingWhenOfferCall instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultPlayRingWhenOfferCall;
    }

    /**
     * Setter for defaultPlayRingWhenOfferCall
     *
     * @param bool $defaultPlayRingWhenOfferCall
     * @return $this
     */
    public function setDefaultPlayRingWhenOfferCall($defaultPlayRingWhenOfferCall)
    {
        $this->defaultPlayRingWhenOfferCall = $defaultPlayRingWhenOfferCall;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultPlayRingWhenOfferCall()
    {
        $this->defaultPlayRingWhenOfferCall = null;
        return $this;
    }

    /**
     * Getter for uniformCallDistributionPolicyScope
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterUniformCallDistributionPolicyScope
     */
    public function getUniformCallDistributionPolicyScope()
    {
        return $this->uniformCallDistributionPolicyScope instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->uniformCallDistributionPolicyScope;
    }

    /**
     * Setter for uniformCallDistributionPolicyScope
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterUniformCallDistributionPolicyScope $uniformCallDistributionPolicyScope
     * @return $this
     */
    public function setUniformCallDistributionPolicyScope(\CWM\BroadWorksConnector\Ocip\Models\CallCenterUniformCallDistributionPolicyScope $uniformCallDistributionPolicyScope)
    {
        $this->uniformCallDistributionPolicyScope = $uniformCallDistributionPolicyScope;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUniformCallDistributionPolicyScope()
    {
        $this->uniformCallDistributionPolicyScope = null;
        return $this;
    }

    /**
     * Getter for callHandlingSamplingPeriodMinutes
     *
     * @return int
     */
    public function getCallHandlingSamplingPeriodMinutes()
    {
        return $this->callHandlingSamplingPeriodMinutes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callHandlingSamplingPeriodMinutes;
    }

    /**
     * Setter for callHandlingSamplingPeriodMinutes
     *
     * @param int $callHandlingSamplingPeriodMinutes
     * @return $this
     */
    public function setCallHandlingSamplingPeriodMinutes($callHandlingSamplingPeriodMinutes)
    {
        $this->callHandlingSamplingPeriodMinutes = $callHandlingSamplingPeriodMinutes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallHandlingSamplingPeriodMinutes()
    {
        $this->callHandlingSamplingPeriodMinutes = null;
        return $this;
    }

    /**
     * Getter for callHandlingMinimumSamplingSize
     *
     * @return int
     */
    public function getCallHandlingMinimumSamplingSize()
    {
        return $this->callHandlingMinimumSamplingSize instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callHandlingMinimumSamplingSize;
    }

    /**
     * Setter for callHandlingMinimumSamplingSize
     *
     * @param int $callHandlingMinimumSamplingSize
     * @return $this
     */
    public function setCallHandlingMinimumSamplingSize($callHandlingMinimumSamplingSize)
    {
        $this->callHandlingMinimumSamplingSize = $callHandlingMinimumSamplingSize;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallHandlingMinimumSamplingSize()
    {
        $this->callHandlingMinimumSamplingSize = null;
        return $this;
    }

    /**
     * Getter for playToneToAgentForEmergencyCall
     *
     * @return bool
     */
    public function getPlayToneToAgentForEmergencyCall()
    {
        return $this->playToneToAgentForEmergencyCall instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->playToneToAgentForEmergencyCall;
    }

    /**
     * Setter for playToneToAgentForEmergencyCall
     *
     * @param bool $playToneToAgentForEmergencyCall
     * @return $this
     */
    public function setPlayToneToAgentForEmergencyCall($playToneToAgentForEmergencyCall)
    {
        $this->playToneToAgentForEmergencyCall = $playToneToAgentForEmergencyCall;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPlayToneToAgentForEmergencyCall()
    {
        $this->playToneToAgentForEmergencyCall = null;
        return $this;
    }

    /**
     * Getter for emergencyCallCLIDPrefix
     *
     * @return string
     */
    public function getEmergencyCallCLIDPrefix()
    {
        return $this->emergencyCallCLIDPrefix instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->emergencyCallCLIDPrefix;
    }

    /**
     * Setter for emergencyCallCLIDPrefix
     *
     * @param string $emergencyCallCLIDPrefix
     * @return $this
     */
    public function setEmergencyCallCLIDPrefix($emergencyCallCLIDPrefix)
    {
        $this->emergencyCallCLIDPrefix = $emergencyCallCLIDPrefix;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEmergencyCallCLIDPrefix()
    {
        $this->emergencyCallCLIDPrefix = null;
        return $this;
    }

    /**
     * Getter for thresholdCrossingNotificationEmailGuardTimerSeconds
     *
     * @return int
     */
    public function getThresholdCrossingNotificationEmailGuardTimerSeconds()
    {
        return $this->thresholdCrossingNotificationEmailGuardTimerSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->thresholdCrossingNotificationEmailGuardTimerSeconds;
    }

    /**
     * Setter for thresholdCrossingNotificationEmailGuardTimerSeconds
     *
     * @param int $thresholdCrossingNotificationEmailGuardTimerSeconds
     * @return $this
     */
    public function setThresholdCrossingNotificationEmailGuardTimerSeconds($thresholdCrossingNotificationEmailGuardTimerSeconds)
    {
        $this->thresholdCrossingNotificationEmailGuardTimerSeconds = $thresholdCrossingNotificationEmailGuardTimerSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetThresholdCrossingNotificationEmailGuardTimerSeconds()
    {
        $this->thresholdCrossingNotificationEmailGuardTimerSeconds = null;
        return $this;
    }

    /**
     * Getter for allowAgentDeviceInitiatedForward
     *
     * @return bool
     */
    public function getAllowAgentDeviceInitiatedForward()
    {
        return $this->allowAgentDeviceInitiatedForward instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowAgentDeviceInitiatedForward;
    }

    /**
     * Setter for allowAgentDeviceInitiatedForward
     *
     * @param bool $allowAgentDeviceInitiatedForward
     * @return $this
     */
    public function setAllowAgentDeviceInitiatedForward($allowAgentDeviceInitiatedForward)
    {
        $this->allowAgentDeviceInitiatedForward = $allowAgentDeviceInitiatedForward;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowAgentDeviceInitiatedForward()
    {
        $this->allowAgentDeviceInitiatedForward = null;
        return $this;
    }


}

