<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterComfortMessageBypassGetResponse
 *
 * Response to the GroupCallCenterComfortMessageBypassGetRequest.
 *
 * @see GroupCallCenterComfortMessageBypassGetRequest
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:4709","type":"sequence"}]
 */
class GroupCallCenterComfortMessageBypassGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActive
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:4709
     * @var bool|null
     */
    protected $isActive = null;

    /**
     * @ElementName callWaitingAgeThresholdSeconds
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:4709
     * @MinInclusive 1
     * @MaxInclusive 120
     * @var int|null
     */
    protected $callWaitingAgeThresholdSeconds = null;

    /**
     * @ElementName playAnnouncementAfterRinging
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:4709
     * @var bool|null
     */
    protected $playAnnouncementAfterRinging = null;

    /**
     * @ElementName ringTimeBeforePlayingAnnouncementSeconds
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:4709
     * @MinInclusive 0
     * @MaxInclusive 120
     * @var int|null
     */
    protected $ringTimeBeforePlayingAnnouncementSeconds = null;

    /**
     * @ElementName audioMessageSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     * @Group ab0042aa512abc10edb3c55e4b416b0b:4709
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    protected $audioMessageSelection = null;

    /**
     * @ElementName audioFileUrl
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:4709
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $audioFileUrl = null;

    /**
     * @ElementName audioFileDescription
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:4709
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $audioFileDescription = null;

    /**
     * @ElementName audioMediaType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MediaFileType
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:4709
     * @var \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    protected $audioMediaType = null;

    /**
     * @ElementName videoMessageSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     * @Group ab0042aa512abc10edb3c55e4b416b0b:4709
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    protected $videoMessageSelection = null;

    /**
     * @ElementName videoFileUrl
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:4709
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $videoFileUrl = null;

    /**
     * @ElementName videoFileDescription
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:4709
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $videoFileDescription = null;

    /**
     * @ElementName videoMediaType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MediaFileType
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:4709
     * @var \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    protected $videoMediaType = null;

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
     * Getter for audioFileUrl
     *
     * @return string
     */
    public function getAudioFileUrl()
    {
        return $this->audioFileUrl instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->audioFileUrl;
    }

    /**
     * Setter for audioFileUrl
     *
     * @param string $audioFileUrl
     * @return $this
     */
    public function setAudioFileUrl($audioFileUrl)
    {
        $this->audioFileUrl = $audioFileUrl;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAudioFileUrl()
    {
        $this->audioFileUrl = null;
        return $this;
    }

    /**
     * Getter for audioFileDescription
     *
     * @return string
     */
    public function getAudioFileDescription()
    {
        return $this->audioFileDescription instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->audioFileDescription;
    }

    /**
     * Setter for audioFileDescription
     *
     * @param string $audioFileDescription
     * @return $this
     */
    public function setAudioFileDescription($audioFileDescription)
    {
        $this->audioFileDescription = $audioFileDescription;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAudioFileDescription()
    {
        $this->audioFileDescription = null;
        return $this;
    }

    /**
     * Getter for audioMediaType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MediaFileType
     */
    public function getAudioMediaType()
    {
        return $this->audioMediaType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->audioMediaType;
    }

    /**
     * Setter for audioMediaType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MediaFileType $audioMediaType
     * @return $this
     */
    public function setAudioMediaType(\CWM\BroadWorksConnector\Ocip\Models\MediaFileType $audioMediaType)
    {
        $this->audioMediaType = $audioMediaType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAudioMediaType()
    {
        $this->audioMediaType = null;
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
     * Getter for videoFileUrl
     *
     * @return string
     */
    public function getVideoFileUrl()
    {
        return $this->videoFileUrl instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->videoFileUrl;
    }

    /**
     * Setter for videoFileUrl
     *
     * @param string $videoFileUrl
     * @return $this
     */
    public function setVideoFileUrl($videoFileUrl)
    {
        $this->videoFileUrl = $videoFileUrl;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVideoFileUrl()
    {
        $this->videoFileUrl = null;
        return $this;
    }

    /**
     * Getter for videoFileDescription
     *
     * @return string
     */
    public function getVideoFileDescription()
    {
        return $this->videoFileDescription instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->videoFileDescription;
    }

    /**
     * Setter for videoFileDescription
     *
     * @param string $videoFileDescription
     * @return $this
     */
    public function setVideoFileDescription($videoFileDescription)
    {
        $this->videoFileDescription = $videoFileDescription;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVideoFileDescription()
    {
        $this->videoFileDescription = null;
        return $this;
    }

    /**
     * Getter for videoMediaType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MediaFileType
     */
    public function getVideoMediaType()
    {
        return $this->videoMediaType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->videoMediaType;
    }

    /**
     * Setter for videoMediaType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MediaFileType $videoMediaType
     * @return $this
     */
    public function setVideoMediaType(\CWM\BroadWorksConnector\Ocip\Models\MediaFileType $videoMediaType)
    {
        $this->videoMediaType = $videoMediaType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVideoMediaType()
    {
        $this->videoMediaType = null;
        return $this;
    }


}

