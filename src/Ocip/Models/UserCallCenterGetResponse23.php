<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallCenterGetResponse23
 *
 * Response to the UserCallCenterGetRequest23.
 *         Contains the user's call center settings.
 *         Indicates whether the agent is current available (logged in) to each call center in the list.
 *         Contains a table with column headings: "Service User Id", "Phone Number", "Extension", "Available", "Logoff Allowed", "Type",
 *          "Priority","Routing Policy" and "Skill Level".
 *         The valid "Routing Type" values are "Priority Based" and "Skill Based". This column is only populated for Premium Call Centers.
 *         The valid "Skill Level" values are of from 1-20. This column is only populated for Premium Skill Based Call Centers.
 *
 *         The following elements are only used in AS data mode and not returned in XS data mode:
 *           agentACDState
 *           agentThresholdProfileName
 *           agentUnavailableCode
 *           useSystemDefaultUnavailableSettings
 *           forceAgentUnavailableOnDNDActivation
 *           forceAgentUnavailableOnPersonalCalls
 *           forceAgentUnavailableOnBouncedCallLimit
 *           numberConsecutiveBouncedCallsToForceAgentUnavailable
 *           forceAgentUnavailableOnNotReachable
 *           makeOutgoingCallsAsCallCenter
 *           outgoingCallDNIS
 *           useSystemDefaultWrapUpDestination
 *           wrapUpDestination
 *
 *         The following columns are only used in AS data mode and not returned in XS data mode:
 *           "Routing Policy"
 *           "Skill Level"
 *
 * @see UserCallCenterGetRequest23
 * @Groups [{"id":"4d65d3449061c568639c8cc1e2492285:7091","type":"sequence"}]
 */
class UserCallCenterGetResponse23 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName agentACDState
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AgentACDState
     * @Optional
     * @Group 4d65d3449061c568639c8cc1e2492285:7091
     * @var \CWM\BroadWorksConnector\Ocip\Models\AgentACDState|null
     */
    protected $agentACDState = null;

    /**
     * @ElementName agentThresholdProfileName
     * @Type string
     * @Optional
     * @Group 4d65d3449061c568639c8cc1e2492285:7091
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $agentThresholdProfileName = null;

    /**
     * @ElementName agentUnavailableCode
     * @Type string
     * @Optional
     * @Group 4d65d3449061c568639c8cc1e2492285:7091
     * @MinLength 1
     * @MaxLength 10
     * @var string|null
     */
    protected $agentUnavailableCode = null;

    /**
     * @ElementName useDefaultGuardTimer
     * @Type bool
     * @Group 4d65d3449061c568639c8cc1e2492285:7091
     * @var bool|null
     */
    protected $useDefaultGuardTimer = null;

    /**
     * @ElementName enableGuardTimer
     * @Type bool
     * @Group 4d65d3449061c568639c8cc1e2492285:7091
     * @var bool|null
     */
    protected $enableGuardTimer = null;

    /**
     * @ElementName guardTimerSeconds
     * @Type int
     * @Group 4d65d3449061c568639c8cc1e2492285:7091
     * @MinInclusive 1
     * @MaxInclusive 25
     * @var int|null
     */
    protected $guardTimerSeconds = null;

    /**
     * @ElementName useSystemDefaultUnavailableSettings
     * @Type bool
     * @Optional
     * @Group 4d65d3449061c568639c8cc1e2492285:7091
     * @var bool|null
     */
    protected $useSystemDefaultUnavailableSettings = null;

    /**
     * @ElementName forceAgentUnavailableOnDNDActivation
     * @Type bool
     * @Optional
     * @Group 4d65d3449061c568639c8cc1e2492285:7091
     * @var bool|null
     */
    protected $forceAgentUnavailableOnDNDActivation = null;

    /**
     * @ElementName forceAgentUnavailableOnPersonalCalls
     * @Type bool
     * @Optional
     * @Group 4d65d3449061c568639c8cc1e2492285:7091
     * @var bool|null
     */
    protected $forceAgentUnavailableOnPersonalCalls = null;

    /**
     * @ElementName forceAgentUnavailableOnBouncedCallLimit
     * @Type bool
     * @Optional
     * @Group 4d65d3449061c568639c8cc1e2492285:7091
     * @var bool|null
     */
    protected $forceAgentUnavailableOnBouncedCallLimit = null;

    /**
     * @ElementName numberConsecutiveBouncedCallsToForceAgentUnavailable
     * @Type int
     * @Optional
     * @Group 4d65d3449061c568639c8cc1e2492285:7091
     * @MinInclusive 1
     * @MaxInclusive 5
     * @var int|null
     */
    protected $numberConsecutiveBouncedCallsToForceAgentUnavailable = null;

    /**
     * @ElementName forceAgentUnavailableOnNotReachable
     * @Type bool
     * @Optional
     * @Group 4d65d3449061c568639c8cc1e2492285:7091
     * @var bool|null
     */
    protected $forceAgentUnavailableOnNotReachable = null;

    /**
     * @ElementName makeOutgoingCallsAsCallCenter
     * @Type bool
     * @Optional
     * @Group 4d65d3449061c568639c8cc1e2492285:7091
     * @var bool|null
     */
    protected $makeOutgoingCallsAsCallCenter = null;

    /**
     * @ElementName outgoingCallDNIS
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DNISKey
     * @Optional
     * @Group 4d65d3449061c568639c8cc1e2492285:7091
     * @var \CWM\BroadWorksConnector\Ocip\Models\DNISKey|null
     */
    protected $outgoingCallDNIS = null;

    /**
     * @ElementName useSystemDefaultWrapUpDestination
     * @Type bool
     * @Optional
     * @Group 4d65d3449061c568639c8cc1e2492285:7091
     * @var bool|null
     */
    protected $useSystemDefaultWrapUpDestination = null;

    /**
     * @ElementName wrapUpDestination
     * @Type string
     * @Optional
     * @Group 4d65d3449061c568639c8cc1e2492285:7091
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $wrapUpDestination = null;

    /**
     * @ElementName callCenterTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 4d65d3449061c568639c8cc1e2492285:7091
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $callCenterTable = null;

    /**
     * Getter for agentACDState
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AgentACDState
     */
    public function getAgentACDState()
    {
        return $this->agentACDState instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->agentACDState;
    }

    /**
     * Setter for agentACDState
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AgentACDState $agentACDState
     * @return $this
     */
    public function setAgentACDState(\CWM\BroadWorksConnector\Ocip\Models\AgentACDState $agentACDState)
    {
        $this->agentACDState = $agentACDState;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAgentACDState()
    {
        $this->agentACDState = null;
        return $this;
    }

    /**
     * Getter for agentThresholdProfileName
     *
     * @return string
     */
    public function getAgentThresholdProfileName()
    {
        return $this->agentThresholdProfileName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->agentThresholdProfileName;
    }

    /**
     * Setter for agentThresholdProfileName
     *
     * @param string $agentThresholdProfileName
     * @return $this
     */
    public function setAgentThresholdProfileName($agentThresholdProfileName)
    {
        $this->agentThresholdProfileName = $agentThresholdProfileName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAgentThresholdProfileName()
    {
        $this->agentThresholdProfileName = null;
        return $this;
    }

    /**
     * Getter for agentUnavailableCode
     *
     * @return string
     */
    public function getAgentUnavailableCode()
    {
        return $this->agentUnavailableCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->agentUnavailableCode;
    }

    /**
     * Setter for agentUnavailableCode
     *
     * @param string $agentUnavailableCode
     * @return $this
     */
    public function setAgentUnavailableCode($agentUnavailableCode)
    {
        $this->agentUnavailableCode = $agentUnavailableCode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAgentUnavailableCode()
    {
        $this->agentUnavailableCode = null;
        return $this;
    }

    /**
     * Getter for useDefaultGuardTimer
     *
     * @return bool
     */
    public function getUseDefaultGuardTimer()
    {
        return $this->useDefaultGuardTimer instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useDefaultGuardTimer;
    }

    /**
     * Setter for useDefaultGuardTimer
     *
     * @param bool $useDefaultGuardTimer
     * @return $this
     */
    public function setUseDefaultGuardTimer($useDefaultGuardTimer)
    {
        $this->useDefaultGuardTimer = $useDefaultGuardTimer;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseDefaultGuardTimer()
    {
        $this->useDefaultGuardTimer = null;
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
     * Getter for makeOutgoingCallsAsCallCenter
     *
     * @return bool
     */
    public function getMakeOutgoingCallsAsCallCenter()
    {
        return $this->makeOutgoingCallsAsCallCenter instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->makeOutgoingCallsAsCallCenter;
    }

    /**
     * Setter for makeOutgoingCallsAsCallCenter
     *
     * @param bool $makeOutgoingCallsAsCallCenter
     * @return $this
     */
    public function setMakeOutgoingCallsAsCallCenter($makeOutgoingCallsAsCallCenter)
    {
        $this->makeOutgoingCallsAsCallCenter = $makeOutgoingCallsAsCallCenter;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMakeOutgoingCallsAsCallCenter()
    {
        $this->makeOutgoingCallsAsCallCenter = null;
        return $this;
    }

    /**
     * Getter for outgoingCallDNIS
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DNISKey
     */
    public function getOutgoingCallDNIS()
    {
        return $this->outgoingCallDNIS instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->outgoingCallDNIS;
    }

    /**
     * Setter for outgoingCallDNIS
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DNISKey $outgoingCallDNIS
     * @return $this
     */
    public function setOutgoingCallDNIS(\CWM\BroadWorksConnector\Ocip\Models\DNISKey $outgoingCallDNIS)
    {
        $this->outgoingCallDNIS = $outgoingCallDNIS;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOutgoingCallDNIS()
    {
        $this->outgoingCallDNIS = null;
        return $this;
    }

    /**
     * Getter for useSystemDefaultWrapUpDestination
     *
     * @return bool
     */
    public function getUseSystemDefaultWrapUpDestination()
    {
        return $this->useSystemDefaultWrapUpDestination instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useSystemDefaultWrapUpDestination;
    }

    /**
     * Setter for useSystemDefaultWrapUpDestination
     *
     * @param bool $useSystemDefaultWrapUpDestination
     * @return $this
     */
    public function setUseSystemDefaultWrapUpDestination($useSystemDefaultWrapUpDestination)
    {
        $this->useSystemDefaultWrapUpDestination = $useSystemDefaultWrapUpDestination;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseSystemDefaultWrapUpDestination()
    {
        $this->useSystemDefaultWrapUpDestination = null;
        return $this;
    }

    /**
     * Getter for wrapUpDestination
     *
     * @return string
     */
    public function getWrapUpDestination()
    {
        return $this->wrapUpDestination instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->wrapUpDestination;
    }

    /**
     * Setter for wrapUpDestination
     *
     * @param string $wrapUpDestination
     * @return $this
     */
    public function setWrapUpDestination($wrapUpDestination)
    {
        $this->wrapUpDestination = $wrapUpDestination;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetWrapUpDestination()
    {
        $this->wrapUpDestination = null;
        return $this;
    }

    /**
     * Getter for callCenterTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getCallCenterTable()
    {
        return $this->callCenterTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callCenterTable;
    }

    /**
     * Setter for callCenterTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $callCenterTable
     * @return $this
     */
    public function setCallCenterTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $callCenterTable)
    {
        $this->callCenterTable = $callCenterTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallCenterTable()
    {
        $this->callCenterTable = null;
        return $this;
    }
}

