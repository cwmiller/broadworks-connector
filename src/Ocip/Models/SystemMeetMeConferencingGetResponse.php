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
 */
class SystemMeetMeConferencingGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName conferenceIdLength
     * @Type int
     * @var int|null
     */
    private $conferenceIdLength = null;

    /**
     * @ElementName moderatorPinLength
     * @Type int
     * @var int|null
     */
    private $moderatorPinLength = null;

    /**
     * @ElementName enableConferenceEndDateRestriction
     * @Type bool
     * @var bool|null
     */
    private $enableConferenceEndDateRestriction = null;

    /**
     * @ElementName conferenceEndDateRestrictionMonths
     * @Type int
     * @var int|null
     */
    private $conferenceEndDateRestrictionMonths = null;

    /**
     * @ElementName deleteExpiredConferencesAfterHoldPeriod
     * @Type bool
     * @var bool|null
     */
    private $deleteExpiredConferencesAfterHoldPeriod = null;

    /**
     * @ElementName expiredConferenceHoldPeriodDays
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingExpiredConferenceHoldPeriodDays
     * @var \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingExpiredConferenceHoldPeriodDays|null
     */
    private $expiredConferenceHoldPeriodDays = null;

    /**
     * @ElementName recordingWebAppURL
     * @Type string
     * @var string|null
     */
    private $recordingWebAppURL = null;

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

