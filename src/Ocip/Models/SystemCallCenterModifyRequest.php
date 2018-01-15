<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallCenterModifyRequest
 *
 * Modify the system level data associated with Call Center.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemCallCenterModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName defaultFromAddress
     * @var string|null
     */
    private $defaultFromAddress = null;

    /**
     * @ElementName statisticsSamplingPeriodMinutes
     * @var int|null
     */
    private $statisticsSamplingPeriodMinutes = null;

    /**
     * @ElementName defaultEnableGuardTimer
     * @var bool|null
     */
    private $defaultEnableGuardTimer = null;

    /**
     * @ElementName defaultGuardTimerSeconds
     * @var int|null
     */
    private $defaultGuardTimerSeconds = null;

    /**
     * @ElementName forceAgentUnavailableOnDNDActivation
     * @var bool|null
     */
    private $forceAgentUnavailableOnDNDActivation = null;

    /**
     * @ElementName forceAgentUnavailableOnPersonalCalls
     * @var bool|null
     */
    private $forceAgentUnavailableOnPersonalCalls = null;

    /**
     * @ElementName forceAgentUnavailableOnBouncedCallLimit
     * @var bool|null
     */
    private $forceAgentUnavailableOnBouncedCallLimit = null;

    /**
     * @ElementName numberConsecutiveBouncedCallsToForceAgentUnavailable
     * @var int|null
     */
    private $numberConsecutiveBouncedCallsToForceAgentUnavailable = null;

    /**
     * @ElementName forceAgentUnavailableOnNotReachable
     * @var bool|null
     */
    private $forceAgentUnavailableOnNotReachable = null;

    /**
     * @ElementName defaultPlayRingWhenOfferCall
     * @var bool|null
     */
    private $defaultPlayRingWhenOfferCall = null;

    /**
     * @ElementName uniformCallDistributionPolicyScope
     * @var string|null
     */
    private $uniformCallDistributionPolicyScope = null;

    /**
     * @ElementName callHandlingSamplingPeriodMinutes
     * @var int|null
     */
    private $callHandlingSamplingPeriodMinutes = null;

    /**
     * @ElementName callHandlingMinimumSamplingSize
     * @var int|null
     */
    private $callHandlingMinimumSamplingSize = null;

    /**
     * @ElementName playToneToAgentForEmergencyCall
     * @var bool|null
     */
    private $playToneToAgentForEmergencyCall = null;

    /**
     * @ElementName emergencyCallCLIDPrefix
     * @var string|null
     */
    private $emergencyCallCLIDPrefix = null;

    /**
     * @ElementName thresholdCrossingNotificationEmailGuardTimerSeconds
     * @var int|null
     */
    private $thresholdCrossingNotificationEmailGuardTimerSeconds = null;

    /**
     * @ElementName allowAgentDeviceInitiatedForward
     * @var bool|null
     */
    private $allowAgentDeviceInitiatedForward = null;

    /**
     * Getter for defaultFromAddress
     *
     * @ElementName defaultFromAddress
     * @return string|null
     */
    public function getDefaultFromAddress()
    {
        return $this->defaultFromAddress;
    }

    /**
     * Setter for defaultFromAddress
     *
     * @ElementName defaultFromAddress
     * @param string|null $defaultFromAddress
     * @return $this
     */
    public function setDefaultFromAddress($defaultFromAddress)
    {
        $this->defaultFromAddress = $defaultFromAddress;
        return $this;
    }

    /**
     * Getter for statisticsSamplingPeriodMinutes
     *
     * @ElementName statisticsSamplingPeriodMinutes
     * @return int|null
     */
    public function getStatisticsSamplingPeriodMinutes()
    {
        return $this->statisticsSamplingPeriodMinutes;
    }

    /**
     * Setter for statisticsSamplingPeriodMinutes
     *
     * @ElementName statisticsSamplingPeriodMinutes
     * @param int|null $statisticsSamplingPeriodMinutes
     * @return $this
     */
    public function setStatisticsSamplingPeriodMinutes($statisticsSamplingPeriodMinutes)
    {
        $this->statisticsSamplingPeriodMinutes = $statisticsSamplingPeriodMinutes;
        return $this;
    }

    /**
     * Getter for defaultEnableGuardTimer
     *
     * @ElementName defaultEnableGuardTimer
     * @return bool|null
     */
    public function getDefaultEnableGuardTimer()
    {
        return $this->defaultEnableGuardTimer;
    }

    /**
     * Setter for defaultEnableGuardTimer
     *
     * @ElementName defaultEnableGuardTimer
     * @param bool|null $defaultEnableGuardTimer
     * @return $this
     */
    public function setDefaultEnableGuardTimer($defaultEnableGuardTimer)
    {
        $this->defaultEnableGuardTimer = $defaultEnableGuardTimer;
        return $this;
    }

    /**
     * Getter for defaultGuardTimerSeconds
     *
     * @ElementName defaultGuardTimerSeconds
     * @return int|null
     */
    public function getDefaultGuardTimerSeconds()
    {
        return $this->defaultGuardTimerSeconds;
    }

    /**
     * Setter for defaultGuardTimerSeconds
     *
     * @ElementName defaultGuardTimerSeconds
     * @param int|null $defaultGuardTimerSeconds
     * @return $this
     */
    public function setDefaultGuardTimerSeconds($defaultGuardTimerSeconds)
    {
        $this->defaultGuardTimerSeconds = $defaultGuardTimerSeconds;
        return $this;
    }

    /**
     * Getter for forceAgentUnavailableOnDNDActivation
     *
     * @ElementName forceAgentUnavailableOnDNDActivation
     * @return bool|null
     */
    public function getForceAgentUnavailableOnDNDActivation()
    {
        return $this->forceAgentUnavailableOnDNDActivation;
    }

    /**
     * Setter for forceAgentUnavailableOnDNDActivation
     *
     * @ElementName forceAgentUnavailableOnDNDActivation
     * @param bool|null $forceAgentUnavailableOnDNDActivation
     * @return $this
     */
    public function setForceAgentUnavailableOnDNDActivation($forceAgentUnavailableOnDNDActivation)
    {
        $this->forceAgentUnavailableOnDNDActivation = $forceAgentUnavailableOnDNDActivation;
        return $this;
    }

    /**
     * Getter for forceAgentUnavailableOnPersonalCalls
     *
     * @ElementName forceAgentUnavailableOnPersonalCalls
     * @return bool|null
     */
    public function getForceAgentUnavailableOnPersonalCalls()
    {
        return $this->forceAgentUnavailableOnPersonalCalls;
    }

    /**
     * Setter for forceAgentUnavailableOnPersonalCalls
     *
     * @ElementName forceAgentUnavailableOnPersonalCalls
     * @param bool|null $forceAgentUnavailableOnPersonalCalls
     * @return $this
     */
    public function setForceAgentUnavailableOnPersonalCalls($forceAgentUnavailableOnPersonalCalls)
    {
        $this->forceAgentUnavailableOnPersonalCalls = $forceAgentUnavailableOnPersonalCalls;
        return $this;
    }

    /**
     * Getter for forceAgentUnavailableOnBouncedCallLimit
     *
     * @ElementName forceAgentUnavailableOnBouncedCallLimit
     * @return bool|null
     */
    public function getForceAgentUnavailableOnBouncedCallLimit()
    {
        return $this->forceAgentUnavailableOnBouncedCallLimit;
    }

    /**
     * Setter for forceAgentUnavailableOnBouncedCallLimit
     *
     * @ElementName forceAgentUnavailableOnBouncedCallLimit
     * @param bool|null $forceAgentUnavailableOnBouncedCallLimit
     * @return $this
     */
    public function setForceAgentUnavailableOnBouncedCallLimit($forceAgentUnavailableOnBouncedCallLimit)
    {
        $this->forceAgentUnavailableOnBouncedCallLimit = $forceAgentUnavailableOnBouncedCallLimit;
        return $this;
    }

    /**
     * Getter for numberConsecutiveBouncedCallsToForceAgentUnavailable
     *
     * @ElementName numberConsecutiveBouncedCallsToForceAgentUnavailable
     * @return int|null
     */
    public function getNumberConsecutiveBouncedCallsToForceAgentUnavailable()
    {
        return $this->numberConsecutiveBouncedCallsToForceAgentUnavailable;
    }

    /**
     * Setter for numberConsecutiveBouncedCallsToForceAgentUnavailable
     *
     * @ElementName numberConsecutiveBouncedCallsToForceAgentUnavailable
     * @param int|null $numberConsecutiveBouncedCallsToForceAgentUnavailable
     * @return $this
     */
    public function setNumberConsecutiveBouncedCallsToForceAgentUnavailable($numberConsecutiveBouncedCallsToForceAgentUnavailable)
    {
        $this->numberConsecutiveBouncedCallsToForceAgentUnavailable = $numberConsecutiveBouncedCallsToForceAgentUnavailable;
        return $this;
    }

    /**
     * Getter for forceAgentUnavailableOnNotReachable
     *
     * @ElementName forceAgentUnavailableOnNotReachable
     * @return bool|null
     */
    public function getForceAgentUnavailableOnNotReachable()
    {
        return $this->forceAgentUnavailableOnNotReachable;
    }

    /**
     * Setter for forceAgentUnavailableOnNotReachable
     *
     * @ElementName forceAgentUnavailableOnNotReachable
     * @param bool|null $forceAgentUnavailableOnNotReachable
     * @return $this
     */
    public function setForceAgentUnavailableOnNotReachable($forceAgentUnavailableOnNotReachable)
    {
        $this->forceAgentUnavailableOnNotReachable = $forceAgentUnavailableOnNotReachable;
        return $this;
    }

    /**
     * Getter for defaultPlayRingWhenOfferCall
     *
     * @ElementName defaultPlayRingWhenOfferCall
     * @return bool|null
     */
    public function getDefaultPlayRingWhenOfferCall()
    {
        return $this->defaultPlayRingWhenOfferCall;
    }

    /**
     * Setter for defaultPlayRingWhenOfferCall
     *
     * @ElementName defaultPlayRingWhenOfferCall
     * @param bool|null $defaultPlayRingWhenOfferCall
     * @return $this
     */
    public function setDefaultPlayRingWhenOfferCall($defaultPlayRingWhenOfferCall)
    {
        $this->defaultPlayRingWhenOfferCall = $defaultPlayRingWhenOfferCall;
        return $this;
    }

    /**
     * Getter for uniformCallDistributionPolicyScope
     *
     * @ElementName uniformCallDistributionPolicyScope
     * @return string|null
     */
    public function getUniformCallDistributionPolicyScope()
    {
        return $this->uniformCallDistributionPolicyScope;
    }

    /**
     * Setter for uniformCallDistributionPolicyScope
     *
     * @ElementName uniformCallDistributionPolicyScope
     * @param string|null $uniformCallDistributionPolicyScope
     * @return $this
     */
    public function setUniformCallDistributionPolicyScope($uniformCallDistributionPolicyScope)
    {
        $this->uniformCallDistributionPolicyScope = $uniformCallDistributionPolicyScope;
        return $this;
    }

    /**
     * Getter for callHandlingSamplingPeriodMinutes
     *
     * @ElementName callHandlingSamplingPeriodMinutes
     * @return int|null
     */
    public function getCallHandlingSamplingPeriodMinutes()
    {
        return $this->callHandlingSamplingPeriodMinutes;
    }

    /**
     * Setter for callHandlingSamplingPeriodMinutes
     *
     * @ElementName callHandlingSamplingPeriodMinutes
     * @param int|null $callHandlingSamplingPeriodMinutes
     * @return $this
     */
    public function setCallHandlingSamplingPeriodMinutes($callHandlingSamplingPeriodMinutes)
    {
        $this->callHandlingSamplingPeriodMinutes = $callHandlingSamplingPeriodMinutes;
        return $this;
    }

    /**
     * Getter for callHandlingMinimumSamplingSize
     *
     * @ElementName callHandlingMinimumSamplingSize
     * @return int|null
     */
    public function getCallHandlingMinimumSamplingSize()
    {
        return $this->callHandlingMinimumSamplingSize;
    }

    /**
     * Setter for callHandlingMinimumSamplingSize
     *
     * @ElementName callHandlingMinimumSamplingSize
     * @param int|null $callHandlingMinimumSamplingSize
     * @return $this
     */
    public function setCallHandlingMinimumSamplingSize($callHandlingMinimumSamplingSize)
    {
        $this->callHandlingMinimumSamplingSize = $callHandlingMinimumSamplingSize;
        return $this;
    }

    /**
     * Getter for playToneToAgentForEmergencyCall
     *
     * @ElementName playToneToAgentForEmergencyCall
     * @return bool|null
     */
    public function getPlayToneToAgentForEmergencyCall()
    {
        return $this->playToneToAgentForEmergencyCall;
    }

    /**
     * Setter for playToneToAgentForEmergencyCall
     *
     * @ElementName playToneToAgentForEmergencyCall
     * @param bool|null $playToneToAgentForEmergencyCall
     * @return $this
     */
    public function setPlayToneToAgentForEmergencyCall($playToneToAgentForEmergencyCall)
    {
        $this->playToneToAgentForEmergencyCall = $playToneToAgentForEmergencyCall;
        return $this;
    }

    /**
     * Getter for emergencyCallCLIDPrefix
     *
     * @ElementName emergencyCallCLIDPrefix
     * @return string|null
     */
    public function getEmergencyCallCLIDPrefix()
    {
        return $this->emergencyCallCLIDPrefix;
    }

    /**
     * Setter for emergencyCallCLIDPrefix
     *
     * @ElementName emergencyCallCLIDPrefix
     * @param string|null $emergencyCallCLIDPrefix
     * @return $this
     */
    public function setEmergencyCallCLIDPrefix($emergencyCallCLIDPrefix)
    {
        $this->emergencyCallCLIDPrefix = $emergencyCallCLIDPrefix;
        return $this;
    }

    /**
     * Getter for thresholdCrossingNotificationEmailGuardTimerSeconds
     *
     * @ElementName thresholdCrossingNotificationEmailGuardTimerSeconds
     * @return int|null
     */
    public function getThresholdCrossingNotificationEmailGuardTimerSeconds()
    {
        return $this->thresholdCrossingNotificationEmailGuardTimerSeconds;
    }

    /**
     * Setter for thresholdCrossingNotificationEmailGuardTimerSeconds
     *
     * @ElementName thresholdCrossingNotificationEmailGuardTimerSeconds
     * @param int|null $thresholdCrossingNotificationEmailGuardTimerSeconds
     * @return $this
     */
    public function setThresholdCrossingNotificationEmailGuardTimerSeconds($thresholdCrossingNotificationEmailGuardTimerSeconds)
    {
        $this->thresholdCrossingNotificationEmailGuardTimerSeconds = $thresholdCrossingNotificationEmailGuardTimerSeconds;
        return $this;
    }

    /**
     * Getter for allowAgentDeviceInitiatedForward
     *
     * @ElementName allowAgentDeviceInitiatedForward
     * @return bool|null
     */
    public function getAllowAgentDeviceInitiatedForward()
    {
        return $this->allowAgentDeviceInitiatedForward;
    }

    /**
     * Setter for allowAgentDeviceInitiatedForward
     *
     * @ElementName allowAgentDeviceInitiatedForward
     * @param bool|null $allowAgentDeviceInitiatedForward
     * @return $this
     */
    public function setAllowAgentDeviceInitiatedForward($allowAgentDeviceInitiatedForward)
    {
        $this->allowAgentDeviceInitiatedForward = $allowAgentDeviceInitiatedForward;
        return $this;
    }


}

