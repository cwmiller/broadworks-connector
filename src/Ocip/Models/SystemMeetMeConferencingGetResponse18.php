<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemMeetMeConferencingGetResponse18
 *
 * Response to SystemMeetMeConferencingGetRequest18.
 *
 * @see SystemMeetMeConferencingGetRequest18
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:28237","type":"sequence"}]
 */
class SystemMeetMeConferencingGetResponse18 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName conferenceIdLength
     * @Type int
     * @Group d8f04177e438f303b41c211e518706bf:28237
     * @MinInclusive 6
     * @MaxInclusive 12
     * @var int|null
     */
    protected $conferenceIdLength = null;

    /**
     * @ElementName moderatorPinLength
     * @Type int
     * @Group d8f04177e438f303b41c211e518706bf:28237
     * @MinInclusive 6
     * @MaxInclusive 12
     * @var int|null
     */
    protected $moderatorPinLength = null;

    /**
     * @ElementName enableConferenceEndDateRestriction
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:28237
     * @var bool|null
     */
    protected $enableConferenceEndDateRestriction = null;

    /**
     * @ElementName conferenceEndDateRestrictionMonths
     * @Type int
     * @Group d8f04177e438f303b41c211e518706bf:28237
     * @MinInclusive 1
     * @MaxInclusive 99
     * @var int|null
     */
    protected $conferenceEndDateRestrictionMonths = null;

    /**
     * @ElementName deleteExpiredConferencesAfterHoldPeriod
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:28237
     * @var bool|null
     */
    protected $deleteExpiredConferencesAfterHoldPeriod = null;

    /**
     * @ElementName expiredConferenceHoldPeriodDays
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingExpiredConferenceHoldPeriodDays
     * @Group d8f04177e438f303b41c211e518706bf:28237
     * @var \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingExpiredConferenceHoldPeriodDays|null
     */
    protected $expiredConferenceHoldPeriodDays = null;

    /**
     * @ElementName recordingWebAppURL
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:28237
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $recordingWebAppURL = null;

    /**
     * @ElementName recordingFileFormat
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingRecordingFileFormat
     * @Group d8f04177e438f303b41c211e518706bf:28237
     * @var \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingRecordingFileFormat|null
     */
    protected $recordingFileFormat = null;

    /**
     * @ElementName terminateAfterGracePeriod
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:28237
     * @var bool|null
     */
    protected $terminateAfterGracePeriod = null;

    /**
     * @ElementName conferenceGracePeriodMinutes
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceDuration
     * @Group d8f04177e438f303b41c211e518706bf:28237
     * @var \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceDuration|null
     */
    protected $conferenceGracePeriodMinutes = null;

    /**
     * @ElementName conferenceParticipantEarlyEntryMinutes
     * @Type int
     * @Group d8f04177e438f303b41c211e518706bf:28237
     * @MinInclusive 0
     * @MaxInclusive 15
     * @var int|null
     */
    protected $conferenceParticipantEarlyEntryMinutes = null;

    /**
     * @ElementName enableConferenceExpiryNotification
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:28237
     * @var bool|null
     */
    protected $enableConferenceExpiryNotification = null;

    /**
     * @ElementName enableActiveConferenceNotification
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:28237
     * @var bool|null
     */
    protected $enableActiveConferenceNotification = null;

    /**
     * @ElementName conferenceFromAddress
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:28237
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $conferenceFromAddress = null;

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
     * @return string
     */
    public function getRecordingWebAppURL()
    {
        return $this->recordingWebAppURL instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->recordingWebAppURL;
    }

    /**
     * Setter for recordingWebAppURL
     *
     * @param string $recordingWebAppURL
     * @return $this
     */
    public function setRecordingWebAppURL($recordingWebAppURL)
    {
        $this->recordingWebAppURL = $recordingWebAppURL;
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
}

