<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemMeetMeConferencingGetResponse
 *
 * Response to SystemMeetMeConferencingGetRequest.
 *         
 *         Replaced by: SystemMeetMeConferencingGetResponse17sp3
 *
 * @see SystemMeetMeConferencingGetRequest
 * @see SystemMeetMeConferencingGetResponse17sp3
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:28192","type":"sequence"}]
 */
class SystemMeetMeConferencingGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName conferenceIdLength
     * @Type int
     * @Group d8f04177e438f303b41c211e518706bf:28192
     * @MinInclusive 6
     * @MaxInclusive 12
     * @var int|null
     */
    protected $conferenceIdLength = null;

    /**
     * @ElementName moderatorPinLength
     * @Type int
     * @Group d8f04177e438f303b41c211e518706bf:28192
     * @MinInclusive 6
     * @MaxInclusive 12
     * @var int|null
     */
    protected $moderatorPinLength = null;

    /**
     * @ElementName enableConferenceEndDateRestriction
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:28192
     * @var bool|null
     */
    protected $enableConferenceEndDateRestriction = null;

    /**
     * @ElementName conferenceEndDateRestrictionMonths
     * @Type int
     * @Group d8f04177e438f303b41c211e518706bf:28192
     * @MinInclusive 1
     * @MaxInclusive 99
     * @var int|null
     */
    protected $conferenceEndDateRestrictionMonths = null;

    /**
     * @ElementName deleteExpiredConferencesAfterHoldPeriod
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:28192
     * @var bool|null
     */
    protected $deleteExpiredConferencesAfterHoldPeriod = null;

    /**
     * @ElementName expiredConferenceHoldPeriodDays
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingExpiredConferenceHoldPeriodDays
     * @Group d8f04177e438f303b41c211e518706bf:28192
     * @var \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingExpiredConferenceHoldPeriodDays|null
     */
    protected $expiredConferenceHoldPeriodDays = null;

    /**
     * @ElementName recordingWebAppURL
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:28192
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $recordingWebAppURL = null;

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
}

