<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserMeetMeConferencingGetConferenceResponse20
 *
 * Response to UserMeetMeConferencingGetConferenceRequest20.
 *         Contains the information of a conference.
 *
 * @see UserMeetMeConferencingGetConferenceRequest20
 */
class UserMeetMeConferencingGetConferenceResponse20 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

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
     * @ElementName securityPin
     * @var string|null
     */
    private $securityPin = null;

    /**
     * @ElementName allowUniqueIdentifier
     * @var bool|null
     */
    private $allowUniqueIdentifier = null;

    /**
     * @ElementName attendeeNotification
     * @var \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceAttendeeNotification|null
     */
    private $attendeeNotification = null;

    /**
     * @ElementName conferenceSchedule
     * @var \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceSchedule|null
     */
    private $conferenceSchedule = null;

    /**
     * @ElementName moderatorPin
     * @var string|null
     */
    private $moderatorPin = null;

    /**
     * @ElementName hostTimeZone
     * @var string|null
     */
    private $hostTimeZone = null;

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
     * Getter for securityPin
     *
     * @ElementName securityPin
     * @return string|null
     */
    public function getSecurityPin()
    {
        return $this->securityPin;
    }

    /**
     * Setter for securityPin
     *
     * @ElementName securityPin
     * @param string|null $securityPin
     * @return $this
     */
    public function setSecurityPin($securityPin)
    {
        $this->securityPin = $securityPin;
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceAttendeeNotification|null
     */
    public function getAttendeeNotification()
    {
        return $this->attendeeNotification;
    }

    /**
     * Setter for attendeeNotification
     *
     * @ElementName attendeeNotification
     * @param \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceAttendeeNotification|null $attendeeNotification
     * @return $this
     */
    public function setAttendeeNotification(\CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceAttendeeNotification $attendeeNotification)
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
    public function setConferenceSchedule(\CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceSchedule $conferenceSchedule)
    {
        $this->conferenceSchedule = $conferenceSchedule;
        return $this;
    }

    /**
     * Getter for moderatorPin
     *
     * @ElementName moderatorPin
     * @return string|null
     */
    public function getModeratorPin()
    {
        return $this->moderatorPin;
    }

    /**
     * Setter for moderatorPin
     *
     * @ElementName moderatorPin
     * @param string|null $moderatorPin
     * @return $this
     */
    public function setModeratorPin($moderatorPin)
    {
        $this->moderatorPin = $moderatorPin;
        return $this;
    }

    /**
     * Getter for hostTimeZone
     *
     * @ElementName hostTimeZone
     * @return string|null
     */
    public function getHostTimeZone()
    {
        return $this->hostTimeZone;
    }

    /**
     * Setter for hostTimeZone
     *
     * @ElementName hostTimeZone
     * @param string|null $hostTimeZone
     * @return $this
     */
    public function setHostTimeZone($hostTimeZone)
    {
        $this->hostTimeZone = $hostTimeZone;
        return $this;
    }


}

