<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterGetInstanceResponse16
 *
 * Response to GroupCallCenterGetInstanceRequest16.
 *
 * @see GroupCallCenterGetInstanceRequest16
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:12523","type":"sequence"}]
 */
class GroupCallCenterGetInstanceResponse16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName serviceInstanceProfile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile
     * @Group ab0042aa512abc10edb3c55e4b416b0b:12523
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile|null
     */
    private $serviceInstanceProfile = null;

    /**
     * @ElementName type
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterType
     * @Group ab0042aa512abc10edb3c55e4b416b0b:12523
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterType|null
     */
    private $type = null;

    /**
     * @ElementName policy
     * @Type \CWM\BroadWorksConnector\Ocip\Models\HuntPolicy
     * @Group ab0042aa512abc10edb3c55e4b416b0b:12523
     * @var \CWM\BroadWorksConnector\Ocip\Models\HuntPolicy|null
     */
    private $policy = null;

    /**
     * @ElementName enableVideo
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:12523
     * @var bool|null
     */
    private $enableVideo = null;

    /**
     * @ElementName queueLength
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:12523
     * @var int|null
     */
    private $queueLength = null;

    /**
     * @ElementName reportingServerName
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:12523
     * @var string|null
     */
    private $reportingServerName = null;

    /**
     * @ElementName allowCallerToDialEscapeDigit
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:12523
     * @var bool|null
     */
    private $allowCallerToDialEscapeDigit = null;

    /**
     * @ElementName escapeDigit
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:12523
     * @var string|null
     */
    private $escapeDigit = null;

    /**
     * @ElementName resetCallStatisticsUponEntryInQueue
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:12523
     * @var bool|null
     */
    private $resetCallStatisticsUponEntryInQueue = null;

    /**
     * @ElementName allowAgentLogoff
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:12523
     * @var bool|null
     */
    private $allowAgentLogoff = null;

    /**
     * @ElementName allowCallWaitingForAgents
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:12523
     * @var bool|null
     */
    private $allowCallWaitingForAgents = null;

    /**
     * @ElementName allowCallsToAgentsInWrapUp
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:12523
     * @var bool|null
     */
    private $allowCallsToAgentsInWrapUp = null;

    /**
     * @ElementName overrideAgentWrapUpTime
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:12523
     * @var bool|null
     */
    private $overrideAgentWrapUpTime = null;

    /**
     * @ElementName wrapUpSeconds
     * @Type int
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:12523
     * @var int|null
     */
    private $wrapUpSeconds = null;

    /**
     * @ElementName forceDeliveryOfCalls
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:12523
     * @var bool|null
     */
    private $forceDeliveryOfCalls = null;

    /**
     * @ElementName forceDeliveryWaitTimeSeconds
     * @Type int
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:12523
     * @var int|null
     */
    private $forceDeliveryWaitTimeSeconds = null;

    /**
     * @ElementName externalPreferredAudioCodec
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AudioFileCodec
     * @Group ab0042aa512abc10edb3c55e4b416b0b:12523
     * @var \CWM\BroadWorksConnector\Ocip\Models\AudioFileCodec|null
     */
    private $externalPreferredAudioCodec = null;

    /**
     * @ElementName internalPreferredAudioCodec
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AudioFileCodec
     * @Group ab0042aa512abc10edb3c55e4b416b0b:12523
     * @var \CWM\BroadWorksConnector\Ocip\Models\AudioFileCodec|null
     */
    private $internalPreferredAudioCodec = null;

    /**
     * @ElementName playRingingWhenOfferingCall
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:12523
     * @var bool|null
     */
    private $playRingingWhenOfferingCall = null;

    /**
     * Getter for serviceInstanceProfile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile
     */
    public function getServiceInstanceProfile()
    {
        return $this->serviceInstanceProfile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceInstanceProfile;
    }

    /**
     * Setter for serviceInstanceProfile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile $serviceInstanceProfile
     * @return $this
     */
    public function setServiceInstanceProfile(\CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile $serviceInstanceProfile)
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

