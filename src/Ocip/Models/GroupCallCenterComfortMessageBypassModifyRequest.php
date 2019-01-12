<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterComfortMessageBypassModifyRequest
 *
 * Modify a call center's comfort message bypass settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:12364","type":"sequence"}]
 */
class GroupCallCenterComfortMessageBypassModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:12364
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName isActive
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:12364
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName callWaitingAgeThresholdSeconds
     * @Type int
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:12364
     * @var int|null
     */
    private $callWaitingAgeThresholdSeconds = null;

    /**
     * @ElementName playAnnouncementAfterRinging
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:12364
     * @var bool|null
     */
    private $playAnnouncementAfterRinging = null;

    /**
     * @ElementName ringTimeBeforePlayingAnnouncementSeconds
     * @Type int
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:12364
     * @var int|null
     */
    private $ringTimeBeforePlayingAnnouncementSeconds = null;

    /**
     * @ElementName audioMessageSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:12364
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    private $audioMessageSelection = null;

    /**
     * @ElementName audioFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:12364
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource|null
     */
    private $audioFile = null;

    /**
     * @ElementName videoMessageSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:12364
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    private $videoMessageSelection = null;

    /**
     * @ElementName videoFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:12364
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource|null
     */
    private $videoFile = null;

    /**
     * Getter for serviceUserId
     *
     * @return string
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @param string $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceUserId()
    {
        $this->serviceUserId = null;
        return $this;
    }

    /**
     * Getter for isActive
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->isActive instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @param bool $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsActive()
    {
        $this->isActive = null;
        return $this;
    }

    /**
     * Getter for callWaitingAgeThresholdSeconds
     *
     * @return int
     */
    public function getCallWaitingAgeThresholdSeconds()
    {
        return $this->callWaitingAgeThresholdSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callWaitingAgeThresholdSeconds;
    }

    /**
     * Setter for callWaitingAgeThresholdSeconds
     *
     * @param int $callWaitingAgeThresholdSeconds
     * @return $this
     */
    public function setCallWaitingAgeThresholdSeconds($callWaitingAgeThresholdSeconds)
    {
        $this->callWaitingAgeThresholdSeconds = $callWaitingAgeThresholdSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallWaitingAgeThresholdSeconds()
    {
        $this->callWaitingAgeThresholdSeconds = null;
        return $this;
    }

    /**
     * Getter for playAnnouncementAfterRinging
     *
     * @return bool
     */
    public function getPlayAnnouncementAfterRinging()
    {
        return $this->playAnnouncementAfterRinging instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->playAnnouncementAfterRinging;
    }

    /**
     * Setter for playAnnouncementAfterRinging
     *
     * @param bool $playAnnouncementAfterRinging
     * @return $this
     */
    public function setPlayAnnouncementAfterRinging($playAnnouncementAfterRinging)
    {
        $this->playAnnouncementAfterRinging = $playAnnouncementAfterRinging;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPlayAnnouncementAfterRinging()
    {
        $this->playAnnouncementAfterRinging = null;
        return $this;
    }

    /**
     * Getter for ringTimeBeforePlayingAnnouncementSeconds
     *
     * @return int
     */
    public function getRingTimeBeforePlayingAnnouncementSeconds()
    {
        return $this->ringTimeBeforePlayingAnnouncementSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->ringTimeBeforePlayingAnnouncementSeconds;
    }

    /**
     * Setter for ringTimeBeforePlayingAnnouncementSeconds
     *
     * @param int $ringTimeBeforePlayingAnnouncementSeconds
     * @return $this
     */
    public function setRingTimeBeforePlayingAnnouncementSeconds($ringTimeBeforePlayingAnnouncementSeconds)
    {
        $this->ringTimeBeforePlayingAnnouncementSeconds = $ringTimeBeforePlayingAnnouncementSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRingTimeBeforePlayingAnnouncementSeconds()
    {
        $this->ringTimeBeforePlayingAnnouncementSeconds = null;
        return $this;
    }

    /**
     * Getter for audioMessageSelection
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     */
    public function getAudioMessageSelection()
    {
        return $this->audioMessageSelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->audioMessageSelection;
    }

    /**
     * Setter for audioMessageSelection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection $audioMessageSelection
     * @return $this
     */
    public function setAudioMessageSelection(\CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection $audioMessageSelection)
    {
        $this->audioMessageSelection = $audioMessageSelection;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAudioMessageSelection()
    {
        $this->audioMessageSelection = null;
        return $this;
    }

    /**
     * Getter for audioFile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource
     */
    public function getAudioFile()
    {
        return $this->audioFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->audioFile;
    }

    /**
     * Setter for audioFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource $audioFile
     * @return $this
     */
    public function setAudioFile(\CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource $audioFile)
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
     * Getter for videoMessageSelection
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     */
    public function getVideoMessageSelection()
    {
        return $this->videoMessageSelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->videoMessageSelection;
    }

    /**
     * Setter for videoMessageSelection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection $videoMessageSelection
     * @return $this
     */
    public function setVideoMessageSelection(\CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection $videoMessageSelection)
    {
        $this->videoMessageSelection = $videoMessageSelection;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVideoMessageSelection()
    {
        $this->videoMessageSelection = null;
        return $this;
    }

    /**
     * Getter for videoFile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource
     */
    public function getVideoFile()
    {
        return $this->videoFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->videoFile;
    }

    /**
     * Setter for videoFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource $videoFile
     * @return $this
     */
    public function setVideoFile(\CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource $videoFile)
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


}

