<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserMeetMeConferencingModifyConferenceRequest
 *
 * Modify an existing conference.
 *         The response is either SuccessResponse or ErrorResponse.
 *         The startTime element is adjusted to the first occurrence of the recurrent schedule that comes at or after the startTime.
 *         The startTime, endTime and recurrence information for a conferenceSchedule element will be adjusted to the user Host time zone.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"0fd24121d16995c994d40bc408dbcfa5:893","type":"sequence","children":[{"id":"0fd24121d16995c994d40bc408dbcfa5:898","type":"choice","optional":true}]}]
 */
class UserMeetMeConferencingModifyConferenceRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 0fd24121d16995c994d40bc408dbcfa5:893
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName conferenceKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceKey
     * @Group 0fd24121d16995c994d40bc408dbcfa5:893
     * @var \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceKey|null
     */
    private $conferenceKey = null;

    /**
     * @ElementName title
     * @Type string
     * @Optional
     * @Group 0fd24121d16995c994d40bc408dbcfa5:893
     * @var string|null
     */
    private $title = null;

    /**
     * @ElementName estimatedParticipants
     * @Type int
     * @Nillable
     * @Optional
     * @Group 0fd24121d16995c994d40bc408dbcfa5:893
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $estimatedParticipants = null;

    /**
     * @ElementName restrictParticipants
     * @Type bool
     * @Group 0fd24121d16995c994d40bc408dbcfa5:898
     * @var bool|null
     */
    private $restrictParticipants = null;

    /**
     * @ElementName maxParticipants
     * @Type int
     * @Group 0fd24121d16995c994d40bc408dbcfa5:898
     * @var int|null
     */
    private $maxParticipants = null;

    /**
     * @ElementName accountCode
     * @Type string
     * @Nillable
     * @Optional
     * @Group 0fd24121d16995c994d40bc408dbcfa5:893
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $accountCode = null;

    /**
     * @ElementName muteAllAttendeesOnEntry
     * @Type bool
     * @Optional
     * @Group 0fd24121d16995c994d40bc408dbcfa5:893
     * @var bool|null
     */
    private $muteAllAttendeesOnEntry = null;

    /**
     * @ElementName endConferenceOnModeratorExit
     * @Type bool
     * @Optional
     * @Group 0fd24121d16995c994d40bc408dbcfa5:893
     * @var bool|null
     */
    private $endConferenceOnModeratorExit = null;

    /**
     * @ElementName moderatorRequired
     * @Type bool
     * @Optional
     * @Group 0fd24121d16995c994d40bc408dbcfa5:893
     * @var bool|null
     */
    private $moderatorRequired = null;

    /**
     * @ElementName requireSecurityPin
     * @Type bool
     * @Optional
     * @Group 0fd24121d16995c994d40bc408dbcfa5:893
     * @var bool|null
     */
    private $requireSecurityPin = null;

    /**
     * @ElementName allowUniqueIdentifier
     * @Type bool
     * @Optional
     * @Group 0fd24121d16995c994d40bc408dbcfa5:893
     * @var bool|null
     */
    private $allowUniqueIdentifier = null;

    /**
     * @ElementName attendeeNotification
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceAttendeeNotification
     * @Optional
     * @Group 0fd24121d16995c994d40bc408dbcfa5:893
     * @var \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceAttendeeNotification|null
     */
    private $attendeeNotification = null;

    /**
     * @ElementName conferenceSchedule
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceSchedule
     * @Optional
     * @Group 0fd24121d16995c994d40bc408dbcfa5:893
     * @var \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceSchedule|null
     */
    private $conferenceSchedule = null;

    /**
     * @ElementName allowParticipantUnmuteInAutoLectureMode
     * @Type bool
     * @Optional
     * @Group 0fd24121d16995c994d40bc408dbcfa5:893
     * @var bool|null
     */
    private $allowParticipantUnmuteInAutoLectureMode = null;

    /**
     * Getter for userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userId;
    }

    /**
     * Setter for userId
     *
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserId()
    {
        $this->userId = null;
        return $this;
    }

    /**
     * Getter for conferenceKey
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceKey
     */
    public function getConferenceKey()
    {
        return $this->conferenceKey instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->conferenceKey;
    }

    /**
     * Setter for conferenceKey
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceKey $conferenceKey
     * @return $this
     */
    public function setConferenceKey(\CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceKey $conferenceKey)
    {
        $this->conferenceKey = $conferenceKey;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetConferenceKey()
    {
        $this->conferenceKey = null;
        return $this;
    }

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
     * @return int|null
     */
    public function getEstimatedParticipants()
    {
        return $this->estimatedParticipants instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->estimatedParticipants;
    }

    /**
     * Setter for estimatedParticipants
     *
     * @param int|null $estimatedParticipants
     * @return $this
     */
    public function setEstimatedParticipants($estimatedParticipants = null)
    {
        if ($estimatedParticipants === null) {
            $this->estimatedParticipants = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->estimatedParticipants = $estimatedParticipants;
        }
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
     * @return string|null
     */
    public function getAccountCode()
    {
        return $this->accountCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accountCode;
    }

    /**
     * Setter for accountCode
     *
     * @param string|null $accountCode
     * @return $this
     */
    public function setAccountCode($accountCode = null)
    {
        if ($accountCode === null) {
            $this->accountCode = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->accountCode = $accountCode;
        }
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
     * Getter for allowParticipantUnmuteInAutoLectureMode
     *
     * @return bool
     */
    public function getAllowParticipantUnmuteInAutoLectureMode()
    {
        return $this->allowParticipantUnmuteInAutoLectureMode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowParticipantUnmuteInAutoLectureMode;
    }

    /**
     * Setter for allowParticipantUnmuteInAutoLectureMode
     *
     * @param bool $allowParticipantUnmuteInAutoLectureMode
     * @return $this
     */
    public function setAllowParticipantUnmuteInAutoLectureMode($allowParticipantUnmuteInAutoLectureMode)
    {
        $this->allowParticipantUnmuteInAutoLectureMode = $allowParticipantUnmuteInAutoLectureMode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowParticipantUnmuteInAutoLectureMode()
    {
        $this->allowParticipantUnmuteInAutoLectureMode = null;
        return $this;
    }


}

