<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterModifyInstanceRequest
 *
 * Request to modify a Call Center instance.
 *         The response is either SuccessResponse or ErrorResponse.
 *         
 *         Replaced By: GroupCallCenterModifyInstanceRequest16
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see GroupCallCenterModifyInstanceRequest16
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:8304","type":"sequence"}]
 */
class GroupCallCenterModifyInstanceRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:8304
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName serviceInstanceProfile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceModifyProfile
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:8304
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceModifyProfile|null
     */
    private $serviceInstanceProfile = null;

    /**
     * @ElementName policy
     * @Type \CWM\BroadWorksConnector\Ocip\Models\HuntPolicy
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:8304
     * @var \CWM\BroadWorksConnector\Ocip\Models\HuntPolicy|null
     */
    private $policy = null;

    /**
     * @ElementName huntAfterNoAnswer
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:8304
     * @var bool|null
     */
    private $huntAfterNoAnswer = null;

    /**
     * @ElementName noAnswerNumberOfRings
     * @Type int
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:8304
     * @var int|null
     */
    private $noAnswerNumberOfRings = null;

    /**
     * @ElementName forwardAfterTimeout
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:8304
     * @var bool|null
     */
    private $forwardAfterTimeout = null;

    /**
     * @ElementName forwardTimeoutSeconds
     * @Type int
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:8304
     * @var int|null
     */
    private $forwardTimeoutSeconds = null;

    /**
     * @ElementName forwardToPhoneNumber
     * @Type string
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:8304
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $forwardToPhoneNumber = null;

    /**
     * @ElementName enableVideo
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:8304
     * @var bool|null
     */
    private $enableVideo = null;

    /**
     * @ElementName queueLength
     * @Type int
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:8304
     * @var int|null
     */
    private $queueLength = null;

    /**
     * @ElementName allowAgentLogoff
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:8304
     * @var bool|null
     */
    private $allowAgentLogoff = null;

    /**
     * @ElementName playMusicOnHold
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:8304
     * @var bool|null
     */
    private $playMusicOnHold = null;

    /**
     * @ElementName playComfortMessage
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:8304
     * @var bool|null
     */
    private $playComfortMessage = null;

    /**
     * @ElementName timeBetweenComfortMessagesSeconds
     * @Type int
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:8304
     * @var int|null
     */
    private $timeBetweenComfortMessagesSeconds = null;

    /**
     * @ElementName enableGuardTimer
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:8304
     * @var bool|null
     */
    private $enableGuardTimer = null;

    /**
     * @ElementName guardTimerSeconds
     * @Type int
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:8304
     * @var int|null
     */
    private $guardTimerSeconds = null;

    /**
     * @ElementName agentUserIdList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:8304
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $agentUserIdList = null;

    /**
     * @ElementName allowCallWaitingForAgents
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:8304
     * @var bool|null
     */
    private $allowCallWaitingForAgents = null;

    /**
     * @ElementName allowCallsToAgentsInWrapUp
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:8304
     * @var bool|null
     */
    private $allowCallsToAgentsInWrapUp = null;

    /**
     * @ElementName enableCallQueueWhenNoAgentsAvailable
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:8304
     * @var bool|null
     */
    private $enableCallQueueWhenNoAgentsAvailable = null;

    /**
     * @ElementName statisticsSource
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterStatisticsSource
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:8304
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterStatisticsSource|null
     */
    private $statisticsSource = null;

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
     * Getter for huntAfterNoAnswer
     *
     * @return bool
     */
    public function getHuntAfterNoAnswer()
    {
        return $this->huntAfterNoAnswer instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->huntAfterNoAnswer;
    }

    /**
     * Setter for huntAfterNoAnswer
     *
     * @param bool $huntAfterNoAnswer
     * @return $this
     */
    public function setHuntAfterNoAnswer($huntAfterNoAnswer)
    {
        $this->huntAfterNoAnswer = $huntAfterNoAnswer;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHuntAfterNoAnswer()
    {
        $this->huntAfterNoAnswer = null;
        return $this;
    }

    /**
     * Getter for noAnswerNumberOfRings
     *
     * @return int
     */
    public function getNoAnswerNumberOfRings()
    {
        return $this->noAnswerNumberOfRings instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->noAnswerNumberOfRings;
    }

    /**
     * Setter for noAnswerNumberOfRings
     *
     * @param int $noAnswerNumberOfRings
     * @return $this
     */
    public function setNoAnswerNumberOfRings($noAnswerNumberOfRings)
    {
        $this->noAnswerNumberOfRings = $noAnswerNumberOfRings;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNoAnswerNumberOfRings()
    {
        $this->noAnswerNumberOfRings = null;
        return $this;
    }

    /**
     * Getter for forwardAfterTimeout
     *
     * @return bool
     */
    public function getForwardAfterTimeout()
    {
        return $this->forwardAfterTimeout instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->forwardAfterTimeout;
    }

    /**
     * Setter for forwardAfterTimeout
     *
     * @param bool $forwardAfterTimeout
     * @return $this
     */
    public function setForwardAfterTimeout($forwardAfterTimeout)
    {
        $this->forwardAfterTimeout = $forwardAfterTimeout;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetForwardAfterTimeout()
    {
        $this->forwardAfterTimeout = null;
        return $this;
    }

    /**
     * Getter for forwardTimeoutSeconds
     *
     * @return int
     */
    public function getForwardTimeoutSeconds()
    {
        return $this->forwardTimeoutSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->forwardTimeoutSeconds;
    }

    /**
     * Setter for forwardTimeoutSeconds
     *
     * @param int $forwardTimeoutSeconds
     * @return $this
     */
    public function setForwardTimeoutSeconds($forwardTimeoutSeconds)
    {
        $this->forwardTimeoutSeconds = $forwardTimeoutSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetForwardTimeoutSeconds()
    {
        $this->forwardTimeoutSeconds = null;
        return $this;
    }

    /**
     * Getter for forwardToPhoneNumber
     *
     * @return string|null
     */
    public function getForwardToPhoneNumber()
    {
        return $this->forwardToPhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->forwardToPhoneNumber;
    }

    /**
     * Setter for forwardToPhoneNumber
     *
     * @param string|null $forwardToPhoneNumber
     * @return $this
     */
    public function setForwardToPhoneNumber($forwardToPhoneNumber)
    {
        if ($forwardToPhoneNumber === null) {
            $this->forwardToPhoneNumber = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->forwardToPhoneNumber = $forwardToPhoneNumber;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetForwardToPhoneNumber()
    {
        $this->forwardToPhoneNumber = null;
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
     * Getter for playMusicOnHold
     *
     * @return bool
     */
    public function getPlayMusicOnHold()
    {
        return $this->playMusicOnHold instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->playMusicOnHold;
    }

    /**
     * Setter for playMusicOnHold
     *
     * @param bool $playMusicOnHold
     * @return $this
     */
    public function setPlayMusicOnHold($playMusicOnHold)
    {
        $this->playMusicOnHold = $playMusicOnHold;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPlayMusicOnHold()
    {
        $this->playMusicOnHold = null;
        return $this;
    }

    /**
     * Getter for playComfortMessage
     *
     * @return bool
     */
    public function getPlayComfortMessage()
    {
        return $this->playComfortMessage instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->playComfortMessage;
    }

    /**
     * Setter for playComfortMessage
     *
     * @param bool $playComfortMessage
     * @return $this
     */
    public function setPlayComfortMessage($playComfortMessage)
    {
        $this->playComfortMessage = $playComfortMessage;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPlayComfortMessage()
    {
        $this->playComfortMessage = null;
        return $this;
    }

    /**
     * Getter for timeBetweenComfortMessagesSeconds
     *
     * @return int
     */
    public function getTimeBetweenComfortMessagesSeconds()
    {
        return $this->timeBetweenComfortMessagesSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->timeBetweenComfortMessagesSeconds;
    }

    /**
     * Setter for timeBetweenComfortMessagesSeconds
     *
     * @param int $timeBetweenComfortMessagesSeconds
     * @return $this
     */
    public function setTimeBetweenComfortMessagesSeconds($timeBetweenComfortMessagesSeconds)
    {
        $this->timeBetweenComfortMessagesSeconds = $timeBetweenComfortMessagesSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTimeBetweenComfortMessagesSeconds()
    {
        $this->timeBetweenComfortMessagesSeconds = null;
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
     * Getter for agentUserIdList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null
     */
    public function getAgentUserIdList()
    {
        return $this->agentUserIdList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->agentUserIdList;
    }

    /**
     * Setter for agentUserIdList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null $agentUserIdList
     * @return $this
     */
    public function setAgentUserIdList(\CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList $agentUserIdList)
    {
        if ($agentUserIdList === null) {
            $this->agentUserIdList = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->agentUserIdList = $agentUserIdList;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAgentUserIdList()
    {
        $this->agentUserIdList = null;
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
     * Getter for enableCallQueueWhenNoAgentsAvailable
     *
     * @return bool
     */
    public function getEnableCallQueueWhenNoAgentsAvailable()
    {
        return $this->enableCallQueueWhenNoAgentsAvailable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableCallQueueWhenNoAgentsAvailable;
    }

    /**
     * Setter for enableCallQueueWhenNoAgentsAvailable
     *
     * @param bool $enableCallQueueWhenNoAgentsAvailable
     * @return $this
     */
    public function setEnableCallQueueWhenNoAgentsAvailable($enableCallQueueWhenNoAgentsAvailable)
    {
        $this->enableCallQueueWhenNoAgentsAvailable = $enableCallQueueWhenNoAgentsAvailable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableCallQueueWhenNoAgentsAvailable()
    {
        $this->enableCallQueueWhenNoAgentsAvailable = null;
        return $this;
    }

    /**
     * Getter for statisticsSource
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterStatisticsSource
     */
    public function getStatisticsSource()
    {
        return $this->statisticsSource instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->statisticsSource;
    }

    /**
     * Setter for statisticsSource
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterStatisticsSource $statisticsSource
     * @return $this
     */
    public function setStatisticsSource(\CWM\BroadWorksConnector\Ocip\Models\CallCenterStatisticsSource $statisticsSource)
    {
        $this->statisticsSource = $statisticsSource;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetStatisticsSource()
    {
        $this->statisticsSource = null;
        return $this;
    }


}

