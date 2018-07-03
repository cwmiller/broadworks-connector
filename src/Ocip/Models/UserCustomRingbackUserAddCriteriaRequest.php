<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCustomRingbackUserAddCriteriaRequest
 *
 * Add a criteria to the user's custom ringback service.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class UserCustomRingbackUserAddCriteriaRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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
     * @ElementName timeSchedule
     * @var \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule|null
     */
    private $timeSchedule = null;

    /**
     * @ElementName fromDnCriteria
     * @var \CWM\BroadWorksConnector\Ocip\Models\CriteriaFromDn|null
     */
    private $fromDnCriteria = null;

    /**
     * @ElementName audioSelection
     * @var string|null
     */
    private $audioSelection = null;

    /**
     * @ElementName audioFile
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResource|null
     */
    private $audioFile = null;

    /**
     * @ElementName videoSelection
     * @var string|null
     */
    private $videoSelection = null;

    /**
     * @ElementName videoFile
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResource|null
     */
    private $videoFile = null;

    /**
     * @ElementName callWaitingAudioSelection
     * @var string|null
     */
    private $callWaitingAudioSelection = null;

    /**
     * @ElementName callWaitingAudioFile
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResource|null
     */
    private $callWaitingAudioFile = null;

    /**
     * @ElementName callWaitingVideoSelection
     * @var string|null
     */
    private $callWaitingVideoSelection = null;

    /**
     * @ElementName callWaitingVideoFile
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResource|null
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
     * Getter for timeSchedule
     *
     * @ElementName timeSchedule
     * @return \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule|null
     */
    public function getTimeSchedule()
    {
        return $this->timeSchedule;
    }

    /**
     * Setter for timeSchedule
     *
     * @ElementName timeSchedule
     * @param \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule|null $timeSchedule
     * @return $this
     */
    public function setTimeSchedule($timeSchedule)
    {
        $this->timeSchedule = $timeSchedule;
        return $this;
    }

    /**
     * Getter for fromDnCriteria
     *
     * @ElementName fromDnCriteria
     * @return \CWM\BroadWorksConnector\Ocip\Models\CriteriaFromDn|null
     */
    public function getFromDnCriteria()
    {
        return $this->fromDnCriteria;
    }

    /**
     * Setter for fromDnCriteria
     *
     * @ElementName fromDnCriteria
     * @param \CWM\BroadWorksConnector\Ocip\Models\CriteriaFromDn|null $fromDnCriteria
     * @return $this
     */
    public function setFromDnCriteria($fromDnCriteria)
    {
        $this->fromDnCriteria = $fromDnCriteria;
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResource|null
     */
    public function getAudioFile()
    {
        return $this->audioFile;
    }

    /**
     * Setter for audioFile
     *
     * @ElementName audioFile
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResource|null $audioFile
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResource|null
     */
    public function getVideoFile()
    {
        return $this->videoFile;
    }

    /**
     * Setter for videoFile
     *
     * @ElementName videoFile
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResource|null $videoFile
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResource|null
     */
    public function getCallWaitingAudioFile()
    {
        return $this->callWaitingAudioFile;
    }

    /**
     * Setter for callWaitingAudioFile
     *
     * @ElementName callWaitingAudioFile
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResource|null $callWaitingAudioFile
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResource|null
     */
    public function getCallWaitingVideoFile()
    {
        return $this->callWaitingVideoFile;
    }

    /**
     * Setter for callWaitingVideoFile
     *
     * @ElementName callWaitingVideoFile
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResource|null $callWaitingVideoFile
     * @return $this
     */
    public function setCallWaitingVideoFile($callWaitingVideoFile)
    {
        $this->callWaitingVideoFile = $callWaitingVideoFile;
        return $this;
    }


}

