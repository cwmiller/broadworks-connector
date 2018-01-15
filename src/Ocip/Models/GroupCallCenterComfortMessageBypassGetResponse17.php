<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterComfortMessageBypassGetResponse17
 *
 * Response to the GroupCallCenterComfortMessageBypassGetRequest17.
 */
class GroupCallCenterComfortMessageBypassGetResponse17 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActive
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName callWaitingAgeThresholdSeconds
     * @var int|null
     */
    private $callWaitingAgeThresholdSeconds = null;

    /**
     * @ElementName playAnnouncementAfterRinging
     * @var bool|null
     */
    private $playAnnouncementAfterRinging = null;

    /**
     * @ElementName ringTimeBeforePlayingAnnouncementSeconds
     * @var int|null
     */
    private $ringTimeBeforePlayingAnnouncementSeconds = null;

    /**
     * @ElementName audioMessageSelection
     * @var string|null
     */
    private $audioMessageSelection = null;

    /**
     * @ElementName audioUrlList
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLList|null
     */
    private $audioUrlList = null;

    /**
     * @ElementName audioFileList
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementDescriptionList|null
     */
    private $audioFileList = null;

    /**
     * @ElementName audioMediaTypeList
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementMediaFileTypeList|null
     */
    private $audioMediaTypeList = null;

    /**
     * @ElementName videoMessageSelection
     * @var string|null
     */
    private $videoMessageSelection = null;

    /**
     * @ElementName videoUrlList
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLList|null
     */
    private $videoUrlList = null;

    /**
     * @ElementName videoFileList
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementDescriptionList|null
     */
    private $videoFileList = null;

    /**
     * @ElementName videoMediaTypeList
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementMediaFileTypeList|null
     */
    private $videoMediaTypeList = null;

    /**
     * Getter for isActive
     *
     * @ElementName isActive
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @ElementName isActive
     * @param bool|null $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * Getter for callWaitingAgeThresholdSeconds
     *
     * @ElementName callWaitingAgeThresholdSeconds
     * @return int|null
     */
    public function getCallWaitingAgeThresholdSeconds()
    {
        return $this->callWaitingAgeThresholdSeconds;
    }

    /**
     * Setter for callWaitingAgeThresholdSeconds
     *
     * @ElementName callWaitingAgeThresholdSeconds
     * @param int|null $callWaitingAgeThresholdSeconds
     * @return $this
     */
    public function setCallWaitingAgeThresholdSeconds($callWaitingAgeThresholdSeconds)
    {
        $this->callWaitingAgeThresholdSeconds = $callWaitingAgeThresholdSeconds;
        return $this;
    }

    /**
     * Getter for playAnnouncementAfterRinging
     *
     * @ElementName playAnnouncementAfterRinging
     * @return bool|null
     */
    public function getPlayAnnouncementAfterRinging()
    {
        return $this->playAnnouncementAfterRinging;
    }

    /**
     * Setter for playAnnouncementAfterRinging
     *
     * @ElementName playAnnouncementAfterRinging
     * @param bool|null $playAnnouncementAfterRinging
     * @return $this
     */
    public function setPlayAnnouncementAfterRinging($playAnnouncementAfterRinging)
    {
        $this->playAnnouncementAfterRinging = $playAnnouncementAfterRinging;
        return $this;
    }

    /**
     * Getter for ringTimeBeforePlayingAnnouncementSeconds
     *
     * @ElementName ringTimeBeforePlayingAnnouncementSeconds
     * @return int|null
     */
    public function getRingTimeBeforePlayingAnnouncementSeconds()
    {
        return $this->ringTimeBeforePlayingAnnouncementSeconds;
    }

    /**
     * Setter for ringTimeBeforePlayingAnnouncementSeconds
     *
     * @ElementName ringTimeBeforePlayingAnnouncementSeconds
     * @param int|null $ringTimeBeforePlayingAnnouncementSeconds
     * @return $this
     */
    public function setRingTimeBeforePlayingAnnouncementSeconds($ringTimeBeforePlayingAnnouncementSeconds)
    {
        $this->ringTimeBeforePlayingAnnouncementSeconds = $ringTimeBeforePlayingAnnouncementSeconds;
        return $this;
    }

    /**
     * Getter for audioMessageSelection
     *
     * @ElementName audioMessageSelection
     * @return string|null
     */
    public function getAudioMessageSelection()
    {
        return $this->audioMessageSelection;
    }

    /**
     * Setter for audioMessageSelection
     *
     * @ElementName audioMessageSelection
     * @param string|null $audioMessageSelection
     * @return $this
     */
    public function setAudioMessageSelection($audioMessageSelection)
    {
        $this->audioMessageSelection = $audioMessageSelection;
        return $this;
    }

    /**
     * Getter for audioUrlList
     *
     * @ElementName audioUrlList
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLList|null
     */
    public function getAudioUrlList()
    {
        return $this->audioUrlList;
    }

    /**
     * Setter for audioUrlList
     *
     * @ElementName audioUrlList
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLList|null $audioUrlList
     * @return $this
     */
    public function setAudioUrlList($audioUrlList)
    {
        $this->audioUrlList = $audioUrlList;
        return $this;
    }

    /**
     * Getter for audioFileList
     *
     * @ElementName audioFileList
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementDescriptionList|null
     */
    public function getAudioFileList()
    {
        return $this->audioFileList;
    }

    /**
     * Setter for audioFileList
     *
     * @ElementName audioFileList
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementDescriptionList|null $audioFileList
     * @return $this
     */
    public function setAudioFileList($audioFileList)
    {
        $this->audioFileList = $audioFileList;
        return $this;
    }

    /**
     * Getter for audioMediaTypeList
     *
     * @ElementName audioMediaTypeList
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementMediaFileTypeList|null
     */
    public function getAudioMediaTypeList()
    {
        return $this->audioMediaTypeList;
    }

    /**
     * Setter for audioMediaTypeList
     *
     * @ElementName audioMediaTypeList
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementMediaFileTypeList|null $audioMediaTypeList
     * @return $this
     */
    public function setAudioMediaTypeList($audioMediaTypeList)
    {
        $this->audioMediaTypeList = $audioMediaTypeList;
        return $this;
    }

    /**
     * Getter for videoMessageSelection
     *
     * @ElementName videoMessageSelection
     * @return string|null
     */
    public function getVideoMessageSelection()
    {
        return $this->videoMessageSelection;
    }

    /**
     * Setter for videoMessageSelection
     *
     * @ElementName videoMessageSelection
     * @param string|null $videoMessageSelection
     * @return $this
     */
    public function setVideoMessageSelection($videoMessageSelection)
    {
        $this->videoMessageSelection = $videoMessageSelection;
        return $this;
    }

    /**
     * Getter for videoUrlList
     *
     * @ElementName videoUrlList
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLList|null
     */
    public function getVideoUrlList()
    {
        return $this->videoUrlList;
    }

    /**
     * Setter for videoUrlList
     *
     * @ElementName videoUrlList
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLList|null $videoUrlList
     * @return $this
     */
    public function setVideoUrlList($videoUrlList)
    {
        $this->videoUrlList = $videoUrlList;
        return $this;
    }

    /**
     * Getter for videoFileList
     *
     * @ElementName videoFileList
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementDescriptionList|null
     */
    public function getVideoFileList()
    {
        return $this->videoFileList;
    }

    /**
     * Setter for videoFileList
     *
     * @ElementName videoFileList
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementDescriptionList|null $videoFileList
     * @return $this
     */
    public function setVideoFileList($videoFileList)
    {
        $this->videoFileList = $videoFileList;
        return $this;
    }

    /**
     * Getter for videoMediaTypeList
     *
     * @ElementName videoMediaTypeList
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementMediaFileTypeList|null
     */
    public function getVideoMediaTypeList()
    {
        return $this->videoMediaTypeList;
    }

    /**
     * Setter for videoMediaTypeList
     *
     * @ElementName videoMediaTypeList
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementMediaFileTypeList|null $videoMediaTypeList
     * @return $this
     */
    public function setVideoMediaTypeList($videoMediaTypeList)
    {
        $this->videoMediaTypeList = $videoMediaTypeList;
        return $this;
    }


}

