<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCustomRingbackUserModifyCriteriaRequest20
 *
 * Modify a criteria for the user's custom ringback service.
 *         For the callToNumbers in the callToNumberList, the extension element is
 * not used and the number element is only used when the type is BroadWorks
 * Mobility.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class UserCustomRingbackUserModifyCriteriaRequest20 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName criteriaName
     * @var string|null
     */
    private $criteriaName = null;

    /**
     * @ElementName newCriteriaName
     * @var string|null
     */
    private $newCriteriaName = null;

    /**
     * @ElementName timeSchedule
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $timeSchedule = null;

    /**
     * @ElementName holidaySchedule
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\HolidaySchedule|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $holidaySchedule = null;

    /**
     * @ElementName blacklisted
     * @var bool|null
     */
    private $blacklisted = null;

    /**
     * @ElementName fromDnCriteria
     * @var \CWM\BroadWorksConnector\Ocip\Models\CriteriaFromDnModify|null
     */
    private $fromDnCriteria = null;

    /**
     * @ElementName callToNumberList
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementCallToNumberList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $callToNumberList = null;

    /**
     * @ElementName audioSelection
     * @var string|null
     */
    private $audioSelection = null;

    /**
     * @ElementName audioFile
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileLevelResource20|null
     */
    private $audioFile = null;

    /**
     * @ElementName videoSelection
     * @var string|null
     */
    private $videoSelection = null;

    /**
     * @ElementName videoFile
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileLevelResource20|null
     */
    private $videoFile = null;

    /**
     * @ElementName callWaitingAudioSelection
     * @var string|null
     */
    private $callWaitingAudioSelection = null;

    /**
     * @ElementName callWaitingAudioFile
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileLevelResource20|null
     */
    private $callWaitingAudioFile = null;

    /**
     * @ElementName callWaitingVideoSelection
     * @var string|null
     */
    private $callWaitingVideoSelection = null;

    /**
     * @ElementName callWaitingVideoFile
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileLevelResource20|null
     */
    private $callWaitingVideoFile = null;

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
     * Getter for criteriaName
     *
     * @ElementName criteriaName
     * @return string|null
     */
    public function getCriteriaName()
    {
        return $this->criteriaName;
    }

    /**
     * Setter for criteriaName
     *
     * @ElementName criteriaName
     * @param string|null $criteriaName
     * @return $this
     */
    public function setCriteriaName($criteriaName)
    {
        $this->criteriaName = $criteriaName;
        return $this;
    }

    /**
     * Getter for newCriteriaName
     *
     * @ElementName newCriteriaName
     * @return string|null
     */
    public function getNewCriteriaName()
    {
        return $this->newCriteriaName;
    }

    /**
     * Setter for newCriteriaName
     *
     * @ElementName newCriteriaName
     * @param string|null $newCriteriaName
     * @return $this
     */
    public function setNewCriteriaName($newCriteriaName)
    {
        $this->newCriteriaName = $newCriteriaName;
        return $this;
    }

    /**
     * Getter for timeSchedule
     *
     * @ElementName timeSchedule
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getTimeSchedule()
    {
        return $this->timeSchedule;
    }

    /**
     * Setter for timeSchedule
     *
     * @ElementName timeSchedule
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule|null|\CWM\BroadWorksConnector\Ocip\Nil $timeSchedule
     * @return $this
     */
    public function setTimeSchedule($timeSchedule)
    {
        $this->timeSchedule = $timeSchedule;
        return $this;
    }

    /**
     * Getter for holidaySchedule
     *
     * @ElementName holidaySchedule
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\HolidaySchedule|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getHolidaySchedule()
    {
        return $this->holidaySchedule;
    }

    /**
     * Setter for holidaySchedule
     *
     * @ElementName holidaySchedule
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\HolidaySchedule|null|\CWM\BroadWorksConnector\Ocip\Nil $holidaySchedule
     * @return $this
     */
    public function setHolidaySchedule($holidaySchedule)
    {
        $this->holidaySchedule = $holidaySchedule;
        return $this;
    }

    /**
     * Getter for blacklisted
     *
     * @ElementName blacklisted
     * @return bool|null
     */
    public function getBlacklisted()
    {
        return $this->blacklisted;
    }

    /**
     * Setter for blacklisted
     *
     * @ElementName blacklisted
     * @param bool|null $blacklisted
     * @return $this
     */
    public function setBlacklisted($blacklisted)
    {
        $this->blacklisted = $blacklisted;
        return $this;
    }

    /**
     * Getter for fromDnCriteria
     *
     * @ElementName fromDnCriteria
     * @return \CWM\BroadWorksConnector\Ocip\Models\CriteriaFromDnModify|null
     */
    public function getFromDnCriteria()
    {
        return $this->fromDnCriteria;
    }

    /**
     * Setter for fromDnCriteria
     *
     * @ElementName fromDnCriteria
     * @param \CWM\BroadWorksConnector\Ocip\Models\CriteriaFromDnModify|null $fromDnCriteria
     * @return $this
     */
    public function setFromDnCriteria($fromDnCriteria)
    {
        $this->fromDnCriteria = $fromDnCriteria;
        return $this;
    }

    /**
     * Getter for callToNumberList
     *
     * @ElementName callToNumberList
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementCallToNumberList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getCallToNumberList()
    {
        return $this->callToNumberList;
    }

    /**
     * Setter for callToNumberList
     *
     * @ElementName callToNumberList
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementCallToNumberList|null|\CWM\BroadWorksConnector\Ocip\Nil $callToNumberList
     * @return $this
     */
    public function setCallToNumberList($callToNumberList)
    {
        $this->callToNumberList = $callToNumberList;
        return $this;
    }

    /**
     * Getter for audioSelection
     *
     * @ElementName audioSelection
     * @return string|null
     */
    public function getAudioSelection()
    {
        return $this->audioSelection;
    }

    /**
     * Setter for audioSelection
     *
     * @ElementName audioSelection
     * @param string|null $audioSelection
     * @return $this
     */
    public function setAudioSelection($audioSelection)
    {
        $this->audioSelection = $audioSelection;
        return $this;
    }

    /**
     * Getter for audioFile
     *
     * @ElementName audioFile
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileLevelResource20|null
     */
    public function getAudioFile()
    {
        return $this->audioFile;
    }

    /**
     * Setter for audioFile
     *
     * @ElementName audioFile
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileLevelResource20|null $audioFile
     * @return $this
     */
    public function setAudioFile($audioFile)
    {
        $this->audioFile = $audioFile;
        return $this;
    }

    /**
     * Getter for videoSelection
     *
     * @ElementName videoSelection
     * @return string|null
     */
    public function getVideoSelection()
    {
        return $this->videoSelection;
    }

    /**
     * Setter for videoSelection
     *
     * @ElementName videoSelection
     * @param string|null $videoSelection
     * @return $this
     */
    public function setVideoSelection($videoSelection)
    {
        $this->videoSelection = $videoSelection;
        return $this;
    }

    /**
     * Getter for videoFile
     *
     * @ElementName videoFile
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileLevelResource20|null
     */
    public function getVideoFile()
    {
        return $this->videoFile;
    }

    /**
     * Setter for videoFile
     *
     * @ElementName videoFile
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileLevelResource20|null $videoFile
     * @return $this
     */
    public function setVideoFile($videoFile)
    {
        $this->videoFile = $videoFile;
        return $this;
    }

    /**
     * Getter for callWaitingAudioSelection
     *
     * @ElementName callWaitingAudioSelection
     * @return string|null
     */
    public function getCallWaitingAudioSelection()
    {
        return $this->callWaitingAudioSelection;
    }

    /**
     * Setter for callWaitingAudioSelection
     *
     * @ElementName callWaitingAudioSelection
     * @param string|null $callWaitingAudioSelection
     * @return $this
     */
    public function setCallWaitingAudioSelection($callWaitingAudioSelection)
    {
        $this->callWaitingAudioSelection = $callWaitingAudioSelection;
        return $this;
    }

    /**
     * Getter for callWaitingAudioFile
     *
     * @ElementName callWaitingAudioFile
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileLevelResource20|null
     */
    public function getCallWaitingAudioFile()
    {
        return $this->callWaitingAudioFile;
    }

    /**
     * Setter for callWaitingAudioFile
     *
     * @ElementName callWaitingAudioFile
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileLevelResource20|null $callWaitingAudioFile
     * @return $this
     */
    public function setCallWaitingAudioFile($callWaitingAudioFile)
    {
        $this->callWaitingAudioFile = $callWaitingAudioFile;
        return $this;
    }

    /**
     * Getter for callWaitingVideoSelection
     *
     * @ElementName callWaitingVideoSelection
     * @return string|null
     */
    public function getCallWaitingVideoSelection()
    {
        return $this->callWaitingVideoSelection;
    }

    /**
     * Setter for callWaitingVideoSelection
     *
     * @ElementName callWaitingVideoSelection
     * @param string|null $callWaitingVideoSelection
     * @return $this
     */
    public function setCallWaitingVideoSelection($callWaitingVideoSelection)
    {
        $this->callWaitingVideoSelection = $callWaitingVideoSelection;
        return $this;
    }

    /**
     * Getter for callWaitingVideoFile
     *
     * @ElementName callWaitingVideoFile
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileLevelResource20|null
     */
    public function getCallWaitingVideoFile()
    {
        return $this->callWaitingVideoFile;
    }

    /**
     * Setter for callWaitingVideoFile
     *
     * @ElementName callWaitingVideoFile
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileLevelResource20|null $callWaitingVideoFile
     * @return $this
     */
    public function setCallWaitingVideoFile($callWaitingVideoFile)
    {
        $this->callWaitingVideoFile = $callWaitingVideoFile;
        return $this;
    }


}

