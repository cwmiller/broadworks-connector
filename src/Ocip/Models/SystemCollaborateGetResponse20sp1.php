<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCollaborateGetResponse20sp1
 *
 * Response to SystemCollaborateGetRequest20sp1.
 *         
 *         Replaced by: SystemCollaborateGetResponse20sp1V2
 *
 * @see SystemCollaborateGetRequest20sp1
 * @see SystemCollaborateGetResponse20sp1
 */
class SystemCollaborateGetResponse20sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName collaborateRoomIdLength
     * @var int|null
     */
    private $collaborateRoomIdLength = null;

    /**
     * @ElementName instantRoomIdleTimeoutSeconds
     * @var int|null
     */
    private $instantRoomIdleTimeoutSeconds = null;

    /**
     * @ElementName collaborateRoomMaximumDurationMinutes
     * @var int|null
     */
    private $collaborateRoomMaximumDurationMinutes = null;

    /**
     * @ElementName supportOutdial
     * @var bool|null
     */
    private $supportOutdial = null;

    /**
     * @ElementName maxCollaborateRoomParticipants
     * @var int|null
     */
    private $maxCollaborateRoomParticipants = null;

    /**
     * @ElementName collaborateActiveTalkerRefreshIntervalSeconds
     * @var int|null
     */
    private $collaborateActiveTalkerRefreshIntervalSeconds = null;

    /**
     * @ElementName terminateCollaborateAfterGracePeriod
     * @var bool|null
     */
    private $terminateCollaborateAfterGracePeriod = null;

    /**
     * @ElementName collaborateGracePeriod
     * @var \CWM\BroadWorksConnector\Ocip\Models\CollaborateGracePeriodDuration|null
     */
    private $collaborateGracePeriod = null;

    /**
     * @ElementName enableActiveCollaborateNotification
     * @var bool|null
     */
    private $enableActiveCollaborateNotification = null;

    /**
     * @ElementName collaborateFromAddress
     * @var string|null
     */
    private $collaborateFromAddress = null;

    /**
     * Getter for collaborateRoomIdLength
     *
     * @ElementName collaborateRoomIdLength
     * @return int|null
     */
    public function getCollaborateRoomIdLength()
    {
        return $this->collaborateRoomIdLength;
    }

    /**
     * Setter for collaborateRoomIdLength
     *
     * @ElementName collaborateRoomIdLength
     * @param int|null $collaborateRoomIdLength
     * @return $this
     */
    public function setCollaborateRoomIdLength($collaborateRoomIdLength)
    {
        $this->collaborateRoomIdLength = $collaborateRoomIdLength;
        return $this;
    }

    /**
     * Getter for instantRoomIdleTimeoutSeconds
     *
     * @ElementName instantRoomIdleTimeoutSeconds
     * @return int|null
     */
    public function getInstantRoomIdleTimeoutSeconds()
    {
        return $this->instantRoomIdleTimeoutSeconds;
    }

    /**
     * Setter for instantRoomIdleTimeoutSeconds
     *
     * @ElementName instantRoomIdleTimeoutSeconds
     * @param int|null $instantRoomIdleTimeoutSeconds
     * @return $this
     */
    public function setInstantRoomIdleTimeoutSeconds($instantRoomIdleTimeoutSeconds)
    {
        $this->instantRoomIdleTimeoutSeconds = $instantRoomIdleTimeoutSeconds;
        return $this;
    }

    /**
     * Getter for collaborateRoomMaximumDurationMinutes
     *
     * @ElementName collaborateRoomMaximumDurationMinutes
     * @return int|null
     */
    public function getCollaborateRoomMaximumDurationMinutes()
    {
        return $this->collaborateRoomMaximumDurationMinutes;
    }

    /**
     * Setter for collaborateRoomMaximumDurationMinutes
     *
     * @ElementName collaborateRoomMaximumDurationMinutes
     * @param int|null $collaborateRoomMaximumDurationMinutes
     * @return $this
     */
    public function setCollaborateRoomMaximumDurationMinutes($collaborateRoomMaximumDurationMinutes)
    {
        $this->collaborateRoomMaximumDurationMinutes = $collaborateRoomMaximumDurationMinutes;
        return $this;
    }

    /**
     * Getter for supportOutdial
     *
     * @ElementName supportOutdial
     * @return bool|null
     */
    public function getSupportOutdial()
    {
        return $this->supportOutdial;
    }

    /**
     * Setter for supportOutdial
     *
     * @ElementName supportOutdial
     * @param bool|null $supportOutdial
     * @return $this
     */
    public function setSupportOutdial($supportOutdial)
    {
        $this->supportOutdial = $supportOutdial;
        return $this;
    }

    /**
     * Getter for maxCollaborateRoomParticipants
     *
     * @ElementName maxCollaborateRoomParticipants
     * @return int|null
     */
    public function getMaxCollaborateRoomParticipants()
    {
        return $this->maxCollaborateRoomParticipants;
    }

    /**
     * Setter for maxCollaborateRoomParticipants
     *
     * @ElementName maxCollaborateRoomParticipants
     * @param int|null $maxCollaborateRoomParticipants
     * @return $this
     */
    public function setMaxCollaborateRoomParticipants($maxCollaborateRoomParticipants)
    {
        $this->maxCollaborateRoomParticipants = $maxCollaborateRoomParticipants;
        return $this;
    }

    /**
     * Getter for collaborateActiveTalkerRefreshIntervalSeconds
     *
     * @ElementName collaborateActiveTalkerRefreshIntervalSeconds
     * @return int|null
     */
    public function getCollaborateActiveTalkerRefreshIntervalSeconds()
    {
        return $this->collaborateActiveTalkerRefreshIntervalSeconds;
    }

    /**
     * Setter for collaborateActiveTalkerRefreshIntervalSeconds
     *
     * @ElementName collaborateActiveTalkerRefreshIntervalSeconds
     * @param int|null $collaborateActiveTalkerRefreshIntervalSeconds
     * @return $this
     */
    public function setCollaborateActiveTalkerRefreshIntervalSeconds($collaborateActiveTalkerRefreshIntervalSeconds)
    {
        $this->collaborateActiveTalkerRefreshIntervalSeconds = $collaborateActiveTalkerRefreshIntervalSeconds;
        return $this;
    }

    /**
     * Getter for terminateCollaborateAfterGracePeriod
     *
     * @ElementName terminateCollaborateAfterGracePeriod
     * @return bool|null
     */
    public function getTerminateCollaborateAfterGracePeriod()
    {
        return $this->terminateCollaborateAfterGracePeriod;
    }

    /**
     * Setter for terminateCollaborateAfterGracePeriod
     *
     * @ElementName terminateCollaborateAfterGracePeriod
     * @param bool|null $terminateCollaborateAfterGracePeriod
     * @return $this
     */
    public function setTerminateCollaborateAfterGracePeriod($terminateCollaborateAfterGracePeriod)
    {
        $this->terminateCollaborateAfterGracePeriod = $terminateCollaborateAfterGracePeriod;
        return $this;
    }

    /**
     * Getter for collaborateGracePeriod
     *
     * @ElementName collaborateGracePeriod
     * @return \CWM\BroadWorksConnector\Ocip\Models\CollaborateGracePeriodDuration|null
     */
    public function getCollaborateGracePeriod()
    {
        return $this->collaborateGracePeriod;
    }

    /**
     * Setter for collaborateGracePeriod
     *
     * @ElementName collaborateGracePeriod
     * @param \CWM\BroadWorksConnector\Ocip\Models\CollaborateGracePeriodDuration|null $collaborateGracePeriod
     * @return $this
     */
    public function setCollaborateGracePeriod($collaborateGracePeriod)
    {
        $this->collaborateGracePeriod = $collaborateGracePeriod;
        return $this;
    }

    /**
     * Getter for enableActiveCollaborateNotification
     *
     * @ElementName enableActiveCollaborateNotification
     * @return bool|null
     */
    public function getEnableActiveCollaborateNotification()
    {
        return $this->enableActiveCollaborateNotification;
    }

    /**
     * Setter for enableActiveCollaborateNotification
     *
     * @ElementName enableActiveCollaborateNotification
     * @param bool|null $enableActiveCollaborateNotification
     * @return $this
     */
    public function setEnableActiveCollaborateNotification($enableActiveCollaborateNotification)
    {
        $this->enableActiveCollaborateNotification = $enableActiveCollaborateNotification;
        return $this;
    }

    /**
     * Getter for collaborateFromAddress
     *
     * @ElementName collaborateFromAddress
     * @return string|null
     */
    public function getCollaborateFromAddress()
    {
        return $this->collaborateFromAddress;
    }

    /**
     * Setter for collaborateFromAddress
     *
     * @ElementName collaborateFromAddress
     * @param string|null $collaborateFromAddress
     * @return $this
     */
    public function setCollaborateFromAddress($collaborateFromAddress)
    {
        $this->collaborateFromAddress = $collaborateFromAddress;
        return $this;
    }


}

