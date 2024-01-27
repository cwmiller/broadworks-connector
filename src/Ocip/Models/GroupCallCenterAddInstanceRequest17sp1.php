<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterAddInstanceRequest17sp1
 *
 * Add a Call Center instance to a group.
 *         The domain is required in the serviceUserId.
 *         The response is either SuccessResponse or ErrorResponse.
 *         
 *         Replaced by: GroupCallCenterAddInstanceRequest17sp3
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see GroupCallCenterAddInstanceRequest17sp3
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:4599","type":"sequence"}]
 */
class GroupCallCenterAddInstanceRequest17sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:4599
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:4599
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $groupId = null;

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:4599
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $serviceUserId = null;

    /**
     * @ElementName serviceInstanceProfile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceAddProfileCallCenter
     * @Group d8f04177e438f303b41c211e518706bf:4599
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceAddProfileCallCenter|null
     */
    protected $serviceInstanceProfile = null;

    /**
     * @ElementName type
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterType
     * @Group d8f04177e438f303b41c211e518706bf:4599
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterType|null
     */
    protected $type = null;

    /**
     * @ElementName policy
     * @Type \CWM\BroadWorksConnector\Ocip\Models\HuntPolicy
     * @Group d8f04177e438f303b41c211e518706bf:4599
     * @var \CWM\BroadWorksConnector\Ocip\Models\HuntPolicy|null
     */
    protected $policy = null;

    /**
     * @ElementName enableVideo
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:4599
     * @var bool|null
     */
    protected $enableVideo = null;

    /**
     * @ElementName queueLength
     * @Type int
     * @Group d8f04177e438f303b41c211e518706bf:4599
     * @MinInclusive 0
     * @MaxInclusive 525
     * @var int|null
     */
    protected $queueLength = null;

    /**
     * @ElementName enableReporting
     * @Type bool
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:4599
     * @var bool|null
     */
    protected $enableReporting = null;

    /**
     * @ElementName reportingServerName
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:4599
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $reportingServerName = null;

    /**
     * @ElementName allowCallerToDialEscapeDigit
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:4599
     * @var bool|null
     */
    protected $allowCallerToDialEscapeDigit = null;

    /**
     * @ElementName escapeDigit
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:4599
     * @Length 1
     * @var string|null
     */
    protected $escapeDigit = null;

    /**
     * @ElementName resetCallStatisticsUponEntryInQueue
     * @Type bool
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:4599
     * @var bool|null
     */
    protected $resetCallStatisticsUponEntryInQueue = null;

    /**
     * @ElementName allowAgentLogoff
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:4599
     * @var bool|null
     */
    protected $allowAgentLogoff = null;

    /**
     * @ElementName allowCallWaitingForAgents
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:4599
     * @var bool|null
     */
    protected $allowCallWaitingForAgents = null;

    /**
     * @ElementName allowCallsToAgentsInWrapUp
     * @Type bool
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:4599
     * @var bool|null
     */
    protected $allowCallsToAgentsInWrapUp = null;

    /**
     * @ElementName overrideAgentWrapUpTime
     * @Type bool
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:4599
     * @var bool|null
     */
    protected $overrideAgentWrapUpTime = null;

    /**
     * @ElementName wrapUpSeconds
     * @Type int
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:4599
     * @MinInclusive 1
     * @MaxInclusive 3600
     * @var int|null
     */
    protected $wrapUpSeconds = null;

    /**
     * @ElementName forceDeliveryOfCalls
     * @Type bool
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:4599
     * @var bool|null
     */
    protected $forceDeliveryOfCalls = null;

    /**
     * @ElementName forceDeliveryWaitTimeSeconds
     * @Type int
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:4599
     * @MinInclusive 1
     * @MaxInclusive 10
     * @var int|null
     */
    protected $forceDeliveryWaitTimeSeconds = null;

    /**
     * @ElementName enableAutomaticStateChangeForAgents
     * @Type bool
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:4599
     * @var bool|null
     */
    protected $enableAutomaticStateChangeForAgents = null;

    /**
     * @ElementName agentStateAfterCall
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AgentACDAutomaticState
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:4599
     * @var \CWM\BroadWorksConnector\Ocip\Models\AgentACDAutomaticState|null
     */
    protected $agentStateAfterCall = null;

    /**
     * @ElementName agentUnavailableCode
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:4599
     * @MinLength 1
     * @MaxLength 10
     * @var string|null
     */
    protected $agentUnavailableCode = null;

    /**
     * @ElementName externalPreferredAudioCodec
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AudioFileCodec
     * @Group d8f04177e438f303b41c211e518706bf:4599
     * @var \CWM\BroadWorksConnector\Ocip\Models\AudioFileCodec|null
     */
    protected $externalPreferredAudioCodec = null;

    /**
     * @ElementName internalPreferredAudioCodec
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AudioFileCodec
     * @Group d8f04177e438f303b41c211e518706bf:4599
     * @var \CWM\BroadWorksConnector\Ocip\Models\AudioFileCodec|null
     */
    protected $internalPreferredAudioCodec = null;

    /**
     * @ElementName playRingingWhenOfferingCall
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:4599
     * @var bool|null
     */
    protected $playRingingWhenOfferingCall = null;

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->groupId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @param string $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupId()
    {
        $this->groupId = null;
        return $this;
    }

    /**
     * Getter for serviceUserId
     *
     * @return string
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @param string $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceUserId()
    {
        $this->serviceUserId = null;
        return $this;
    }

    /**
     * Getter for serviceInstanceProfile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceAddProfileCallCenter
     */
    public function getServiceInstanceProfile()
    {
        return $this->serviceInstanceProfile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceInstanceProfile;
    }

    /**
     * Setter for serviceInstanceProfile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceAddProfileCallCenter $serviceInstanceProfile
     * @return $this
     */
    public function setServiceInstanceProfile(\CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceAddProfileCallCenter $serviceInstanceProfile)
    {
        $this->serviceInstanceProfile = $serviceInstanceProfile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceInstanceProfile()
    {
        $this->serviceInstanceProfile = null;
        return $this;
    }

    /**
     * Getter for type
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterType
     */
    public function getType()
    {
        return $this->type instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->type;
    }

    /**
     * Setter for type
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterType $type
     * @return $this
     */
    public function setType(\CWM\BroadWorksConnector\Ocip\Models\CallCenterType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetType()
    {
        $this->type = null;
        return $this;
    }

    /**
     * Getter for policy
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\HuntPolicy
     */
    public function getPolicy()
    {
        return $this->policy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->policy;
    }

    /**
     * Setter for policy
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\HuntPolicy $policy
     * @return $this
     */
    public function setPolicy(\CWM\BroadWorksConnector\Ocip\Models\HuntPolicy $policy)
    {
        $this->policy = $policy;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPolicy()
    {
        $this->policy = null;
        return $this;
    }

    /**
     * Getter for enableVideo
     *
     * @return bool
     */
    public function getEnableVideo()
    {
        return $this->enableVideo instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableVideo;
    }

    /**
     * Setter for enableVideo
     *
     * @param bool $enableVideo
     * @return $this
     */
    public function setEnableVideo($enableVideo)
    {
        $this->enableVideo = $enableVideo;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableVideo()
    {
        $this->enableVideo = null;
        return $this;
    }

    /**
     * Getter for queueLength
     *
     * @return int
     */
    public function getQueueLength()
    {
        return $this->queueLength instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->queueLength;
    }

    /**
     * Setter for queueLength
     *
     * @param int $queueLength
     * @return $this
     */
    public function setQueueLength($queueLength)
    {
        $this->queueLength = $queueLength;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetQueueLength()
    {
        $this->queueLength = null;
        return $this;
    }

    /**
     * Getter for enableReporting
     *
     * @return bool
     */
    public function getEnableReporting()
    {
        return $this->enableReporting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableReporting;
    }

    /**
     * Setter for enableReporting
     *
     * @param bool $enableReporting
     * @return $this
     */
    public function setEnableReporting($enableReporting)
    {
        $this->enableReporting = $enableReporting;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableReporting()
    {
        $this->enableReporting = null;
        return $this;
    }

    /**
     * Getter for reportingServerName
     *
     * @return string
     */
    public function getReportingServerName()
    {
        return $this->reportingServerName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->reportingServerName;
    }

    /**
     * Setter for reportingServerName
     *
     * @param string $reportingServerName
     * @return $this
     */
    public function setReportingServerName($reportingServerName)
    {
        $this->reportingServerName = $reportingServerName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetReportingServerName()
    {
        $this->reportingServerName = null;
        return $this;
    }

    /**
     * Getter for allowCallerToDialEscapeDigit
     *
     * @return bool
     */
    public function getAllowCallerToDialEscapeDigit()
    {
        return $this->allowCallerToDialEscapeDigit instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowCallerToDialEscapeDigit;
    }

    /**
     * Setter for allowCallerToDialEscapeDigit
     *
     * @param bool $allowCallerToDialEscapeDigit
     * @return $this
     */
    public function setAllowCallerToDialEscapeDigit($allowCallerToDialEscapeDigit)
    {
        $this->allowCallerToDialEscapeDigit = $allowCallerToDialEscapeDigit;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowCallerToDialEscapeDigit()
    {
        $this->allowCallerToDialEscapeDigit = null;
        return $this;
    }

    /**
     * Getter for escapeDigit
     *
     * @return string
     */
    public function getEscapeDigit()
    {
        return $this->escapeDigit instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->escapeDigit;
    }

    /**
     * Setter for escapeDigit
     *
     * @param string $escapeDigit
     * @return $this
     */
    public function setEscapeDigit($escapeDigit)
    {
        $this->escapeDigit = $escapeDigit;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEscapeDigit()
    {
        $this->escapeDigit = null;
        return $this;
    }

    /**
     * Getter for resetCallStatisticsUponEntryInQueue
     *
     * @return bool
     */
    public function getResetCallStatisticsUponEntryInQueue()
    {
        return $this->resetCallStatisticsUponEntryInQueue instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->resetCallStatisticsUponEntryInQueue;
    }

    /**
     * Setter for resetCallStatisticsUponEntryInQueue
     *
     * @param bool $resetCallStatisticsUponEntryInQueue
     * @return $this
     */
    public function setResetCallStatisticsUponEntryInQueue($resetCallStatisticsUponEntryInQueue)
    {
        $this->resetCallStatisticsUponEntryInQueue = $resetCallStatisticsUponEntryInQueue;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetResetCallStatisticsUponEntryInQueue()
    {
        $this->resetCallStatisticsUponEntryInQueue = null;
        return $this;
    }

    /**
     * Getter for allowAgentLogoff
     *
     * @return bool
     */
    public function getAllowAgentLogoff()
    {
        return $this->allowAgentLogoff instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowAgentLogoff;
    }

    /**
     * Setter for allowAgentLogoff
     *
     * @param bool $allowAgentLogoff
     * @return $this
     */
    public function setAllowAgentLogoff($allowAgentLogoff)
    {
        $this->allowAgentLogoff = $allowAgentLogoff;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowAgentLogoff()
    {
        $this->allowAgentLogoff = null;
        return $this;
    }

    /**
     * Getter for allowCallWaitingForAgents
     *
     * @return bool
     */
    public function getAllowCallWaitingForAgents()
    {
        return $this->allowCallWaitingForAgents instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowCallWaitingForAgents;
    }

    /**
     * Setter for allowCallWaitingForAgents
     *
     * @param bool $allowCallWaitingForAgents
     * @return $this
     */
    public function setAllowCallWaitingForAgents($allowCallWaitingForAgents)
    {
        $this->allowCallWaitingForAgents = $allowCallWaitingForAgents;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowCallWaitingForAgents()
    {
        $this->allowCallWaitingForAgents = null;
        return $this;
    }

    /**
     * Getter for allowCallsToAgentsInWrapUp
     *
     * @return bool
     */
    public function getAllowCallsToAgentsInWrapUp()
    {
        return $this->allowCallsToAgentsInWrapUp instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowCallsToAgentsInWrapUp;
    }

    /**
     * Setter for allowCallsToAgentsInWrapUp
     *
     * @param bool $allowCallsToAgentsInWrapUp
     * @return $this
     */
    public function setAllowCallsToAgentsInWrapUp($allowCallsToAgentsInWrapUp)
    {
        $this->allowCallsToAgentsInWrapUp = $allowCallsToAgentsInWrapUp;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowCallsToAgentsInWrapUp()
    {
        $this->allowCallsToAgentsInWrapUp = null;
        return $this;
    }

    /**
     * Getter for overrideAgentWrapUpTime
     *
     * @return bool
     */
    public function getOverrideAgentWrapUpTime()
    {
        return $this->overrideAgentWrapUpTime instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->overrideAgentWrapUpTime;
    }

    /**
     * Setter for overrideAgentWrapUpTime
     *
     * @param bool $overrideAgentWrapUpTime
     * @return $this
     */
    public function setOverrideAgentWrapUpTime($overrideAgentWrapUpTime)
    {
        $this->overrideAgentWrapUpTime = $overrideAgentWrapUpTime;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOverrideAgentWrapUpTime()
    {
        $this->overrideAgentWrapUpTime = null;
        return $this;
    }

    /**
     * Getter for wrapUpSeconds
     *
     * @return int
     */
    public function getWrapUpSeconds()
    {
        return $this->wrapUpSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->wrapUpSeconds;
    }

    /**
     * Setter for wrapUpSeconds
     *
     * @param int $wrapUpSeconds
     * @return $this
     */
    public function setWrapUpSeconds($wrapUpSeconds)
    {
        $this->wrapUpSeconds = $wrapUpSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetWrapUpSeconds()
    {
        $this->wrapUpSeconds = null;
        return $this;
    }

    /**
     * Getter for forceDeliveryOfCalls
     *
     * @return bool
     */
    public function getForceDeliveryOfCalls()
    {
        return $this->forceDeliveryOfCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->forceDeliveryOfCalls;
    }

    /**
     * Setter for forceDeliveryOfCalls
     *
     * @param bool $forceDeliveryOfCalls
     * @return $this
     */
    public function setForceDeliveryOfCalls($forceDeliveryOfCalls)
    {
        $this->forceDeliveryOfCalls = $forceDeliveryOfCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetForceDeliveryOfCalls()
    {
        $this->forceDeliveryOfCalls = null;
        return $this;
    }

    /**
     * Getter for forceDeliveryWaitTimeSeconds
     *
     * @return int
     */
    public function getForceDeliveryWaitTimeSeconds()
    {
        return $this->forceDeliveryWaitTimeSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->forceDeliveryWaitTimeSeconds;
    }

    /**
     * Setter for forceDeliveryWaitTimeSeconds
     *
     * @param int $forceDeliveryWaitTimeSeconds
     * @return $this
     */
    public function setForceDeliveryWaitTimeSeconds($forceDeliveryWaitTimeSeconds)
    {
        $this->forceDeliveryWaitTimeSeconds = $forceDeliveryWaitTimeSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetForceDeliveryWaitTimeSeconds()
    {
        $this->forceDeliveryWaitTimeSeconds = null;
        return $this;
    }

    /**
     * Getter for enableAutomaticStateChangeForAgents
     *
     * @return bool
     */
    public function getEnableAutomaticStateChangeForAgents()
    {
        return $this->enableAutomaticStateChangeForAgents instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableAutomaticStateChangeForAgents;
    }

    /**
     * Setter for enableAutomaticStateChangeForAgents
     *
     * @param bool $enableAutomaticStateChangeForAgents
     * @return $this
     */
    public function setEnableAutomaticStateChangeForAgents($enableAutomaticStateChangeForAgents)
    {
        $this->enableAutomaticStateChangeForAgents = $enableAutomaticStateChangeForAgents;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableAutomaticStateChangeForAgents()
    {
        $this->enableAutomaticStateChangeForAgents = null;
        return $this;
    }

    /**
     * Getter for agentStateAfterCall
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AgentACDAutomaticState
     */
    public function getAgentStateAfterCall()
    {
        return $this->agentStateAfterCall instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->agentStateAfterCall;
    }

    /**
     * Setter for agentStateAfterCall
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AgentACDAutomaticState $agentStateAfterCall
     * @return $this
     */
    public function setAgentStateAfterCall(\CWM\BroadWorksConnector\Ocip\Models\AgentACDAutomaticState $agentStateAfterCall)
    {
        $this->agentStateAfterCall = $agentStateAfterCall;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAgentStateAfterCall()
    {
        $this->agentStateAfterCall = null;
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
     * Getter for externalPreferredAudioCodec
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AudioFileCodec
     */
    public function getExternalPreferredAudioCodec()
    {
        return $this->externalPreferredAudioCodec instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->externalPreferredAudioCodec;
    }

    /**
     * Setter for externalPreferredAudioCodec
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AudioFileCodec $externalPreferredAudioCodec
     * @return $this
     */
    public function setExternalPreferredAudioCodec(\CWM\BroadWorksConnector\Ocip\Models\AudioFileCodec $externalPreferredAudioCodec)
    {
        $this->externalPreferredAudioCodec = $externalPreferredAudioCodec;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetExternalPreferredAudioCodec()
    {
        $this->externalPreferredAudioCodec = null;
        return $this;
    }

    /**
     * Getter for internalPreferredAudioCodec
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AudioFileCodec
     */
    public function getInternalPreferredAudioCodec()
    {
        return $this->internalPreferredAudioCodec instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->internalPreferredAudioCodec;
    }

    /**
     * Setter for internalPreferredAudioCodec
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AudioFileCodec $internalPreferredAudioCodec
     * @return $this
     */
    public function setInternalPreferredAudioCodec(\CWM\BroadWorksConnector\Ocip\Models\AudioFileCodec $internalPreferredAudioCodec)
    {
        $this->internalPreferredAudioCodec = $internalPreferredAudioCodec;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetInternalPreferredAudioCodec()
    {
        $this->internalPreferredAudioCodec = null;
        return $this;
    }

    /**
     * Getter for playRingingWhenOfferingCall
     *
     * @return bool
     */
    public function getPlayRingingWhenOfferingCall()
    {
        return $this->playRingingWhenOfferingCall instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->playRingingWhenOfferingCall;
    }

    /**
     * Setter for playRingingWhenOfferingCall
     *
     * @param bool $playRingingWhenOfferingCall
     * @return $this
     */
    public function setPlayRingingWhenOfferingCall($playRingingWhenOfferingCall)
    {
        $this->playRingingWhenOfferingCall = $playRingingWhenOfferingCall;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPlayRingingWhenOfferingCall()
    {
        $this->playRingingWhenOfferingCall = null;
        return $this;
    }
}

