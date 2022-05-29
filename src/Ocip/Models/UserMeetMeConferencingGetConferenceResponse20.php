<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserMeetMeConferencingGetConferenceResponse20
 *
 * Response to UserMeetMeConferencingGetConferenceRequest20.
 *         Contains the information of a conference.
 *         
 *         Replaced by: UserMeetMeConferencingGetConferenceResponse23
 *
 * @see UserMeetMeConferencingGetConferenceRequest20
 * @see UserMeetMeConferencingGetConferenceResponse23
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:45267","type":"sequence","children":[{"id":"ab0042aa512abc10edb3c55e4b416b0b:45270","type":"choice"}]}]
 */
class UserMeetMeConferencingGetConferenceResponse20 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName title
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:45267
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $title = null;

    /**
     * @ElementName estimatedParticipants
     * @Type int
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:45267
     * @MinInclusive 1
     * @MaxInclusive 294
     * @var int|null
     */
    protected $estimatedParticipants = null;

    /**
     * @ElementName restrictParticipants
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:45270
     * @var bool|null
     */
    protected $restrictParticipants = null;

    /**
     * @ElementName maxParticipants
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:45270
     * @MinInclusive 1
     * @MaxInclusive 294
     * @var int|null
     */
    protected $maxParticipants = null;

    /**
     * @ElementName accountCode
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:45267
     * @MinLength 1
     * @MaxLength 50
     * @var string|null
     */
    protected $accountCode = null;

    /**
     * @ElementName muteAllAttendeesOnEntry
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:45267
     * @var bool|null
     */
    protected $muteAllAttendeesOnEntry = null;

    /**
     * @ElementName endConferenceOnModeratorExit
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:45267
     * @var bool|null
     */
    protected $endConferenceOnModeratorExit = null;

    /**
     * @ElementName moderatorRequired
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:45267
     * @var bool|null
     */
    protected $moderatorRequired = null;

    /**
     * @ElementName requireSecurityPin
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:45267
     * @var bool|null
     */
    protected $requireSecurityPin = null;

    /**
     * @ElementName securityPin
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:45267
     * @MinLength 4
     * @MaxLength 12
     * @var string|null
     */
    protected $securityPin = null;

    /**
     * @ElementName allowUniqueIdentifier
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:45267
     * @var bool|null
     */
    protected $allowUniqueIdentifier = null;

    /**
     * @ElementName attendeeNotification
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceAttendeeNotification
     * @Group ab0042aa512abc10edb3c55e4b416b0b:45267
     * @var \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceAttendeeNotification|null
     */
    protected $attendeeNotification = null;

    /**
     * @ElementName conferenceSchedule
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceSchedule
     * @Group ab0042aa512abc10edb3c55e4b416b0b:45267
     * @var \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceSchedule|null
     */
    protected $conferenceSchedule = null;

    /**
     * @ElementName moderatorPin
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:45267
     * @MinLength 6
     * @MaxLength 12
     * @var string|null
     */
    protected $moderatorPin = null;

    /**
     * @ElementName hostTimeZone
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:45267
     * @MinLength 1
     * @MaxLength 127
     * @var string|null
     */
    protected $hostTimeZone = null;

    /**
     * Getter for title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->title;
    }

    /**
     * Setter for title
     *
     * @param string $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTitle()
    {
        $this->title = null;
        return $this;
    }

    /**
     * Getter for estimatedParticipants
     *
     * @return int
     */
    public function getEstimatedParticipants()
    {
        return $this->estimatedParticipants instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->estimatedParticipants;
    }

    /**
     * Setter for estimatedParticipants
     *
     * @param int $estimatedParticipants
     * @return $this
     */
    public function setEstimatedParticipants($estimatedParticipants)
    {
        $this->estimatedParticipants = $estimatedParticipants;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEstimatedParticipants()
    {
        $this->estimatedParticipants = null;
        return $this;
    }

    /**
     * Getter for restrictParticipants
     *
     * @return bool
     */
    public function getRestrictParticipants()
    {
        return $this->restrictParticipants instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->restrictParticipants;
    }

    /**
     * Setter for restrictParticipants
     *
     * @param bool $restrictParticipants
     * @return $this
     */
    public function setRestrictParticipants($restrictParticipants)
    {
        $this->restrictParticipants = $restrictParticipants;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRestrictParticipants()
    {
        $this->restrictParticipants = null;
        return $this;
    }

    /**
     * Getter for maxParticipants
     *
     * @return int
     */
    public function getMaxParticipants()
    {
        return $this->maxParticipants instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxParticipants;
    }

    /**
     * Setter for maxParticipants
     *
     * @param int $maxParticipants
     * @return $this
     */
    public function setMaxParticipants($maxParticipants)
    {
        $this->maxParticipants = $maxParticipants;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxParticipants()
    {
        $this->maxParticipants = null;
        return $this;
    }

    /**
     * Getter for accountCode
     *
     * @return string
     */
    public function getAccountCode()
    {
        return $this->accountCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accountCode;
    }

    /**
     * Setter for accountCode
     *
     * @param string $accountCode
     * @return $this
     */
    public function setAccountCode($accountCode)
    {
        $this->accountCode = $accountCode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAccountCode()
    {
        $this->accountCode = null;
        return $this;
    }

    /**
     * Getter for muteAllAttendeesOnEntry
     *
     * @return bool
     */
    public function getMuteAllAttendeesOnEntry()
    {
        return $this->muteAllAttendeesOnEntry instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->muteAllAttendeesOnEntry;
    }

    /**
     * Setter for muteAllAttendeesOnEntry
     *
     * @param bool $muteAllAttendeesOnEntry
     * @return $this
     */
    public function setMuteAllAttendeesOnEntry($muteAllAttendeesOnEntry)
    {
        $this->muteAllAttendeesOnEntry = $muteAllAttendeesOnEntry;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMuteAllAttendeesOnEntry()
    {
        $this->muteAllAttendeesOnEntry = null;
        return $this;
    }

    /**
     * Getter for endConferenceOnModeratorExit
     *
     * @return bool
     */
    public function getEndConferenceOnModeratorExit()
    {
        return $this->endConferenceOnModeratorExit instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->endConferenceOnModeratorExit;
    }

    /**
     * Setter for endConferenceOnModeratorExit
     *
     * @param bool $endConferenceOnModeratorExit
     * @return $this
     */
    public function setEndConferenceOnModeratorExit($endConferenceOnModeratorExit)
    {
        $this->endConferenceOnModeratorExit = $endConferenceOnModeratorExit;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEndConferenceOnModeratorExit()
    {
        $this->endConferenceOnModeratorExit = null;
        return $this;
    }

    /**
     * Getter for moderatorRequired
     *
     * @return bool
     */
    public function getModeratorRequired()
    {
        return $this->moderatorRequired instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->moderatorRequired;
    }

    /**
     * Setter for moderatorRequired
     *
     * @param bool $moderatorRequired
     * @return $this
     */
    public function setModeratorRequired($moderatorRequired)
    {
        $this->moderatorRequired = $moderatorRequired;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetModeratorRequired()
    {
        $this->moderatorRequired = null;
        return $this;
    }

    /**
     * Getter for requireSecurityPin
     *
     * @return bool
     */
    public function getRequireSecurityPin()
    {
        return $this->requireSecurityPin instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->requireSecurityPin;
    }

    /**
     * Setter for requireSecurityPin
     *
     * @param bool $requireSecurityPin
     * @return $this
     */
    public function setRequireSecurityPin($requireSecurityPin)
    {
        $this->requireSecurityPin = $requireSecurityPin;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRequireSecurityPin()
    {
        $this->requireSecurityPin = null;
        return $this;
    }

    /**
     * Getter for securityPin
     *
     * @return string
     */
    public function getSecurityPin()
    {
        return $this->securityPin instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->securityPin;
    }

    /**
     * Setter for securityPin
     *
     * @param string $securityPin
     * @return $this
     */
    public function setSecurityPin($securityPin)
    {
        $this->securityPin = $securityPin;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSecurityPin()
    {
        $this->securityPin = null;
        return $this;
    }

    /**
     * Getter for allowUniqueIdentifier
     *
     * @return bool
     */
    public function getAllowUniqueIdentifier()
    {
        return $this->allowUniqueIdentifier instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowUniqueIdentifier;
    }

    /**
     * Setter for allowUniqueIdentifier
     *
     * @param bool $allowUniqueIdentifier
     * @return $this
     */
    public function setAllowUniqueIdentifier($allowUniqueIdentifier)
    {
        $this->allowUniqueIdentifier = $allowUniqueIdentifier;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowUniqueIdentifier()
    {
        $this->allowUniqueIdentifier = null;
        return $this;
    }

    /**
     * Getter for attendeeNotification
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceAttendeeNotification
     */
    public function getAttendeeNotification()
    {
        return $this->attendeeNotification instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->attendeeNotification;
    }

    /**
     * Setter for attendeeNotification
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceAttendeeNotification $attendeeNotification
     * @return $this
     */
    public function setAttendeeNotification(\CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceAttendeeNotification $attendeeNotification)
    {
        $this->attendeeNotification = $attendeeNotification;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAttendeeNotification()
    {
        $this->attendeeNotification = null;
        return $this;
    }

    /**
     * Getter for conferenceSchedule
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceSchedule
     */
    public function getConferenceSchedule()
    {
        return $this->conferenceSchedule instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->conferenceSchedule;
    }

    /**
     * Setter for conferenceSchedule
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceSchedule $conferenceSchedule
     * @return $this
     */
    public function setConferenceSchedule(\CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceSchedule $conferenceSchedule)
    {
        $this->conferenceSchedule = $conferenceSchedule;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetConferenceSchedule()
    {
        $this->conferenceSchedule = null;
        return $this;
    }

    /**
     * Getter for moderatorPin
     *
     * @return string
     */
    public function getModeratorPin()
    {
        return $this->moderatorPin instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->moderatorPin;
    }

    /**
     * Setter for moderatorPin
     *
     * @param string $moderatorPin
     * @return $this
     */
    public function setModeratorPin($moderatorPin)
    {
        $this->moderatorPin = $moderatorPin;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetModeratorPin()
    {
        $this->moderatorPin = null;
        return $this;
    }

    /**
     * Getter for hostTimeZone
     *
     * @return string
     */
    public function getHostTimeZone()
    {
        return $this->hostTimeZone instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->hostTimeZone;
    }

    /**
     * Setter for hostTimeZone
     *
     * @param string $hostTimeZone
     * @return $this
     */
    public function setHostTimeZone($hostTimeZone)
    {
        $this->hostTimeZone = $hostTimeZone;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHostTimeZone()
    {
        $this->hostTimeZone = null;
        return $this;
    }


}

