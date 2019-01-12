<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemMeetMeConferencingModifyRequest
 *
 * Modify the system level data associated with Meet-Me Conferencing.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"0fd24121d16995c994d40bc408dbcfa5:476","type":"sequence"}]
 */
class SystemMeetMeConferencingModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName conferenceIdLength
     * @Type int
     * @Optional
     * @Group 0fd24121d16995c994d40bc408dbcfa5:476
     * @var int|null
     */
    private $conferenceIdLength = null;

    /**
     * @ElementName moderatorPinLength
     * @Type int
     * @Optional
     * @Group 0fd24121d16995c994d40bc408dbcfa5:476
     * @var int|null
     */
    private $moderatorPinLength = null;

    /**
     * @ElementName enableConferenceEndDateRestriction
     * @Type bool
     * @Optional
     * @Group 0fd24121d16995c994d40bc408dbcfa5:476
     * @var bool|null
     */
    private $enableConferenceEndDateRestriction = null;

    /**
     * @ElementName conferenceEndDateRestrictionMonths
     * @Type int
     * @Optional
     * @Group 0fd24121d16995c994d40bc408dbcfa5:476
     * @var int|null
     */
    private $conferenceEndDateRestrictionMonths = null;

    /**
     * @ElementName deleteExpiredConferencesAfterHoldPeriod
     * @Type bool
     * @Optional
     * @Group 0fd24121d16995c994d40bc408dbcfa5:476
     * @var bool|null
     */
    private $deleteExpiredConferencesAfterHoldPeriod = null;

    /**
     * @ElementName expiredConferenceHoldPeriodDays
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingExpiredConferenceHoldPeriodDays
     * @Optional
     * @Group 0fd24121d16995c994d40bc408dbcfa5:476
     * @var \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingExpiredConferenceHoldPeriodDays|null
     */
    private $expiredConferenceHoldPeriodDays = null;

    /**
     * @ElementName recordingWebAppURL
     * @Type string
     * @Nillable
     * @Optional
     * @Group 0fd24121d16995c994d40bc408dbcfa5:476
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $recordingWebAppURL = null;

    /**
     * @ElementName recordingFileFormat
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingRecordingFileFormat
     * @Optional
     * @Group 0fd24121d16995c994d40bc408dbcfa5:476
     * @var \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingRecordingFileFormat|null
     */
    private $recordingFileFormat = null;

    /**
     * @ElementName terminateAfterGracePeriod
     * @Type bool
     * @Optional
     * @Group 0fd24121d16995c994d40bc408dbcfa5:476
     * @var bool|null
     */
    private $terminateAfterGracePeriod = null;

    /**
     * @ElementName conferenceGracePeriodMinutes
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceDuration
     * @Optional
     * @Group 0fd24121d16995c994d40bc408dbcfa5:476
     * @var \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceDuration|null
     */
    private $conferenceGracePeriodMinutes = null;

    /**
     * @ElementName conferenceParticipantEarlyEntryMinutes
     * @Type int
     * @Optional
     * @Group 0fd24121d16995c994d40bc408dbcfa5:476
     * @var int|null
     */
    private $conferenceParticipantEarlyEntryMinutes = null;

    /**
     * @ElementName enableConferenceExpiryNotification
     * @Type bool
     * @Optional
     * @Group 0fd24121d16995c994d40bc408dbcfa5:476
     * @var bool|null
     */
    private $enableConferenceExpiryNotification = null;

    /**
     * @ElementName enableActiveConferenceNotification
     * @Type bool
     * @Optional
     * @Group 0fd24121d16995c994d40bc408dbcfa5:476
     * @var bool|null
     */
    private $enableActiveConferenceNotification = null;

    /**
     * @ElementName conferenceFromAddress
     * @Type string
     * @Optional
     * @Group 0fd24121d16995c994d40bc408dbcfa5:476
     * @var string|null
     */
    private $conferenceFromAddress = null;

    /**
     * @ElementName conferenceActiveTalkerRefreshIntervalSeconds
     * @Type int
     * @Optional
     * @Group 0fd24121d16995c994d40bc408dbcfa5:476
     * @var int|null
     */
    private $conferenceActiveTalkerRefreshIntervalSeconds = null;

    /**
     * Getter for conferenceIdLength
     *
     * @return int
     */
    public function getConferenceIdLength()
    {
        return $this->conferenceIdLength instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->conferenceIdLength;
    }

    /**
     * Setter for conferenceIdLength
     *
     * @param int $conferenceIdLength
     * @return $this
     */
    public function setConferenceIdLength($conferenceIdLength)
    {
        $this->conferenceIdLength = $conferenceIdLength;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetConferenceIdLength()
    {
        $this->conferenceIdLength = null;
        return $this;
    }

    /**
     * Getter for moderatorPinLength
     *
     * @return int
     */
    public function getModeratorPinLength()
    {
        return $this->moderatorPinLength instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->moderatorPinLength;
    }

    /**
     * Setter for moderatorPinLength
     *
     * @param int $moderatorPinLength
     * @return $this
     */
    public function setModeratorPinLength($moderatorPinLength)
    {
        $this->moderatorPinLength = $moderatorPinLength;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetModeratorPinLength()
    {
        $this->moderatorPinLength = null;
        return $this;
    }

    /**
     * Getter for enableConferenceEndDateRestriction
     *
     * @return bool
     */
    public function getEnableConferenceEndDateRestriction()
    {
        return $this->enableConferenceEndDateRestriction instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableConferenceEndDateRestriction;
    }

    /**
     * Setter for enableConferenceEndDateRestriction
     *
     * @param bool $enableConferenceEndDateRestriction
     * @return $this
     */
    public function setEnableConferenceEndDateRestriction($enableConferenceEndDateRestriction)
    {
        $this->enableConferenceEndDateRestriction = $enableConferenceEndDateRestriction;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableConferenceEndDateRestriction()
    {
        $this->enableConferenceEndDateRestriction = null;
        return $this;
    }

    /**
     * Getter for conferenceEndDateRestrictionMonths
     *
     * @return int
     */
    public function getConferenceEndDateRestrictionMonths()
    {
        return $this->conferenceEndDateRestrictionMonths instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->conferenceEndDateRestrictionMonths;
    }

    /**
     * Setter for conferenceEndDateRestrictionMonths
     *
     * @param int $conferenceEndDateRestrictionMonths
     * @return $this
     */
    public function setConferenceEndDateRestrictionMonths($conferenceEndDateRestrictionMonths)
    {
        $this->conferenceEndDateRestrictionMonths = $conferenceEndDateRestrictionMonths;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetConferenceEndDateRestrictionMonths()
    {
        $this->conferenceEndDateRestrictionMonths = null;
        return $this;
    }

    /**
     * Getter for deleteExpiredConferencesAfterHoldPeriod
     *
     * @return bool
     */
    public function getDeleteExpiredConferencesAfterHoldPeriod()
    {
        return $this->deleteExpiredConferencesAfterHoldPeriod instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deleteExpiredConferencesAfterHoldPeriod;
    }

    /**
     * Setter for deleteExpiredConferencesAfterHoldPeriod
     *
     * @param bool $deleteExpiredConferencesAfterHoldPeriod
     * @return $this
     */
    public function setDeleteExpiredConferencesAfterHoldPeriod($deleteExpiredConferencesAfterHoldPeriod)
    {
        $this->deleteExpiredConferencesAfterHoldPeriod = $deleteExpiredConferencesAfterHoldPeriod;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeleteExpiredConferencesAfterHoldPeriod()
    {
        $this->deleteExpiredConferencesAfterHoldPeriod = null;
        return $this;
    }

    /**
     * Getter for expiredConferenceHoldPeriodDays
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingExpiredConferenceHoldPeriodDays
     */
    public function getExpiredConferenceHoldPeriodDays()
    {
        return $this->expiredConferenceHoldPeriodDays instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->expiredConferenceHoldPeriodDays;
    }

    /**
     * Setter for expiredConferenceHoldPeriodDays
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingExpiredConferenceHoldPeriodDays $expiredConferenceHoldPeriodDays
     * @return $this
     */
    public function setExpiredConferenceHoldPeriodDays(\CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingExpiredConferenceHoldPeriodDays $expiredConferenceHoldPeriodDays)
    {
        $this->expiredConferenceHoldPeriodDays = $expiredConferenceHoldPeriodDays;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetExpiredConferenceHoldPeriodDays()
    {
        $this->expiredConferenceHoldPeriodDays = null;
        return $this;
    }

    /**
     * Getter for recordingWebAppURL
     *
     * @return string|null
     */
    public function getRecordingWebAppURL()
    {
        return $this->recordingWebAppURL instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->recordingWebAppURL;
    }

    /**
     * Setter for recordingWebAppURL
     *
     * @param string|null $recordingWebAppURL
     * @return $this
     */
    public function setRecordingWebAppURL($recordingWebAppURL)
    {
        if ($recordingWebAppURL === null) {
            $this->recordingWebAppURL = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->recordingWebAppURL = $recordingWebAppURL;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRecordingWebAppURL()
    {
        $this->recordingWebAppURL = null;
        return $this;
    }

    /**
     * Getter for recordingFileFormat
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingRecordingFileFormat
     */
    public function getRecordingFileFormat()
    {
        return $this->recordingFileFormat instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->recordingFileFormat;
    }

    /**
     * Setter for recordingFileFormat
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingRecordingFileFormat $recordingFileFormat
     * @return $this
     */
    public function setRecordingFileFormat(\CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingRecordingFileFormat $recordingFileFormat)
    {
        $this->recordingFileFormat = $recordingFileFormat;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRecordingFileFormat()
    {
        $this->recordingFileFormat = null;
        return $this;
    }

    /**
     * Getter for terminateAfterGracePeriod
     *
     * @return bool
     */
    public function getTerminateAfterGracePeriod()
    {
        return $this->terminateAfterGracePeriod instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->terminateAfterGracePeriod;
    }

    /**
     * Setter for terminateAfterGracePeriod
     *
     * @param bool $terminateAfterGracePeriod
     * @return $this
     */
    public function setTerminateAfterGracePeriod($terminateAfterGracePeriod)
    {
        $this->terminateAfterGracePeriod = $terminateAfterGracePeriod;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTerminateAfterGracePeriod()
    {
        $this->terminateAfterGracePeriod = null;
        return $this;
    }

    /**
     * Getter for conferenceGracePeriodMinutes
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceDuration
     */
    public function getConferenceGracePeriodMinutes()
    {
        return $this->conferenceGracePeriodMinutes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->conferenceGracePeriodMinutes;
    }

    /**
     * Setter for conferenceGracePeriodMinutes
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceDuration $conferenceGracePeriodMinutes
     * @return $this
     */
    public function setConferenceGracePeriodMinutes(\CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceDuration $conferenceGracePeriodMinutes)
    {
        $this->conferenceGracePeriodMinutes = $conferenceGracePeriodMinutes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetConferenceGracePeriodMinutes()
    {
        $this->conferenceGracePeriodMinutes = null;
        return $this;
    }

    /**
     * Getter for conferenceParticipantEarlyEntryMinutes
     *
     * @return int
     */
    public function getConferenceParticipantEarlyEntryMinutes()
    {
        return $this->conferenceParticipantEarlyEntryMinutes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->conferenceParticipantEarlyEntryMinutes;
    }

    /**
     * Setter for conferenceParticipantEarlyEntryMinutes
     *
     * @param int $conferenceParticipantEarlyEntryMinutes
     * @return $this
     */
    public function setConferenceParticipantEarlyEntryMinutes($conferenceParticipantEarlyEntryMinutes)
    {
        $this->conferenceParticipantEarlyEntryMinutes = $conferenceParticipantEarlyEntryMinutes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetConferenceParticipantEarlyEntryMinutes()
    {
        $this->conferenceParticipantEarlyEntryMinutes = null;
        return $this;
    }

    /**
     * Getter for enableConferenceExpiryNotification
     *
     * @return bool
     */
    public function getEnableConferenceExpiryNotification()
    {
        return $this->enableConferenceExpiryNotification instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableConferenceExpiryNotification;
    }

    /**
     * Setter for enableConferenceExpiryNotification
     *
     * @param bool $enableConferenceExpiryNotification
     * @return $this
     */
    public function setEnableConferenceExpiryNotification($enableConferenceExpiryNotification)
    {
        $this->enableConferenceExpiryNotification = $enableConferenceExpiryNotification;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableConferenceExpiryNotification()
    {
        $this->enableConferenceExpiryNotification = null;
        return $this;
    }

    /**
     * Getter for enableActiveConferenceNotification
     *
     * @return bool
     */
    public function getEnableActiveConferenceNotification()
    {
        return $this->enableActiveConferenceNotification instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableActiveConferenceNotification;
    }

    /**
     * Setter for enableActiveConferenceNotification
     *
     * @param bool $enableActiveConferenceNotification
     * @return $this
     */
    public function setEnableActiveConferenceNotification($enableActiveConferenceNotification)
    {
        $this->enableActiveConferenceNotification = $enableActiveConferenceNotification;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableActiveConferenceNotification()
    {
        $this->enableActiveConferenceNotification = null;
        return $this;
    }

    /**
     * Getter for conferenceFromAddress
     *
     * @return string
     */
    public function getConferenceFromAddress()
    {
        return $this->conferenceFromAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->conferenceFromAddress;
    }

    /**
     * Setter for conferenceFromAddress
     *
     * @param string $conferenceFromAddress
     * @return $this
     */
    public function setConferenceFromAddress($conferenceFromAddress)
    {
        $this->conferenceFromAddress = $conferenceFromAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetConferenceFromAddress()
    {
        $this->conferenceFromAddress = null;
        return $this;
    }

    /**
     * Getter for conferenceActiveTalkerRefreshIntervalSeconds
     *
     * @return int
     */
    public function getConferenceActiveTalkerRefreshIntervalSeconds()
    {
        return $this->conferenceActiveTalkerRefreshIntervalSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->conferenceActiveTalkerRefreshIntervalSeconds;
    }

    /**
     * Setter for conferenceActiveTalkerRefreshIntervalSeconds
     *
     * @param int $conferenceActiveTalkerRefreshIntervalSeconds
     * @return $this
     */
    public function setConferenceActiveTalkerRefreshIntervalSeconds($conferenceActiveTalkerRefreshIntervalSeconds)
    {
        $this->conferenceActiveTalkerRefreshIntervalSeconds = $conferenceActiveTalkerRefreshIntervalSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetConferenceActiveTalkerRefreshIntervalSeconds()
    {
        $this->conferenceActiveTalkerRefreshIntervalSeconds = null;
        return $this;
    }


}

