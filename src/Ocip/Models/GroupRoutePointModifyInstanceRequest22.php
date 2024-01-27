<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupRoutePointModifyInstanceRequest22
 *
 * Request to modify a Route Point instance.
 *         The response is either SuccessResponse or ErrorResponse.
 *         The Following elements are only used in AS data mode and ignored in XS data mode:
 * 	    - sendCallAdmissionNotification, use value ‘false’ in XS data mode.
 * 	    - callAdmissionTimerSeconds, use value ‘3’ in XS data mode.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"e474d11df9a1d1d1041e589793e40de8:855","type":"sequence"}]
 */
class GroupRoutePointModifyInstanceRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group e474d11df9a1d1d1041e589793e40de8:855
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $serviceUserId = null;

    /**
     * @ElementName serviceInstanceProfile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceModifyProfile
     * @Optional
     * @Group e474d11df9a1d1d1041e589793e40de8:855
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceModifyProfile|null
     */
    protected $serviceInstanceProfile = null;

    /**
     * @ElementName networkClassOfService
     * @Type string
     * @Optional
     * @Group e474d11df9a1d1d1041e589793e40de8:855
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $networkClassOfService = null;

    /**
     * @ElementName externalPreferredAudioCodec
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AudioFileCodec22
     * @Optional
     * @Group e474d11df9a1d1d1041e589793e40de8:855
     * @var \CWM\BroadWorksConnector\Ocip\Models\AudioFileCodec22|null
     */
    protected $externalPreferredAudioCodec = null;

    /**
     * @ElementName internalPreferredAudioCodec
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AudioFileCodec22
     * @Optional
     * @Group e474d11df9a1d1d1041e589793e40de8:855
     * @var \CWM\BroadWorksConnector\Ocip\Models\AudioFileCodec22|null
     */
    protected $internalPreferredAudioCodec = null;

    /**
     * @ElementName queueLength
     * @Type int
     * @Optional
     * @Group e474d11df9a1d1d1041e589793e40de8:855
     * @MinInclusive 0
     * @MaxInclusive 525
     * @var int|null
     */
    protected $queueLength = null;

    /**
     * @ElementName noAnswerTimeoutRings
     * @Type int
     * @Optional
     * @Group e474d11df9a1d1d1041e589793e40de8:855
     * @MinInclusive 2
     * @MaxInclusive 20
     * @var int|null
     */
    protected $noAnswerTimeoutRings = null;

    /**
     * @ElementName enableVideo
     * @Type bool
     * @Optional
     * @Group e474d11df9a1d1d1041e589793e40de8:855
     * @var bool|null
     */
    protected $enableVideo = null;

    /**
     * @ElementName playRingingWhenOfferingCall
     * @Type bool
     * @Optional
     * @Group e474d11df9a1d1d1041e589793e40de8:855
     * @var bool|null
     */
    protected $playRingingWhenOfferingCall = null;

    /**
     * @ElementName overrideAgentWrapUpTime
     * @Type bool
     * @Optional
     * @Group e474d11df9a1d1d1041e589793e40de8:855
     * @var bool|null
     */
    protected $overrideAgentWrapUpTime = null;

    /**
     * @ElementName wrapUpSeconds
     * @Type int
     * @Nillable
     * @Optional
     * @Group e474d11df9a1d1d1041e589793e40de8:855
     * @MinInclusive 1
     * @MaxInclusive 3600
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $wrapUpSeconds = null;

    /**
     * @ElementName enableAutomaticStateChangeForAgents
     * @Type bool
     * @Optional
     * @Group e474d11df9a1d1d1041e589793e40de8:855
     * @var bool|null
     */
    protected $enableAutomaticStateChangeForAgents = null;

    /**
     * @ElementName agentStateAfterCall
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AgentACDAutomaticState
     * @Optional
     * @Group e474d11df9a1d1d1041e589793e40de8:855
     * @var \CWM\BroadWorksConnector\Ocip\Models\AgentACDAutomaticState|null
     */
    protected $agentStateAfterCall = null;

    /**
     * @ElementName agentUnavailableCode
     * @Type string
     * @Nillable
     * @Optional
     * @Group e474d11df9a1d1d1041e589793e40de8:855
     * @MinLength 1
     * @MaxLength 10
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $agentUnavailableCode = null;

    /**
     * @ElementName forceDeliveryOfCalls
     * @Type bool
     * @Optional
     * @Group e474d11df9a1d1d1041e589793e40de8:855
     * @var bool|null
     */
    protected $forceDeliveryOfCalls = null;

    /**
     * @ElementName forceDeliveryWaitTimeSeconds
     * @Type int
     * @Nillable
     * @Optional
     * @Group e474d11df9a1d1d1041e589793e40de8:855
     * @MinInclusive 1
     * @MaxInclusive 10
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $forceDeliveryWaitTimeSeconds = null;

    /**
     * @ElementName sendCallAdmissionNotification
     * @Type bool
     * @Optional
     * @Group e474d11df9a1d1d1041e589793e40de8:855
     * @var bool|null
     */
    protected $sendCallAdmissionNotification = null;

    /**
     * @ElementName callAdmissionTimerSeconds
     * @Type int
     * @Optional
     * @Group e474d11df9a1d1d1041e589793e40de8:855
     * @MinInclusive 1
     * @MaxInclusive 60
     * @var int|null
     */
    protected $callAdmissionTimerSeconds = null;

    /**
     * @ElementName enableUnlimitedQueueLength
     * @Type bool
     * @Optional
     * @Group e474d11df9a1d1d1041e589793e40de8:855
     * @var bool|null
     */
    protected $enableUnlimitedQueueLength = null;

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
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceModifyProfile
     */
    public function getServiceInstanceProfile()
    {
        return $this->serviceInstanceProfile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceInstanceProfile;
    }

    /**
     * Setter for serviceInstanceProfile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceModifyProfile $serviceInstanceProfile
     * @return $this
     */
    public function setServiceInstanceProfile(\CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceModifyProfile $serviceInstanceProfile)
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
     * Getter for networkClassOfService
     *
     * @return string
     */
    public function getNetworkClassOfService()
    {
        return $this->networkClassOfService instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->networkClassOfService;
    }

    /**
     * Setter for networkClassOfService
     *
     * @param string $networkClassOfService
     * @return $this
     */
    public function setNetworkClassOfService($networkClassOfService)
    {
        $this->networkClassOfService = $networkClassOfService;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNetworkClassOfService()
    {
        $this->networkClassOfService = null;
        return $this;
    }

    /**
     * Getter for externalPreferredAudioCodec
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AudioFileCodec22
     */
    public function getExternalPreferredAudioCodec()
    {
        return $this->externalPreferredAudioCodec instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->externalPreferredAudioCodec;
    }

    /**
     * Setter for externalPreferredAudioCodec
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AudioFileCodec22 $externalPreferredAudioCodec
     * @return $this
     */
    public function setExternalPreferredAudioCodec(\CWM\BroadWorksConnector\Ocip\Models\AudioFileCodec22 $externalPreferredAudioCodec)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\AudioFileCodec22
     */
    public function getInternalPreferredAudioCodec()
    {
        return $this->internalPreferredAudioCodec instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->internalPreferredAudioCodec;
    }

    /**
     * Setter for internalPreferredAudioCodec
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AudioFileCodec22 $internalPreferredAudioCodec
     * @return $this
     */
    public function setInternalPreferredAudioCodec(\CWM\BroadWorksConnector\Ocip\Models\AudioFileCodec22 $internalPreferredAudioCodec)
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
     * Getter for noAnswerTimeoutRings
     *
     * @return int
     */
    public function getNoAnswerTimeoutRings()
    {
        return $this->noAnswerTimeoutRings instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->noAnswerTimeoutRings;
    }

    /**
     * Setter for noAnswerTimeoutRings
     *
     * @param int $noAnswerTimeoutRings
     * @return $this
     */
    public function setNoAnswerTimeoutRings($noAnswerTimeoutRings)
    {
        $this->noAnswerTimeoutRings = $noAnswerTimeoutRings;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNoAnswerTimeoutRings()
    {
        $this->noAnswerTimeoutRings = null;
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
     * @return int|null
     */
    public function getWrapUpSeconds()
    {
        return $this->wrapUpSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->wrapUpSeconds;
    }

    /**
     * Setter for wrapUpSeconds
     *
     * @param int|null $wrapUpSeconds
     * @return $this
     */
    public function setWrapUpSeconds($wrapUpSeconds = null)
    {
        if ($wrapUpSeconds === null) {
            $this->wrapUpSeconds = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->wrapUpSeconds = $wrapUpSeconds;
        }
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
     * @return string|null
     */
    public function getAgentUnavailableCode()
    {
        return $this->agentUnavailableCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->agentUnavailableCode;
    }

    /**
     * Setter for agentUnavailableCode
     *
     * @param string|null $agentUnavailableCode
     * @return $this
     */
    public function setAgentUnavailableCode($agentUnavailableCode = null)
    {
        if ($agentUnavailableCode === null) {
            $this->agentUnavailableCode = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->agentUnavailableCode = $agentUnavailableCode;
        }
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
     * @return int|null
     */
    public function getForceDeliveryWaitTimeSeconds()
    {
        return $this->forceDeliveryWaitTimeSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->forceDeliveryWaitTimeSeconds;
    }

    /**
     * Setter for forceDeliveryWaitTimeSeconds
     *
     * @param int|null $forceDeliveryWaitTimeSeconds
     * @return $this
     */
    public function setForceDeliveryWaitTimeSeconds($forceDeliveryWaitTimeSeconds = null)
    {
        if ($forceDeliveryWaitTimeSeconds === null) {
            $this->forceDeliveryWaitTimeSeconds = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->forceDeliveryWaitTimeSeconds = $forceDeliveryWaitTimeSeconds;
        }
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
     * Getter for sendCallAdmissionNotification
     *
     * @return bool
     */
    public function getSendCallAdmissionNotification()
    {
        return $this->sendCallAdmissionNotification instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sendCallAdmissionNotification;
    }

    /**
     * Setter for sendCallAdmissionNotification
     *
     * @param bool $sendCallAdmissionNotification
     * @return $this
     */
    public function setSendCallAdmissionNotification($sendCallAdmissionNotification)
    {
        $this->sendCallAdmissionNotification = $sendCallAdmissionNotification;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSendCallAdmissionNotification()
    {
        $this->sendCallAdmissionNotification = null;
        return $this;
    }

    /**
     * Getter for callAdmissionTimerSeconds
     *
     * @return int
     */
    public function getCallAdmissionTimerSeconds()
    {
        return $this->callAdmissionTimerSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callAdmissionTimerSeconds;
    }

    /**
     * Setter for callAdmissionTimerSeconds
     *
     * @param int $callAdmissionTimerSeconds
     * @return $this
     */
    public function setCallAdmissionTimerSeconds($callAdmissionTimerSeconds)
    {
        $this->callAdmissionTimerSeconds = $callAdmissionTimerSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallAdmissionTimerSeconds()
    {
        $this->callAdmissionTimerSeconds = null;
        return $this;
    }

    /**
     * Getter for enableUnlimitedQueueLength
     *
     * @return bool
     */
    public function getEnableUnlimitedQueueLength()
    {
        return $this->enableUnlimitedQueueLength instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableUnlimitedQueueLength;
    }

    /**
     * Setter for enableUnlimitedQueueLength
     *
     * @param bool $enableUnlimitedQueueLength
     * @return $this
     */
    public function setEnableUnlimitedQueueLength($enableUnlimitedQueueLength)
    {
        $this->enableUnlimitedQueueLength = $enableUnlimitedQueueLength;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableUnlimitedQueueLength()
    {
        $this->enableUnlimitedQueueLength = null;
        return $this;
    }
}

