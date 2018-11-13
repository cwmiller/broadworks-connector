<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCustomRingbackUserModifyCriteriaRequest
 *
 * Modify a criteria for the user's custom ringback service.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         Replaced By: UserCustomRingbackUserModifyCriteriaRequest16
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see UserCustomRingbackUserModifyCriteriaRequest16
 */
class UserCustomRingbackUserModifyCriteriaRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName criteriaName
     * @Type string
     * @var string|null
     */
    private $criteriaName = null;

    /**
     * @ElementName newCriteriaName
     * @Type string
     * @var string|null
     */
    private $newCriteriaName = null;

    /**
     * @ElementName timeSchedule
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $timeSchedule = null;

    /**
     * @ElementName fromDnCriteria
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CriteriaFromDnModify
     * @var \CWM\BroadWorksConnector\Ocip\Models\CriteriaFromDnModify|null
     */
    private $fromDnCriteria = null;

    /**
     * @ElementName audioSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    private $audioSelection = null;

    /**
     * @ElementName audioFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResource
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResource|null
     */
    private $audioFile = null;

    /**
     * @ElementName videoSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    private $videoSelection = null;

    /**
     * @ElementName videoFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResource
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResource|null
     */
    private $videoFile = null;

    /**
     * @ElementName callWaitingAudioSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    private $callWaitingAudioSelection = null;

    /**
     * @ElementName callWaitingAudioFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResource
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResource|null
     */
    private $callWaitingAudioFile = null;

    /**
     * @ElementName callWaitingVideoSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    private $callWaitingVideoSelection = null;

    /**
     * @ElementName callWaitingVideoFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResource
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResource|null
     */
    private $callWaitingVideoFile = null;

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
     * Getter for criteriaName
     *
     * @return string
     */
    public function getCriteriaName()
    {
        return $this->criteriaName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->criteriaName;
    }

    /**
     * Setter for criteriaName
     *
     * @param string $criteriaName
     * @return $this
     */
    public function setCriteriaName($criteriaName)
    {
        $this->criteriaName = $criteriaName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCriteriaName()
    {
        $this->criteriaName = null;
        return $this;
    }

    /**
     * Getter for newCriteriaName
     *
     * @return string
     */
    public function getNewCriteriaName()
    {
        return $this->newCriteriaName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->newCriteriaName;
    }

    /**
     * Setter for newCriteriaName
     *
     * @param string $newCriteriaName
     * @return $this
     */
    public function setNewCriteriaName($newCriteriaName)
    {
        $this->newCriteriaName = $newCriteriaName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNewCriteriaName()
    {
        $this->newCriteriaName = null;
        return $this;
    }

    /**
     * Getter for timeSchedule
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule|null
     */
    public function getTimeSchedule()
    {
        return $this->timeSchedule instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->timeSchedule;
    }

    /**
     * Setter for timeSchedule
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule|null $timeSchedule
     * @return $this
     */
    public function setTimeSchedule(\CWM\BroadWorksConnector\Ocip\Models\TimeSchedule $timeSchedule)
    {
        if ($timeSchedule === null) {
            $this->timeSchedule = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->timeSchedule = $timeSchedule;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTimeSchedule()
    {
        $this->timeSchedule = null;
        return $this;
    }

    /**
     * Getter for fromDnCriteria
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CriteriaFromDnModify
     */
    public function getFromDnCriteria()
    {
        return $this->fromDnCriteria instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->fromDnCriteria;
    }

    /**
     * Setter for fromDnCriteria
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CriteriaFromDnModify $fromDnCriteria
     * @return $this
     */
    public function setFromDnCriteria(\CWM\BroadWorksConnector\Ocip\Models\CriteriaFromDnModify $fromDnCriteria)
    {
        $this->fromDnCriteria = $fromDnCriteria;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFromDnCriteria()
    {
        $this->fromDnCriteria = null;
        return $this;
    }

    /**
     * Getter for audioSelection
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     */
    public function getAudioSelection()
    {
        return $this->audioSelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->audioSelection;
    }

    /**
     * Setter for audioSelection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection $audioSelection
     * @return $this
     */
    public function setAudioSelection(\CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection $audioSelection)
    {
        $this->audioSelection = $audioSelection;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAudioSelection()
    {
        $this->audioSelection = null;
        return $this;
    }

    /**
     * Getter for audioFile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResource
     */
    public function getAudioFile()
    {
        return $this->audioFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->audioFile;
    }

    /**
     * Setter for audioFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResource $audioFile
     * @return $this
     */
    public function setAudioFile(\CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResource $audioFile)
    {
        $this->audioFile = $audioFile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAudioFile()
    {
        $this->audioFile = null;
        return $this;
    }

    /**
     * Getter for videoSelection
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     */
    public function getVideoSelection()
    {
        return $this->videoSelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->videoSelection;
    }

    /**
     * Setter for videoSelection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection $videoSelection
     * @return $this
     */
    public function setVideoSelection(\CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection $videoSelection)
    {
        $this->videoSelection = $videoSelection;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVideoSelection()
    {
        $this->videoSelection = null;
        return $this;
    }

    /**
     * Getter for videoFile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResource
     */
    public function getVideoFile()
    {
        return $this->videoFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->videoFile;
    }

    /**
     * Setter for videoFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResource $videoFile
     * @return $this
     */
    public function setVideoFile(\CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResource $videoFile)
    {
        $this->videoFile = $videoFile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVideoFile()
    {
        $this->videoFile = null;
        return $this;
    }

    /**
     * Getter for callWaitingAudioSelection
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     */
    public function getCallWaitingAudioSelection()
    {
        return $this->callWaitingAudioSelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callWaitingAudioSelection;
    }

    /**
     * Setter for callWaitingAudioSelection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection $callWaitingAudioSelection
     * @return $this
     */
    public function setCallWaitingAudioSelection(\CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection $callWaitingAudioSelection)
    {
        $this->callWaitingAudioSelection = $callWaitingAudioSelection;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallWaitingAudioSelection()
    {
        $this->callWaitingAudioSelection = null;
        return $this;
    }

    /**
     * Getter for callWaitingAudioFile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResource
     */
    public function getCallWaitingAudioFile()
    {
        return $this->callWaitingAudioFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callWaitingAudioFile;
    }

    /**
     * Setter for callWaitingAudioFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResource $callWaitingAudioFile
     * @return $this
     */
    public function setCallWaitingAudioFile(\CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResource $callWaitingAudioFile)
    {
        $this->callWaitingAudioFile = $callWaitingAudioFile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallWaitingAudioFile()
    {
        $this->callWaitingAudioFile = null;
        return $this;
    }

    /**
     * Getter for callWaitingVideoSelection
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     */
    public function getCallWaitingVideoSelection()
    {
        return $this->callWaitingVideoSelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callWaitingVideoSelection;
    }

    /**
     * Setter for callWaitingVideoSelection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection $callWaitingVideoSelection
     * @return $this
     */
    public function setCallWaitingVideoSelection(\CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection $callWaitingVideoSelection)
    {
        $this->callWaitingVideoSelection = $callWaitingVideoSelection;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallWaitingVideoSelection()
    {
        $this->callWaitingVideoSelection = null;
        return $this;
    }

    /**
     * Getter for callWaitingVideoFile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResource
     */
    public function getCallWaitingVideoFile()
    {
        return $this->callWaitingVideoFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callWaitingVideoFile;
    }

    /**
     * Setter for callWaitingVideoFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResource $callWaitingVideoFile
     * @return $this
     */
    public function setCallWaitingVideoFile(\CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResource $callWaitingVideoFile)
    {
        $this->callWaitingVideoFile = $callWaitingVideoFile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallWaitingVideoFile()
    {
        $this->callWaitingVideoFile = null;
        return $this;
    }


}

