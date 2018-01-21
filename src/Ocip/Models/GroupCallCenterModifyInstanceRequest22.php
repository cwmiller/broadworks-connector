<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterModifyInstanceRequest22
 *
 * Request to modify a Call Center instance.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupCallCenterModifyInstanceRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName serviceInstanceProfile
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceModifyProfile|null
     */
    private $serviceInstanceProfile = null;

    /**
     * @ElementName type
     * @var string|null
     */
    private $type = null;

    /**
     * @ElementName routingType
     * @var string|null
     */
    private $routingType = null;

    /**
     * @ElementName policy
     * @var string|null
     */
    private $policy = null;

    /**
     * @ElementName enableVideo
     * @var bool|null
     */
    private $enableVideo = null;

    /**
     * @ElementName queueLength
     * @var int|null
     */
    private $queueLength = null;

    /**
     * @ElementName enableReporting
     * @var bool|null
     */
    private $enableReporting = null;

    /**
     * @ElementName allowCallerToDialEscapeDigit
     * @var bool|null
     */
    private $allowCallerToDialEscapeDigit = null;

    /**
     * @ElementName escapeDigit
     * @var string|null
     */
    private $escapeDigit = null;

    /**
     * @ElementName resetCallStatisticsUponEntryInQueue
     * @var bool|null
     */
    private $resetCallStatisticsUponEntryInQueue = null;

    /**
     * @ElementName allowAgentLogoff
     * @var bool|null
     */
    private $allowAgentLogoff = null;

    /**
     * @ElementName allowCallWaitingForAgents
     * @var bool|null
     */
    private $allowCallWaitingForAgents = null;

    /**
     * @ElementName allowCallsToAgentsInWrapUp
     * @var bool|null
     */
    private $allowCallsToAgentsInWrapUp = null;

    /**
     * @ElementName overrideAgentWrapUpTime
     * @var bool|null
     */
    private $overrideAgentWrapUpTime = null;

    /**
     * @ElementName wrapUpSeconds
     * @var int|null
     */
    private $wrapUpSeconds = null;

    /**
     * @ElementName forceDeliveryOfCalls
     * @var bool|null
     */
    private $forceDeliveryOfCalls = null;

    /**
     * @ElementName forceDeliveryWaitTimeSeconds
     * @var int|null
     */
    private $forceDeliveryWaitTimeSeconds = null;

    /**
     * @ElementName enableAutomaticStateChangeForAgents
     * @var bool|null
     */
    private $enableAutomaticStateChangeForAgents = null;

    /**
     * @ElementName agentStateAfterCall
     * @var string|null
     */
    private $agentStateAfterCall = null;

    /**
     * @ElementName agentUnavailableCode
     * @var string|null
     */
    private $agentUnavailableCode = null;

    /**
     * @ElementName externalPreferredAudioCodec
     * @var string|null
     */
    private $externalPreferredAudioCodec = null;

    /**
     * @ElementName internalPreferredAudioCodec
     * @var string|null
     */
    private $internalPreferredAudioCodec = null;

    /**
     * @ElementName playRingingWhenOfferingCall
     * @var bool|null
     */
    private $playRingingWhenOfferingCall = null;

    /**
     * @ElementName networkClassOfService
     * @var string|null
     */
    private $networkClassOfService = null;

    /**
     * Getter for serviceUserId
     *
     * @ElementName serviceUserId
     * @return string|null
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @ElementName serviceUserId
     * @param string|null $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }

    /**
     * Getter for serviceInstanceProfile
     *
     * @ElementName serviceInstanceProfile
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceModifyProfile|null
     */
    public function getServiceInstanceProfile()
    {
        return $this->serviceInstanceProfile;
    }

    /**
     * Setter for serviceInstanceProfile
     *
     * @ElementName serviceInstanceProfile
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceModifyProfile|null $serviceInstanceProfile
     * @return $this
     */
    public function setServiceInstanceProfile($serviceInstanceProfile)
    {
        $this->serviceInstanceProfile = $serviceInstanceProfile;
        return $this;
    }

    /**
     * Getter for type
     *
     * @ElementName type
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Setter for type
     *
     * @ElementName type
     * @param string|null $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Getter for routingType
     *
     * @ElementName routingType
     * @return string|null
     */
    public function getRoutingType()
    {
        return $this->routingType;
    }

    /**
     * Setter for routingType
     *
     * @ElementName routingType
     * @param string|null $routingType
     * @return $this
     */
    public function setRoutingType($routingType)
    {
        $this->routingType = $routingType;
        return $this;
    }

    /**
     * Getter for policy
     *
     * @ElementName policy
     * @return string|null
     */
    public function getPolicy()
    {
        return $this->policy;
    }

    /**
     * Setter for policy
     *
     * @ElementName policy
     * @param string|null $policy
     * @return $this
     */
    public function setPolicy($policy)
    {
        $this->policy = $policy;
        return $this;
    }

    /**
     * Getter for enableVideo
     *
     * @ElementName enableVideo
     * @return bool|null
     */
    public function getEnableVideo()
    {
        return $this->enableVideo;
    }

    /**
     * Setter for enableVideo
     *
     * @ElementName enableVideo
     * @param bool|null $enableVideo
     * @return $this
     */
    public function setEnableVideo($enableVideo)
    {
        $this->enableVideo = $enableVideo;
        return $this;
    }

    /**
     * Getter for queueLength
     *
     * @ElementName queueLength
     * @return int|null
     */
    public function getQueueLength()
    {
        return $this->queueLength;
    }

    /**
     * Setter for queueLength
     *
     * @ElementName queueLength
     * @param int|null $queueLength
     * @return $this
     */
    public function setQueueLength($queueLength)
    {
        $this->queueLength = $queueLength;
        return $this;
    }

    /**
     * Getter for enableReporting
     *
     * @ElementName enableReporting
     * @return bool|null
     */
    public function getEnableReporting()
    {
        return $this->enableReporting;
    }

    /**
     * Setter for enableReporting
     *
     * @ElementName enableReporting
     * @param bool|null $enableReporting
     * @return $this
     */
    public function setEnableReporting($enableReporting)
    {
        $this->enableReporting = $enableReporting;
        return $this;
    }

    /**
     * Getter for allowCallerToDialEscapeDigit
     *
     * @ElementName allowCallerToDialEscapeDigit
     * @return bool|null
     */
    public function getAllowCallerToDialEscapeDigit()
    {
        return $this->allowCallerToDialEscapeDigit;
    }

    /**
     * Setter for allowCallerToDialEscapeDigit
     *
     * @ElementName allowCallerToDialEscapeDigit
     * @param bool|null $allowCallerToDialEscapeDigit
     * @return $this
     */
    public function setAllowCallerToDialEscapeDigit($allowCallerToDialEscapeDigit)
    {
        $this->allowCallerToDialEscapeDigit = $allowCallerToDialEscapeDigit;
        return $this;
    }

    /**
     * Getter for escapeDigit
     *
     * @ElementName escapeDigit
     * @return string|null
     */
    public function getEscapeDigit()
    {
        return $this->escapeDigit;
    }

    /**
     * Setter for escapeDigit
     *
     * @ElementName escapeDigit
     * @param string|null $escapeDigit
     * @return $this
     */
    public function setEscapeDigit($escapeDigit)
    {
        $this->escapeDigit = $escapeDigit;
        return $this;
    }

    /**
     * Getter for resetCallStatisticsUponEntryInQueue
     *
     * @ElementName resetCallStatisticsUponEntryInQueue
     * @return bool|null
     */
    public function getResetCallStatisticsUponEntryInQueue()
    {
        return $this->resetCallStatisticsUponEntryInQueue;
    }

    /**
     * Setter for resetCallStatisticsUponEntryInQueue
     *
     * @ElementName resetCallStatisticsUponEntryInQueue
     * @param bool|null $resetCallStatisticsUponEntryInQueue
     * @return $this
     */
    public function setResetCallStatisticsUponEntryInQueue($resetCallStatisticsUponEntryInQueue)
    {
        $this->resetCallStatisticsUponEntryInQueue = $resetCallStatisticsUponEntryInQueue;
        return $this;
    }

    /**
     * Getter for allowAgentLogoff
     *
     * @ElementName allowAgentLogoff
     * @return bool|null
     */
    public function getAllowAgentLogoff()
    {
        return $this->allowAgentLogoff;
    }

    /**
     * Setter for allowAgentLogoff
     *
     * @ElementName allowAgentLogoff
     * @param bool|null $allowAgentLogoff
     * @return $this
     */
    public function setAllowAgentLogoff($allowAgentLogoff)
    {
        $this->allowAgentLogoff = $allowAgentLogoff;
        return $this;
    }

    /**
     * Getter for allowCallWaitingForAgents
     *
     * @ElementName allowCallWaitingForAgents
     * @return bool|null
     */
    public function getAllowCallWaitingForAgents()
    {
        return $this->allowCallWaitingForAgents;
    }

    /**
     * Setter for allowCallWaitingForAgents
     *
     * @ElementName allowCallWaitingForAgents
     * @param bool|null $allowCallWaitingForAgents
     * @return $this
     */
    public function setAllowCallWaitingForAgents($allowCallWaitingForAgents)
    {
        $this->allowCallWaitingForAgents = $allowCallWaitingForAgents;
        return $this;
    }

    /**
     * Getter for allowCallsToAgentsInWrapUp
     *
     * @ElementName allowCallsToAgentsInWrapUp
     * @return bool|null
     */
    public function getAllowCallsToAgentsInWrapUp()
    {
        return $this->allowCallsToAgentsInWrapUp;
    }

    /**
     * Setter for allowCallsToAgentsInWrapUp
     *
     * @ElementName allowCallsToAgentsInWrapUp
     * @param bool|null $allowCallsToAgentsInWrapUp
     * @return $this
     */
    public function setAllowCallsToAgentsInWrapUp($allowCallsToAgentsInWrapUp)
    {
        $this->allowCallsToAgentsInWrapUp = $allowCallsToAgentsInWrapUp;
        return $this;
    }

    /**
     * Getter for overrideAgentWrapUpTime
     *
     * @ElementName overrideAgentWrapUpTime
     * @return bool|null
     */
    public function getOverrideAgentWrapUpTime()
    {
        return $this->overrideAgentWrapUpTime;
    }

    /**
     * Setter for overrideAgentWrapUpTime
     *
     * @ElementName overrideAgentWrapUpTime
     * @param bool|null $overrideAgentWrapUpTime
     * @return $this
     */
    public function setOverrideAgentWrapUpTime($overrideAgentWrapUpTime)
    {
        $this->overrideAgentWrapUpTime = $overrideAgentWrapUpTime;
        return $this;
    }

    /**
     * Getter for wrapUpSeconds
     *
     * @ElementName wrapUpSeconds
     * @return int|null
     */
    public function getWrapUpSeconds()
    {
        return $this->wrapUpSeconds;
    }

    /**
     * Setter for wrapUpSeconds
     *
     * @ElementName wrapUpSeconds
     * @param int|null $wrapUpSeconds
     * @return $this
     */
    public function setWrapUpSeconds($wrapUpSeconds)
    {
        $this->wrapUpSeconds = $wrapUpSeconds;
        return $this;
    }

    /**
     * Getter for forceDeliveryOfCalls
     *
     * @ElementName forceDeliveryOfCalls
     * @return bool|null
     */
    public function getForceDeliveryOfCalls()
    {
        return $this->forceDeliveryOfCalls;
    }

    /**
     * Setter for forceDeliveryOfCalls
     *
     * @ElementName forceDeliveryOfCalls
     * @param bool|null $forceDeliveryOfCalls
     * @return $this
     */
    public function setForceDeliveryOfCalls($forceDeliveryOfCalls)
    {
        $this->forceDeliveryOfCalls = $forceDeliveryOfCalls;
        return $this;
    }

    /**
     * Getter for forceDeliveryWaitTimeSeconds
     *
     * @ElementName forceDeliveryWaitTimeSeconds
     * @return int|null
     */
    public function getForceDeliveryWaitTimeSeconds()
    {
        return $this->forceDeliveryWaitTimeSeconds;
    }

    /**
     * Setter for forceDeliveryWaitTimeSeconds
     *
     * @ElementName forceDeliveryWaitTimeSeconds
     * @param int|null $forceDeliveryWaitTimeSeconds
     * @return $this
     */
    public function setForceDeliveryWaitTimeSeconds($forceDeliveryWaitTimeSeconds)
    {
        $this->forceDeliveryWaitTimeSeconds = $forceDeliveryWaitTimeSeconds;
        return $this;
    }

    /**
     * Getter for enableAutomaticStateChangeForAgents
     *
     * @ElementName enableAutomaticStateChangeForAgents
     * @return bool|null
     */
    public function getEnableAutomaticStateChangeForAgents()
    {
        return $this->enableAutomaticStateChangeForAgents;
    }

    /**
     * Setter for enableAutomaticStateChangeForAgents
     *
     * @ElementName enableAutomaticStateChangeForAgents
     * @param bool|null $enableAutomaticStateChangeForAgents
     * @return $this
     */
    public function setEnableAutomaticStateChangeForAgents($enableAutomaticStateChangeForAgents)
    {
        $this->enableAutomaticStateChangeForAgents = $enableAutomaticStateChangeForAgents;
        return $this;
    }

    /**
     * Getter for agentStateAfterCall
     *
     * @ElementName agentStateAfterCall
     * @return string|null
     */
    public function getAgentStateAfterCall()
    {
        return $this->agentStateAfterCall;
    }

    /**
     * Setter for agentStateAfterCall
     *
     * @ElementName agentStateAfterCall
     * @param string|null $agentStateAfterCall
     * @return $this
     */
    public function setAgentStateAfterCall($agentStateAfterCall)
    {
        $this->agentStateAfterCall = $agentStateAfterCall;
        return $this;
    }

    /**
     * Getter for agentUnavailableCode
     *
     * @ElementName agentUnavailableCode
     * @return string|null
     */
    public function getAgentUnavailableCode()
    {
        return $this->agentUnavailableCode;
    }

    /**
     * Setter for agentUnavailableCode
     *
     * @ElementName agentUnavailableCode
     * @param string|null $agentUnavailableCode
     * @return $this
     */
    public function setAgentUnavailableCode($agentUnavailableCode)
    {
        $this->agentUnavailableCode = $agentUnavailableCode;
        return $this;
    }

    /**
     * Getter for externalPreferredAudioCodec
     *
     * @ElementName externalPreferredAudioCodec
     * @return string|null
     */
    public function getExternalPreferredAudioCodec()
    {
        return $this->externalPreferredAudioCodec;
    }

    /**
     * Setter for externalPreferredAudioCodec
     *
     * @ElementName externalPreferredAudioCodec
     * @param string|null $externalPreferredAudioCodec
     * @return $this
     */
    public function setExternalPreferredAudioCodec($externalPreferredAudioCodec)
    {
        $this->externalPreferredAudioCodec = $externalPreferredAudioCodec;
        return $this;
    }

    /**
     * Getter for internalPreferredAudioCodec
     *
     * @ElementName internalPreferredAudioCodec
     * @return string|null
     */
    public function getInternalPreferredAudioCodec()
    {
        return $this->internalPreferredAudioCodec;
    }

    /**
     * Setter for internalPreferredAudioCodec
     *
     * @ElementName internalPreferredAudioCodec
     * @param string|null $internalPreferredAudioCodec
     * @return $this
     */
    public function setInternalPreferredAudioCodec($internalPreferredAudioCodec)
    {
        $this->internalPreferredAudioCodec = $internalPreferredAudioCodec;
        return $this;
    }

    /**
     * Getter for playRingingWhenOfferingCall
     *
     * @ElementName playRingingWhenOfferingCall
     * @return bool|null
     */
    public function getPlayRingingWhenOfferingCall()
    {
        return $this->playRingingWhenOfferingCall;
    }

    /**
     * Setter for playRingingWhenOfferingCall
     *
     * @ElementName playRingingWhenOfferingCall
     * @param bool|null $playRingingWhenOfferingCall
     * @return $this
     */
    public function setPlayRingingWhenOfferingCall($playRingingWhenOfferingCall)
    {
        $this->playRingingWhenOfferingCall = $playRingingWhenOfferingCall;
        return $this;
    }

    /**
     * Getter for networkClassOfService
     *
     * @ElementName networkClassOfService
     * @return string|null
     */
    public function getNetworkClassOfService()
    {
        return $this->networkClassOfService;
    }

    /**
     * Setter for networkClassOfService
     *
     * @ElementName networkClassOfService
     * @param string|null $networkClassOfService
     * @return $this
     */
    public function setNetworkClassOfService($networkClassOfService)
    {
        $this->networkClassOfService = $networkClassOfService;
        return $this;
    }


}

