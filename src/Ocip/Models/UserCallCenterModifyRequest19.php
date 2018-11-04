<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallCenterModifyRequest19
 *
 * Modifies the agents call center settings and the availability for an agent in
 * one or more Call Centers.
 *         Contains a list specifying the desired availability status of one or
 * more call centers.
 *         A default unavailable code will be used if the parameter
 * agentUnavailableCode is not active, included or is invalid.
 *         Changing the agentACDState from unavailable to any other state will
 * automatically clear the unavailable code.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class UserCallCenterModifyRequest19 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName agentACDState
     * @var string|null
     */
    private $agentACDState = null;

    /**
     * @ElementName agentThresholdProfileName
     * @var string|null
     */
    private $agentThresholdProfileName = null;

    /**
     * @ElementName agentUnavailableCode
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $agentUnavailableCode = null;

    /**
     * @ElementName useDefaultGuardTimer
     * @var bool|null
     */
    private $useDefaultGuardTimer = null;

    /**
     * @ElementName enableGuardTimer
     * @var bool|null
     */
    private $enableGuardTimer = null;

    /**
     * @ElementName guardTimerSeconds
     * @var int|null
     */
    private $guardTimerSeconds = null;

    /**
     * @ElementName useSystemDefaultUnavailableSettings
     * @var bool|null
     */
    private $useSystemDefaultUnavailableSettings = null;

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
     * @ElementName makeOutgoingCallsAsCallCenter
     * @var bool|null
     */
    private $makeOutgoingCallsAsCallCenter = null;

    /**
     * @ElementName outgoingCallDNIS
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\DNISKey|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $outgoingCallDNIS = null;

    /**
     * @ElementName callCenterAgentSettings
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAgentSettings[]
     */
    private $callCenterAgentSettings = array(
        
    );

    /**
     * Getter for userId
     *
     * @ElementName userId
     * @return string|null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Setter for userId
     *
     * @ElementName userId
     * @param string|null $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * Getter for agentACDState
     *
     * @ElementName agentACDState
     * @return string|null
     */
    public function getAgentACDState()
    {
        return $this->agentACDState;
    }

    /**
     * Setter for agentACDState
     *
     * @ElementName agentACDState
     * @param string|null $agentACDState
     * @return $this
     */
    public function setAgentACDState($agentACDState)
    {
        $this->agentACDState = $agentACDState;
        return $this;
    }

    /**
     * Getter for agentThresholdProfileName
     *
     * @ElementName agentThresholdProfileName
     * @return string|null
     */
    public function getAgentThresholdProfileName()
    {
        return $this->agentThresholdProfileName;
    }

    /**
     * Setter for agentThresholdProfileName
     *
     * @ElementName agentThresholdProfileName
     * @param string|null $agentThresholdProfileName
     * @return $this
     */
    public function setAgentThresholdProfileName($agentThresholdProfileName)
    {
        $this->agentThresholdProfileName = $agentThresholdProfileName;
        return $this;
    }

    /**
     * Getter for agentUnavailableCode
     *
     * @ElementName agentUnavailableCode
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getAgentUnavailableCode()
    {
        return $this->agentUnavailableCode;
    }

    /**
     * Setter for agentUnavailableCode
     *
     * @ElementName agentUnavailableCode
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $agentUnavailableCode
     * @return $this
     */
    public function setAgentUnavailableCode($agentUnavailableCode)
    {
        $this->agentUnavailableCode = $agentUnavailableCode;
        return $this;
    }

    /**
     * Getter for useDefaultGuardTimer
     *
     * @ElementName useDefaultGuardTimer
     * @return bool|null
     */
    public function getUseDefaultGuardTimer()
    {
        return $this->useDefaultGuardTimer;
    }

    /**
     * Setter for useDefaultGuardTimer
     *
     * @ElementName useDefaultGuardTimer
     * @param bool|null $useDefaultGuardTimer
     * @return $this
     */
    public function setUseDefaultGuardTimer($useDefaultGuardTimer)
    {
        $this->useDefaultGuardTimer = $useDefaultGuardTimer;
        return $this;
    }

    /**
     * Getter for enableGuardTimer
     *
     * @ElementName enableGuardTimer
     * @return bool|null
     */
    public function getEnableGuardTimer()
    {
        return $this->enableGuardTimer;
    }

    /**
     * Setter for enableGuardTimer
     *
     * @ElementName enableGuardTimer
     * @param bool|null $enableGuardTimer
     * @return $this
     */
    public function setEnableGuardTimer($enableGuardTimer)
    {
        $this->enableGuardTimer = $enableGuardTimer;
        return $this;
    }

    /**
     * Getter for guardTimerSeconds
     *
     * @ElementName guardTimerSeconds
     * @return int|null
     */
    public function getGuardTimerSeconds()
    {
        return $this->guardTimerSeconds;
    }

    /**
     * Setter for guardTimerSeconds
     *
     * @ElementName guardTimerSeconds
     * @param int|null $guardTimerSeconds
     * @return $this
     */
    public function setGuardTimerSeconds($guardTimerSeconds)
    {
        $this->guardTimerSeconds = $guardTimerSeconds;
        return $this;
    }

    /**
     * Getter for useSystemDefaultUnavailableSettings
     *
     * @ElementName useSystemDefaultUnavailableSettings
     * @return bool|null
     */
    public function getUseSystemDefaultUnavailableSettings()
    {
        return $this->useSystemDefaultUnavailableSettings;
    }

    /**
     * Setter for useSystemDefaultUnavailableSettings
     *
     * @ElementName useSystemDefaultUnavailableSettings
     * @param bool|null $useSystemDefaultUnavailableSettings
     * @return $this
     */
    public function setUseSystemDefaultUnavailableSettings($useSystemDefaultUnavailableSettings)
    {
        $this->useSystemDefaultUnavailableSettings = $useSystemDefaultUnavailableSettings;
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
     * Getter for makeOutgoingCallsAsCallCenter
     *
     * @ElementName makeOutgoingCallsAsCallCenter
     * @return bool|null
     */
    public function getMakeOutgoingCallsAsCallCenter()
    {
        return $this->makeOutgoingCallsAsCallCenter;
    }

    /**
     * Setter for makeOutgoingCallsAsCallCenter
     *
     * @ElementName makeOutgoingCallsAsCallCenter
     * @param bool|null $makeOutgoingCallsAsCallCenter
     * @return $this
     */
    public function setMakeOutgoingCallsAsCallCenter($makeOutgoingCallsAsCallCenter)
    {
        $this->makeOutgoingCallsAsCallCenter = $makeOutgoingCallsAsCallCenter;
        return $this;
    }

    /**
     * Getter for outgoingCallDNIS
     *
     * @ElementName outgoingCallDNIS
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\DNISKey|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getOutgoingCallDNIS()
    {
        return $this->outgoingCallDNIS;
    }

    /**
     * Setter for outgoingCallDNIS
     *
     * @ElementName outgoingCallDNIS
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\DNISKey|null|\CWM\BroadWorksConnector\Ocip\Nil $outgoingCallDNIS
     * @return $this
     */
    public function setOutgoingCallDNIS($outgoingCallDNIS)
    {
        $this->outgoingCallDNIS = $outgoingCallDNIS;
        return $this;
    }

    /**
     * Getter for callCenterAgentSettings
     *
     * @ElementName callCenterAgentSettings
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAgentSettings[]
     */
    public function getCallCenterAgentSettings()
    {
        return $this->callCenterAgentSettings;
    }

    /**
     * Setter for callCenterAgentSettings
     *
     * @ElementName callCenterAgentSettings
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAgentSettings[] $callCenterAgentSettings
     * @return $this
     */
    public function setCallCenterAgentSettings($callCenterAgentSettings)
    {
        $this->callCenterAgentSettings = $callCenterAgentSettings;
        return $this;
    }

    /**
     * Adder for callCenterAgentSettings
     *
     * @ElementName callCenterAgentSettings
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAgentSettings $callCenterAgentSettings
     * @return $this
     */
    public function addCallCenterAgentSettings($callCenterAgentSettings)
    {
        $this->callCenterAgentSettings []= $callCenterAgentSettings;
        return $this;
    }


}

