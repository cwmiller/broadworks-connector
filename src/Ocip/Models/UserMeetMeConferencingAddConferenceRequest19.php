<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserMeetMeConferencingAddConferenceRequest19
 *
 * Add a Meet-Me conference.
 *         The response is either UserMeetMeConferencingAddConferenceResponse19 or
 * ErrorResponse.
 *         The startTime element is adjusted to the first occurrence of the
 * recurrent schedule that comes at or after the startTime.
 *         The startTime, endTime and recurrence information for a
 * conferenceSchedule element will be adjusted to the user Host time zone.
 */
class UserMeetMeConferencingAddConferenceRequest19 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName bridgeId
     * @var string|null
     */
    private $bridgeId = null;

    /**
     * @ElementName title
     * @var string|null
     */
    private $title = null;

    /**
     * @ElementName estimatedParticipants
     * @var int|null
     */
    private $estimatedParticipants = null;

    /**
     * @ElementName restrictParticipants
     * @var bool|null
     */
    private $restrictParticipants = null;

    /**
     * @ElementName maxParticipants
     * @var int|null
     */
    private $maxParticipants = null;

    /**
     * @ElementName accountCode
     * @var string|null
     */
    private $accountCode = null;

    /**
     * @ElementName muteAllAttendeesOnEntry
     * @var bool|null
     */
    private $muteAllAttendeesOnEntry = null;

    /**
     * @ElementName endConferenceOnModeratorExit
     * @var bool|null
     */
    private $endConferenceOnModeratorExit = null;

    /**
     * @ElementName moderatorRequired
     * @var bool|null
     */
    private $moderatorRequired = null;

    /**
     * @ElementName requireSecurityPin
     * @var bool|null
     */
    private $requireSecurityPin = null;

    /**
     * @ElementName allowUniqueIdentifier
     * @var bool|null
     */
    private $allowUniqueIdentifier = null;

    /**
     * @ElementName attendeeNotification
     * @var string|null
     */
    private $attendeeNotification = null;

    /**
     * @ElementName conferenceSchedule
     * @var \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceSchedule|null
     */
    private $conferenceSchedule = null;

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
     * Getter for bridgeId
     *
     * @ElementName bridgeId
     * @return string|null
     */
    public function getBridgeId()
    {
        return $this->bridgeId;
    }

    /**
     * Setter for bridgeId
     *
     * @ElementName bridgeId
     * @param string|null $bridgeId
     * @return $this
     */
    public function setBridgeId($bridgeId)
    {
        $this->bridgeId = $bridgeId;
        return $this;
    }

    /**
     * Getter for title
     *
     * @ElementName title
     * @return string|null
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Setter for title
     *
     * @ElementName title
     * @param string|null $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Getter for estimatedParticipants
     *
     * @ElementName estimatedParticipants
     * @return int|null
     */
    public function getEstimatedParticipants()
    {
        return $this->estimatedParticipants;
    }

    /**
     * Setter for estimatedParticipants
     *
     * @ElementName estimatedParticipants
     * @param int|null $estimatedParticipants
     * @return $this
     */
    public function setEstimatedParticipants($estimatedParticipants)
    {
        $this->estimatedParticipants = $estimatedParticipants;
        return $this;
    }

    /**
     * Getter for restrictParticipants
     *
     * @ElementName restrictParticipants
     * @return bool|null
     */
    public function getRestrictParticipants()
    {
        return $this->restrictParticipants;
    }

    /**
     * Setter for restrictParticipants
     *
     * @ElementName restrictParticipants
     * @param bool|null $restrictParticipants
     * @return $this
     */
    public function setRestrictParticipants($restrictParticipants)
    {
        $this->restrictParticipants = $restrictParticipants;
        return $this;
    }

    /**
     * Getter for maxParticipants
     *
     * @ElementName maxParticipants
     * @return int|null
     */
    public function getMaxParticipants()
    {
        return $this->maxParticipants;
    }

    /**
     * Setter for maxParticipants
     *
     * @ElementName maxParticipants
     * @param int|null $maxParticipants
     * @return $this
     */
    public function setMaxParticipants($maxParticipants)
    {
        $this->maxParticipants = $maxParticipants;
        return $this;
    }

    /**
     * Getter for accountCode
     *
     * @ElementName accountCode
     * @return string|null
     */
    public function getAccountCode()
    {
        return $this->accountCode;
    }

    /**
     * Setter for accountCode
     *
     * @ElementName accountCode
     * @param string|null $accountCode
     * @return $this
     */
    public function setAccountCode($accountCode)
    {
        $this->accountCode = $accountCode;
        return $this;
    }

    /**
     * Getter for muteAllAttendeesOnEntry
     *
     * @ElementName muteAllAttendeesOnEntry
     * @return bool|null
     */
    public function getMuteAllAttendeesOnEntry()
    {
        return $this->muteAllAttendeesOnEntry;
    }

    /**
     * Setter for muteAllAttendeesOnEntry
     *
     * @ElementName muteAllAttendeesOnEntry
     * @param bool|null $muteAllAttendeesOnEntry
     * @return $this
     */
    public function setMuteAllAttendeesOnEntry($muteAllAttendeesOnEntry)
    {
        $this->muteAllAttendeesOnEntry = $muteAllAttendeesOnEntry;
        return $this;
    }

    /**
     * Getter for endConferenceOnModeratorExit
     *
     * @ElementName endConferenceOnModeratorExit
     * @return bool|null
     */
    public function getEndConferenceOnModeratorExit()
    {
        return $this->endConferenceOnModeratorExit;
    }

    /**
     * Setter for endConferenceOnModeratorExit
     *
     * @ElementName endConferenceOnModeratorExit
     * @param bool|null $endConferenceOnModeratorExit
     * @return $this
     */
    public function setEndConferenceOnModeratorExit($endConferenceOnModeratorExit)
    {
        $this->endConferenceOnModeratorExit = $endConferenceOnModeratorExit;
        return $this;
    }

    /**
     * Getter for moderatorRequired
     *
     * @ElementName moderatorRequired
     * @return bool|null
     */
    public function getModeratorRequired()
    {
        return $this->moderatorRequired;
    }

    /**
     * Setter for moderatorRequired
     *
     * @ElementName moderatorRequired
     * @param bool|null $moderatorRequired
     * @return $this
     */
    public function setModeratorRequired($moderatorRequired)
    {
        $this->moderatorRequired = $moderatorRequired;
        return $this;
    }

    /**
     * Getter for requireSecurityPin
     *
     * @ElementName requireSecurityPin
     * @return bool|null
     */
    public function getRequireSecurityPin()
    {
        return $this->requireSecurityPin;
    }

    /**
     * Setter for requireSecurityPin
     *
     * @ElementName requireSecurityPin
     * @param bool|null $requireSecurityPin
     * @return $this
     */
    public function setRequireSecurityPin($requireSecurityPin)
    {
        $this->requireSecurityPin = $requireSecurityPin;
        return $this;
    }

    /**
     * Getter for allowUniqueIdentifier
     *
     * @ElementName allowUniqueIdentifier
     * @return bool|null
     */
    public function getAllowUniqueIdentifier()
    {
        return $this->allowUniqueIdentifier;
    }

    /**
     * Setter for allowUniqueIdentifier
     *
     * @ElementName allowUniqueIdentifier
     * @param bool|null $allowUniqueIdentifier
     * @return $this
     */
    public function setAllowUniqueIdentifier($allowUniqueIdentifier)
    {
        $this->allowUniqueIdentifier = $allowUniqueIdentifier;
        return $this;
    }

    /**
     * Getter for attendeeNotification
     *
     * @ElementName attendeeNotification
     * @return string|null
     */
    public function getAttendeeNotification()
    {
        return $this->attendeeNotification;
    }

    /**
     * Setter for attendeeNotification
     *
     * @ElementName attendeeNotification
     * @param string|null $attendeeNotification
     * @return $this
     */
    public function setAttendeeNotification($attendeeNotification)
    {
        $this->attendeeNotification = $attendeeNotification;
        return $this;
    }

    /**
     * Getter for conferenceSchedule
     *
     * @ElementName conferenceSchedule
     * @return \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceSchedule|null
     */
    public function getConferenceSchedule()
    {
        return $this->conferenceSchedule;
    }

    /**
     * Setter for conferenceSchedule
     *
     * @ElementName conferenceSchedule
     * @param \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceSchedule|null $conferenceSchedule
     * @return $this
     */
    public function setConferenceSchedule($conferenceSchedule)
    {
        $this->conferenceSchedule = $conferenceSchedule;
        return $this;
    }


}

