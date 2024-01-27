<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterGetInstanceResponse14sp3
 *
 * Response to GroupCallCenterGetInstanceRequest14sp3.
 *         Contains the service profile information and a table of assigned users.
 *         The table has column headings: "User Id", "Last Name", "First Name",
 *         "Hiragana Last Name", "Hiragana First Name", "Weight".
 *         Replaced By: GroupCallCenterGetInstanceResponse14sp9
 *
 * @see GroupCallCenterGetInstanceRequest14sp3
 * @see GroupCallCenterGetInstanceResponse14sp9
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:5922","type":"sequence"}]
 */
class GroupCallCenterGetInstanceResponse14sp3 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName serviceInstanceProfile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile
     * @Group d8f04177e438f303b41c211e518706bf:5922
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile|null
     */
    protected $serviceInstanceProfile = null;

    /**
     * @ElementName policy
     * @Type \CWM\BroadWorksConnector\Ocip\Models\HuntPolicy
     * @Group d8f04177e438f303b41c211e518706bf:5922
     * @var \CWM\BroadWorksConnector\Ocip\Models\HuntPolicy|null
     */
    protected $policy = null;

    /**
     * @ElementName huntAfterNoAnswer
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:5922
     * @var bool|null
     */
    protected $huntAfterNoAnswer = null;

    /**
     * @ElementName noAnswerNumberOfRings
     * @Type int
     * @Group d8f04177e438f303b41c211e518706bf:5922
     * @MinInclusive 1
     * @MaxInclusive 20
     * @var int|null
     */
    protected $noAnswerNumberOfRings = null;

    /**
     * @ElementName forwardAfterTimeout
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:5922
     * @var bool|null
     */
    protected $forwardAfterTimeout = null;

    /**
     * @ElementName forwardTimeoutSeconds
     * @Type int
     * @Group d8f04177e438f303b41c211e518706bf:5922
     * @MinInclusive 0
     * @MaxInclusive 7200
     * @var int|null
     */
    protected $forwardTimeoutSeconds = null;

    /**
     * @ElementName forwardToPhoneNumber
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:5922
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $forwardToPhoneNumber = null;

    /**
     * @ElementName enableVideo
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:5922
     * @var bool|null
     */
    protected $enableVideo = null;

    /**
     * @ElementName queueLength
     * @Type int
     * @Group d8f04177e438f303b41c211e518706bf:5922
     * @MinInclusive 0
     * @MaxInclusive 50
     * @var int|null
     */
    protected $queueLength = null;

    /**
     * @ElementName allowAgentLogoff
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:5922
     * @var bool|null
     */
    protected $allowAgentLogoff = null;

    /**
     * @ElementName playMusicOnHold
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:5922
     * @var bool|null
     */
    protected $playMusicOnHold = null;

    /**
     * @ElementName playComfortMessage
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:5922
     * @var bool|null
     */
    protected $playComfortMessage = null;

    /**
     * @ElementName timeBetweenComfortMessagesSeconds
     * @Type int
     * @Group d8f04177e438f303b41c211e518706bf:5922
     * @MinInclusive 10
     * @MaxInclusive 600
     * @var int|null
     */
    protected $timeBetweenComfortMessagesSeconds = null;

    /**
     * @ElementName enableGuardTimer
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:5922
     * @var bool|null
     */
    protected $enableGuardTimer = null;

    /**
     * @ElementName guardTimerSeconds
     * @Type int
     * @Group d8f04177e438f303b41c211e518706bf:5922
     * @MinInclusive 1
     * @MaxInclusive 25
     * @var int|null
     */
    protected $guardTimerSeconds = null;

    /**
     * @ElementName agentUserTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group d8f04177e438f303b41c211e518706bf:5922
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $agentUserTable = null;

    /**
     * @ElementName allowCallWaitingForAgents
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:5922
     * @var bool|null
     */
    protected $allowCallWaitingForAgents = null;

    /**
     * @ElementName allowCallsToAgentsInWrapUp
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:5922
     * @var bool|null
     */
    protected $allowCallsToAgentsInWrapUp = null;

    /**
     * @ElementName enableCallQueueWhenNoAgentsAvailable
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:5922
     * @var bool|null
     */
    protected $enableCallQueueWhenNoAgentsAvailable = null;

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
     * @return string
     */
    public function getForwardToPhoneNumber()
    {
        return $this->forwardToPhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->forwardToPhoneNumber;
    }

    /**
     * Setter for forwardToPhoneNumber
     *
     * @param string $forwardToPhoneNumber
     * @return $this
     */
    public function setForwardToPhoneNumber($forwardToPhoneNumber)
    {
        $this->forwardToPhoneNumber = $forwardToPhoneNumber;
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
     * Getter for agentUserTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getAgentUserTable()
    {
        return $this->agentUserTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->agentUserTable;
    }

    /**
     * Setter for agentUserTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $agentUserTable
     * @return $this
     */
    public function setAgentUserTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $agentUserTable)
    {
        $this->agentUserTable = $agentUserTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAgentUserTable()
    {
        $this->agentUserTable = null;
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
}

