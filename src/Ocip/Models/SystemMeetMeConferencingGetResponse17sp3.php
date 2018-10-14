<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemMeetMeConferencingGetResponse17sp3
 *
 * Response to SystemMeetMeConferencingGetRequest17sp3.
 *         
 *         Replaced by: SystemMeetMeConferencingGetResponse18
 *
 * @see SystemMeetMeConferencingGetRequest17sp3
 * @see SystemMeetMeConferencingGetResponse18
 */
class SystemMeetMeConferencingGetResponse17sp3 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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
     * @var \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingExpiredConferenceHoldPeriodDays|null
     */
    private $expiredConferenceHoldPeriodDays = null;

    /**
     * @ElementName recordingWebAppURL
     * @var string|null
     */
    private $recordingWebAppURL = null;

    /**
     * @ElementName recordingFileFormat
     * @var \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingRecordingFileFormat|null
     */
    private $recordingFileFormat = null;

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
     * @return \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingExpiredConferenceHoldPeriodDays|null
     */
    public function getExpiredConferenceHoldPeriodDays()
    {
        return $this->expiredConferenceHoldPeriodDays;
    }

    /**
     * Setter for expiredConferenceHoldPeriodDays
     *
     * @ElementName expiredConferenceHoldPeriodDays
     * @param \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingExpiredConferenceHoldPeriodDays|null $expiredConferenceHoldPeriodDays
     * @return $this
     */
    public function setExpiredConferenceHoldPeriodDays(\CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingExpiredConferenceHoldPeriodDays $expiredConferenceHoldPeriodDays)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingRecordingFileFormat|null
     */
    public function getRecordingFileFormat()
    {
        return $this->recordingFileFormat;
    }

    /**
     * Setter for recordingFileFormat
     *
     * @ElementName recordingFileFormat
     * @param \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingRecordingFileFormat|null $recordingFileFormat
     * @return $this
     */
    public function setRecordingFileFormat(\CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingRecordingFileFormat $recordingFileFormat)
    {
        $this->recordingFileFormat = $recordingFileFormat;
        return $this;
    }


}

