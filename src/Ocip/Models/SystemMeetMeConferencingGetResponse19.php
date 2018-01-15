<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemMeetMeConferencingGetResponse19
 *
 * Response to SystemMeetMeConferencingGetRequest19.
 */
class SystemMeetMeConferencingGetResponse19 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName conferenceIdLength
     * @var int|null
     */
    private $conferenceIdLength = null;

    /**
     * @ElementName moderatorPinLength
     * @var int|null
     */
    private $moderatorPinLength = null;

    /**
     * @ElementName enableConferenceEndDateRestriction
     * @var bool|null
     */
    private $enableConferenceEndDateRestriction = null;

    /**
     * @ElementName conferenceEndDateRestrictionMonths
     * @var int|null
     */
    private $conferenceEndDateRestrictionMonths = null;

    /**
     * @ElementName deleteExpiredConferencesAfterHoldPeriod
     * @var bool|null
     */
    private $deleteExpiredConferencesAfterHoldPeriod = null;

    /**
     * @ElementName expiredConferenceHoldPeriodDays
     * @var int|null
     */
    private $expiredConferenceHoldPeriodDays = null;

    /**
     * @ElementName recordingWebAppURL
     * @var string|null
     */
    private $recordingWebAppURL = null;

    /**
     * @ElementName recordingFileFormat
     * @var string|null
     */
    private $recordingFileFormat = null;

    /**
     * @ElementName terminateAfterGracePeriod
     * @var bool|null
     */
    private $terminateAfterGracePeriod = null;

    /**
     * @ElementName conferenceGracePeriodMinutes
     * @var \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceDuration|null
     */
    private $conferenceGracePeriodMinutes = null;

    /**
     * @ElementName conferenceParticipantEarlyEntryMinutes
     * @var int|null
     */
    private $conferenceParticipantEarlyEntryMinutes = null;

    /**
     * @ElementName enableConferenceExpiryNotification
     * @var bool|null
     */
    private $enableConferenceExpiryNotification = null;

    /**
     * @ElementName enableActiveConferenceNotification
     * @var bool|null
     */
    private $enableActiveConferenceNotification = null;

    /**
     * @ElementName conferenceFromAddress
     * @var string|null
     */
    private $conferenceFromAddress = null;

    /**
     * @ElementName conferenceActiveTalkerRefreshIntervalSeconds
     * @var int|null
     */
    private $conferenceActiveTalkerRefreshIntervalSeconds = null;

    /**
     * Getter for conferenceIdLength
     *
     * @ElementName conferenceIdLength
     * @return int|null
     */
    public function getConferenceIdLength()
    {
        return $this->conferenceIdLength;
    }

    /**
     * Setter for conferenceIdLength
     *
     * @ElementName conferenceIdLength
     * @param int|null $conferenceIdLength
     * @return $this
     */
    public function setConferenceIdLength($conferenceIdLength)
    {
        $this->conferenceIdLength = $conferenceIdLength;
        return $this;
    }

    /**
     * Getter for moderatorPinLength
     *
     * @ElementName moderatorPinLength
     * @return int|null
     */
    public function getModeratorPinLength()
    {
        return $this->moderatorPinLength;
    }

    /**
     * Setter for moderatorPinLength
     *
     * @ElementName moderatorPinLength
     * @param int|null $moderatorPinLength
     * @return $this
     */
    public function setModeratorPinLength($moderatorPinLength)
    {
        $this->moderatorPinLength = $moderatorPinLength;
        return $this;
    }

    /**
     * Getter for enableConferenceEndDateRestriction
     *
     * @ElementName enableConferenceEndDateRestriction
     * @return bool|null
     */
    public function getEnableConferenceEndDateRestriction()
    {
        return $this->enableConferenceEndDateRestriction;
    }

    /**
     * Setter for enableConferenceEndDateRestriction
     *
     * @ElementName enableConferenceEndDateRestriction
     * @param bool|null $enableConferenceEndDateRestriction
     * @return $this
     */
    public function setEnableConferenceEndDateRestriction($enableConferenceEndDateRestriction)
    {
        $this->enableConferenceEndDateRestriction = $enableConferenceEndDateRestriction;
        return $this;
    }

    /**
     * Getter for conferenceEndDateRestrictionMonths
     *
     * @ElementName conferenceEndDateRestrictionMonths
     * @return int|null
     */
    public function getConferenceEndDateRestrictionMonths()
    {
        return $this->conferenceEndDateRestrictionMonths;
    }

    /**
     * Setter for conferenceEndDateRestrictionMonths
     *
     * @ElementName conferenceEndDateRestrictionMonths
     * @param int|null $conferenceEndDateRestrictionMonths
     * @return $this
     */
    public function setConferenceEndDateRestrictionMonths($conferenceEndDateRestrictionMonths)
    {
        $this->conferenceEndDateRestrictionMonths = $conferenceEndDateRestrictionMonths;
        return $this;
    }

    /**
     * Getter for deleteExpiredConferencesAfterHoldPeriod
     *
     * @ElementName deleteExpiredConferencesAfterHoldPeriod
     * @return bool|null
     */
    public function getDeleteExpiredConferencesAfterHoldPeriod()
    {
        return $this->deleteExpiredConferencesAfterHoldPeriod;
    }

    /**
     * Setter for deleteExpiredConferencesAfterHoldPeriod
     *
     * @ElementName deleteExpiredConferencesAfterHoldPeriod
     * @param bool|null $deleteExpiredConferencesAfterHoldPeriod
     * @return $this
     */
    public function setDeleteExpiredConferencesAfterHoldPeriod($deleteExpiredConferencesAfterHoldPeriod)
    {
        $this->deleteExpiredConferencesAfterHoldPeriod = $deleteExpiredConferencesAfterHoldPeriod;
        return $this;
    }

    /**
     * Getter for expiredConferenceHoldPeriodDays
     *
     * @ElementName expiredConferenceHoldPeriodDays
     * @return int|null
     */
    public function getExpiredConferenceHoldPeriodDays()
    {
        return $this->expiredConferenceHoldPeriodDays;
    }

    /**
     * Setter for expiredConferenceHoldPeriodDays
     *
     * @ElementName expiredConferenceHoldPeriodDays
     * @param int|null $expiredConferenceHoldPeriodDays
     * @return $this
     */
    public function setExpiredConferenceHoldPeriodDays($expiredConferenceHoldPeriodDays)
    {
        $this->expiredConferenceHoldPeriodDays = $expiredConferenceHoldPeriodDays;
        return $this;
    }

    /**
     * Getter for recordingWebAppURL
     *
     * @ElementName recordingWebAppURL
     * @return string|null
     */
    public function getRecordingWebAppURL()
    {
        return $this->recordingWebAppURL;
    }

    /**
     * Setter for recordingWebAppURL
     *
     * @ElementName recordingWebAppURL
     * @param string|null $recordingWebAppURL
     * @return $this
     */
    public function setRecordingWebAppURL($recordingWebAppURL)
    {
        $this->recordingWebAppURL = $recordingWebAppURL;
        return $this;
    }

    /**
     * Getter for recordingFileFormat
     *
     * @ElementName recordingFileFormat
     * @return string|null
     */
    public function getRecordingFileFormat()
    {
        return $this->recordingFileFormat;
    }

    /**
     * Setter for recordingFileFormat
     *
     * @ElementName recordingFileFormat
     * @param string|null $recordingFileFormat
     * @return $this
     */
    public function setRecordingFileFormat($recordingFileFormat)
    {
        $this->recordingFileFormat = $recordingFileFormat;
        return $this;
    }

    /**
     * Getter for terminateAfterGracePeriod
     *
     * @ElementName terminateAfterGracePeriod
     * @return bool|null
     */
    public function getTerminateAfterGracePeriod()
    {
        return $this->terminateAfterGracePeriod;
    }

    /**
     * Setter for terminateAfterGracePeriod
     *
     * @ElementName terminateAfterGracePeriod
     * @param bool|null $terminateAfterGracePeriod
     * @return $this
     */
    public function setTerminateAfterGracePeriod($terminateAfterGracePeriod)
    {
        $this->terminateAfterGracePeriod = $terminateAfterGracePeriod;
        return $this;
    }

    /**
     * Getter for conferenceGracePeriodMinutes
     *
     * @ElementName conferenceGracePeriodMinutes
     * @return \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceDuration|null
     */
    public function getConferenceGracePeriodMinutes()
    {
        return $this->conferenceGracePeriodMinutes;
    }

    /**
     * Setter for conferenceGracePeriodMinutes
     *
     * @ElementName conferenceGracePeriodMinutes
     * @param \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceDuration|null $conferenceGracePeriodMinutes
     * @return $this
     */
    public function setConferenceGracePeriodMinutes($conferenceGracePeriodMinutes)
    {
        $this->conferenceGracePeriodMinutes = $conferenceGracePeriodMinutes;
        return $this;
    }

    /**
     * Getter for conferenceParticipantEarlyEntryMinutes
     *
     * @ElementName conferenceParticipantEarlyEntryMinutes
     * @return int|null
     */
    public function getConferenceParticipantEarlyEntryMinutes()
    {
        return $this->conferenceParticipantEarlyEntryMinutes;
    }

    /**
     * Setter for conferenceParticipantEarlyEntryMinutes
     *
     * @ElementName conferenceParticipantEarlyEntryMinutes
     * @param int|null $conferenceParticipantEarlyEntryMinutes
     * @return $this
     */
    public function setConferenceParticipantEarlyEntryMinutes($conferenceParticipantEarlyEntryMinutes)
    {
        $this->conferenceParticipantEarlyEntryMinutes = $conferenceParticipantEarlyEntryMinutes;
        return $this;
    }

    /**
     * Getter for enableConferenceExpiryNotification
     *
     * @ElementName enableConferenceExpiryNotification
     * @return bool|null
     */
    public function getEnableConferenceExpiryNotification()
    {
        return $this->enableConferenceExpiryNotification;
    }

    /**
     * Setter for enableConferenceExpiryNotification
     *
     * @ElementName enableConferenceExpiryNotification
     * @param bool|null $enableConferenceExpiryNotification
     * @return $this
     */
    public function setEnableConferenceExpiryNotification($enableConferenceExpiryNotification)
    {
        $this->enableConferenceExpiryNotification = $enableConferenceExpiryNotification;
        return $this;
    }

    /**
     * Getter for enableActiveConferenceNotification
     *
     * @ElementName enableActiveConferenceNotification
     * @return bool|null
     */
    public function getEnableActiveConferenceNotification()
    {
        return $this->enableActiveConferenceNotification;
    }

    /**
     * Setter for enableActiveConferenceNotification
     *
     * @ElementName enableActiveConferenceNotification
     * @param bool|null $enableActiveConferenceNotification
     * @return $this
     */
    public function setEnableActiveConferenceNotification($enableActiveConferenceNotification)
    {
        $this->enableActiveConferenceNotification = $enableActiveConferenceNotification;
        return $this;
    }

    /**
     * Getter for conferenceFromAddress
     *
     * @ElementName conferenceFromAddress
     * @return string|null
     */
    public function getConferenceFromAddress()
    {
        return $this->conferenceFromAddress;
    }

    /**
     * Setter for conferenceFromAddress
     *
     * @ElementName conferenceFromAddress
     * @param string|null $conferenceFromAddress
     * @return $this
     */
    public function setConferenceFromAddress($conferenceFromAddress)
    {
        $this->conferenceFromAddress = $conferenceFromAddress;
        return $this;
    }

    /**
     * Getter for conferenceActiveTalkerRefreshIntervalSeconds
     *
     * @ElementName conferenceActiveTalkerRefreshIntervalSeconds
     * @return int|null
     */
    public function getConferenceActiveTalkerRefreshIntervalSeconds()
    {
        return $this->conferenceActiveTalkerRefreshIntervalSeconds;
    }

    /**
     * Setter for conferenceActiveTalkerRefreshIntervalSeconds
     *
     * @ElementName conferenceActiveTalkerRefreshIntervalSeconds
     * @param int|null $conferenceActiveTalkerRefreshIntervalSeconds
     * @return $this
     */
    public function setConferenceActiveTalkerRefreshIntervalSeconds($conferenceActiveTalkerRefreshIntervalSeconds)
    {
        $this->conferenceActiveTalkerRefreshIntervalSeconds = $conferenceActiveTalkerRefreshIntervalSeconds;
        return $this;
    }


}

