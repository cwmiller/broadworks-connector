<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterModifyDNISAnnouncementRequest20
 *
 * Modify a call center DNIS announcement settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupCallCenterModifyDNISAnnouncementRequest20 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName dnisKey
     * @var \CWM\BroadWorksConnector\Ocip\Models\DNISKey|null
     */
    private $dnisKey = null;

    /**
     * @ElementName playEntranceMessage
     * @var bool|null
     */
    private $playEntranceMessage = null;

    /**
     * @ElementName mandatoryEntranceMessage
     * @var bool|null
     */
    private $mandatoryEntranceMessage = null;

    /**
     * @ElementName entranceAudioMessageSelection
     * @var string|null
     */
    private $entranceAudioMessageSelection = null;

    /**
     * @ElementName entranceMessageAudioUrlList
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify|null
     */
    private $entranceMessageAudioUrlList = null;

    /**
     * @ElementName entranceMessageAudioFileList
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify20|null
     */
    private $entranceMessageAudioFileList = null;

    /**
     * @ElementName entranceVideoMessageSelection
     * @var string|null
     */
    private $entranceVideoMessageSelection = null;

    /**
     * @ElementName entranceMessageVideoUrlList
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify|null
     */
    private $entranceMessageVideoUrlList = null;

    /**
     * @ElementName entranceMessageVideoFileList
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify20|null
     */
    private $entranceMessageVideoFileList = null;

    /**
     * @ElementName playPeriodicComfortMessage
     * @var bool|null
     */
    private $playPeriodicComfortMessage = null;

    /**
     * @ElementName timeBetweenComfortMessagesSeconds
     * @var int|null
     */
    private $timeBetweenComfortMessagesSeconds = null;

    /**
     * @ElementName periodicComfortAudioMessageSelection
     * @var string|null
     */
    private $periodicComfortAudioMessageSelection = null;

    /**
     * @ElementName periodicComfortMessageAudioUrlList
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify|null
     */
    private $periodicComfortMessageAudioUrlList = null;

    /**
     * @ElementName periodicComfortMessageAudioFileList
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify20|null
     */
    private $periodicComfortMessageAudioFileList = null;

    /**
     * @ElementName periodicComfortVideoMessageSelection
     * @var string|null
     */
    private $periodicComfortVideoMessageSelection = null;

    /**
     * @ElementName periodicComfortMessageVideoUrlList
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify|null
     */
    private $periodicComfortMessageVideoUrlList = null;

    /**
     * @ElementName periodicComfortMessageVideoFileList
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify20|null
     */
    private $periodicComfortMessageVideoFileList = null;

    /**
     * @ElementName enableMediaOnHoldForQueuedCalls
     * @var bool|null
     */
    private $enableMediaOnHoldForQueuedCalls = null;

    /**
     * @ElementName mediaOnHoldSource
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceModify20|null
     */
    private $mediaOnHoldSource = null;

    /**
     * @ElementName playWhisperMessage
     * @var bool|null
     */
    private $playWhisperMessage = null;

    /**
     * @ElementName whisperAudioMessageSelection
     * @var string|null
     */
    private $whisperAudioMessageSelection = null;

    /**
     * @ElementName whisperMessageAudioUrlList
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify|null
     */
    private $whisperMessageAudioUrlList = null;

    /**
     * @ElementName whisperMessageAudioFileList
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify20|null
     */
    private $whisperMessageAudioFileList = null;

    /**
     * @ElementName whisperVideoMessageSelection
     * @var string|null
     */
    private $whisperVideoMessageSelection = null;

    /**
     * @ElementName whisperMessageVideoUrlList
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify|null
     */
    private $whisperMessageVideoUrlList = null;

    /**
     * @ElementName whisperMessageVideoFileList
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify20|null
     */
    private $whisperMessageVideoFileList = null;

    /**
     * @ElementName estimatedWaitMessageOptionsModify
     * @var \CWM\BroadWorksConnector\Ocip\Models\EstimatedWaitMessageOptionsModify|null
     */
    private $estimatedWaitMessageOptionsModify = null;

    /**
     * Getter for dnisKey
     *
     * @ElementName dnisKey
     * @return \CWM\BroadWorksConnector\Ocip\Models\DNISKey|null
     */
    public function getDnisKey()
    {
        return $this->dnisKey;
    }

    /**
     * Setter for dnisKey
     *
     * @ElementName dnisKey
     * @param \CWM\BroadWorksConnector\Ocip\Models\DNISKey|null $dnisKey
     * @return $this
     */
    public function setDnisKey($dnisKey)
    {
        $this->dnisKey = $dnisKey;
        return $this;
    }

    /**
     * Getter for playEntranceMessage
     *
     * @ElementName playEntranceMessage
     * @return bool|null
     */
    public function getPlayEntranceMessage()
    {
        return $this->playEntranceMessage;
    }

    /**
     * Setter for playEntranceMessage
     *
     * @ElementName playEntranceMessage
     * @param bool|null $playEntranceMessage
     * @return $this
     */
    public function setPlayEntranceMessage($playEntranceMessage)
    {
        $this->playEntranceMessage = $playEntranceMessage;
        return $this;
    }

    /**
     * Getter for mandatoryEntranceMessage
     *
     * @ElementName mandatoryEntranceMessage
     * @return bool|null
     */
    public function getMandatoryEntranceMessage()
    {
        return $this->mandatoryEntranceMessage;
    }

    /**
     * Setter for mandatoryEntranceMessage
     *
     * @ElementName mandatoryEntranceMessage
     * @param bool|null $mandatoryEntranceMessage
     * @return $this
     */
    public function setMandatoryEntranceMessage($mandatoryEntranceMessage)
    {
        $this->mandatoryEntranceMessage = $mandatoryEntranceMessage;
        return $this;
    }

    /**
     * Getter for entranceAudioMessageSelection
     *
     * @ElementName entranceAudioMessageSelection
     * @return string|null
     */
    public function getEntranceAudioMessageSelection()
    {
        return $this->entranceAudioMessageSelection;
    }

    /**
     * Setter for entranceAudioMessageSelection
     *
     * @ElementName entranceAudioMessageSelection
     * @param string|null $entranceAudioMessageSelection
     * @return $this
     */
    public function setEntranceAudioMessageSelection($entranceAudioMessageSelection)
    {
        $this->entranceAudioMessageSelection = $entranceAudioMessageSelection;
        return $this;
    }

    /**
     * Getter for entranceMessageAudioUrlList
     *
     * @ElementName entranceMessageAudioUrlList
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify|null
     */
    public function getEntranceMessageAudioUrlList()
    {
        return $this->entranceMessageAudioUrlList;
    }

    /**
     * Setter for entranceMessageAudioUrlList
     *
     * @ElementName entranceMessageAudioUrlList
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify|null $entranceMessageAudioUrlList
     * @return $this
     */
    public function setEntranceMessageAudioUrlList($entranceMessageAudioUrlList)
    {
        $this->entranceMessageAudioUrlList = $entranceMessageAudioUrlList;
        return $this;
    }

    /**
     * Getter for entranceMessageAudioFileList
     *
     * @ElementName entranceMessageAudioFileList
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify20|null
     */
    public function getEntranceMessageAudioFileList()
    {
        return $this->entranceMessageAudioFileList;
    }

    /**
     * Setter for entranceMessageAudioFileList
     *
     * @ElementName entranceMessageAudioFileList
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify20|null $entranceMessageAudioFileList
     * @return $this
     */
    public function setEntranceMessageAudioFileList($entranceMessageAudioFileList)
    {
        $this->entranceMessageAudioFileList = $entranceMessageAudioFileList;
        return $this;
    }

    /**
     * Getter for entranceVideoMessageSelection
     *
     * @ElementName entranceVideoMessageSelection
     * @return string|null
     */
    public function getEntranceVideoMessageSelection()
    {
        return $this->entranceVideoMessageSelection;
    }

    /**
     * Setter for entranceVideoMessageSelection
     *
     * @ElementName entranceVideoMessageSelection
     * @param string|null $entranceVideoMessageSelection
     * @return $this
     */
    public function setEntranceVideoMessageSelection($entranceVideoMessageSelection)
    {
        $this->entranceVideoMessageSelection = $entranceVideoMessageSelection;
        return $this;
    }

    /**
     * Getter for entranceMessageVideoUrlList
     *
     * @ElementName entranceMessageVideoUrlList
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify|null
     */
    public function getEntranceMessageVideoUrlList()
    {
        return $this->entranceMessageVideoUrlList;
    }

    /**
     * Setter for entranceMessageVideoUrlList
     *
     * @ElementName entranceMessageVideoUrlList
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify|null $entranceMessageVideoUrlList
     * @return $this
     */
    public function setEntranceMessageVideoUrlList($entranceMessageVideoUrlList)
    {
        $this->entranceMessageVideoUrlList = $entranceMessageVideoUrlList;
        return $this;
    }

    /**
     * Getter for entranceMessageVideoFileList
     *
     * @ElementName entranceMessageVideoFileList
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify20|null
     */
    public function getEntranceMessageVideoFileList()
    {
        return $this->entranceMessageVideoFileList;
    }

    /**
     * Setter for entranceMessageVideoFileList
     *
     * @ElementName entranceMessageVideoFileList
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify20|null $entranceMessageVideoFileList
     * @return $this
     */
    public function setEntranceMessageVideoFileList($entranceMessageVideoFileList)
    {
        $this->entranceMessageVideoFileList = $entranceMessageVideoFileList;
        return $this;
    }

    /**
     * Getter for playPeriodicComfortMessage
     *
     * @ElementName playPeriodicComfortMessage
     * @return bool|null
     */
    public function getPlayPeriodicComfortMessage()
    {
        return $this->playPeriodicComfortMessage;
    }

    /**
     * Setter for playPeriodicComfortMessage
     *
     * @ElementName playPeriodicComfortMessage
     * @param bool|null $playPeriodicComfortMessage
     * @return $this
     */
    public function setPlayPeriodicComfortMessage($playPeriodicComfortMessage)
    {
        $this->playPeriodicComfortMessage = $playPeriodicComfortMessage;
        return $this;
    }

    /**
     * Getter for timeBetweenComfortMessagesSeconds
     *
     * @ElementName timeBetweenComfortMessagesSeconds
     * @return int|null
     */
    public function getTimeBetweenComfortMessagesSeconds()
    {
        return $this->timeBetweenComfortMessagesSeconds;
    }

    /**
     * Setter for timeBetweenComfortMessagesSeconds
     *
     * @ElementName timeBetweenComfortMessagesSeconds
     * @param int|null $timeBetweenComfortMessagesSeconds
     * @return $this
     */
    public function setTimeBetweenComfortMessagesSeconds($timeBetweenComfortMessagesSeconds)
    {
        $this->timeBetweenComfortMessagesSeconds = $timeBetweenComfortMessagesSeconds;
        return $this;
    }

    /**
     * Getter for periodicComfortAudioMessageSelection
     *
     * @ElementName periodicComfortAudioMessageSelection
     * @return string|null
     */
    public function getPeriodicComfortAudioMessageSelection()
    {
        return $this->periodicComfortAudioMessageSelection;
    }

    /**
     * Setter for periodicComfortAudioMessageSelection
     *
     * @ElementName periodicComfortAudioMessageSelection
     * @param string|null $periodicComfortAudioMessageSelection
     * @return $this
     */
    public function setPeriodicComfortAudioMessageSelection($periodicComfortAudioMessageSelection)
    {
        $this->periodicComfortAudioMessageSelection = $periodicComfortAudioMessageSelection;
        return $this;
    }

    /**
     * Getter for periodicComfortMessageAudioUrlList
     *
     * @ElementName periodicComfortMessageAudioUrlList
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify|null
     */
    public function getPeriodicComfortMessageAudioUrlList()
    {
        return $this->periodicComfortMessageAudioUrlList;
    }

    /**
     * Setter for periodicComfortMessageAudioUrlList
     *
     * @ElementName periodicComfortMessageAudioUrlList
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify|null $periodicComfortMessageAudioUrlList
     * @return $this
     */
    public function setPeriodicComfortMessageAudioUrlList($periodicComfortMessageAudioUrlList)
    {
        $this->periodicComfortMessageAudioUrlList = $periodicComfortMessageAudioUrlList;
        return $this;
    }

    /**
     * Getter for periodicComfortMessageAudioFileList
     *
     * @ElementName periodicComfortMessageAudioFileList
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify20|null
     */
    public function getPeriodicComfortMessageAudioFileList()
    {
        return $this->periodicComfortMessageAudioFileList;
    }

    /**
     * Setter for periodicComfortMessageAudioFileList
     *
     * @ElementName periodicComfortMessageAudioFileList
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify20|null $periodicComfortMessageAudioFileList
     * @return $this
     */
    public function setPeriodicComfortMessageAudioFileList($periodicComfortMessageAudioFileList)
    {
        $this->periodicComfortMessageAudioFileList = $periodicComfortMessageAudioFileList;
        return $this;
    }

    /**
     * Getter for periodicComfortVideoMessageSelection
     *
     * @ElementName periodicComfortVideoMessageSelection
     * @return string|null
     */
    public function getPeriodicComfortVideoMessageSelection()
    {
        return $this->periodicComfortVideoMessageSelection;
    }

    /**
     * Setter for periodicComfortVideoMessageSelection
     *
     * @ElementName periodicComfortVideoMessageSelection
     * @param string|null $periodicComfortVideoMessageSelection
     * @return $this
     */
    public function setPeriodicComfortVideoMessageSelection($periodicComfortVideoMessageSelection)
    {
        $this->periodicComfortVideoMessageSelection = $periodicComfortVideoMessageSelection;
        return $this;
    }

    /**
     * Getter for periodicComfortMessageVideoUrlList
     *
     * @ElementName periodicComfortMessageVideoUrlList
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify|null
     */
    public function getPeriodicComfortMessageVideoUrlList()
    {
        return $this->periodicComfortMessageVideoUrlList;
    }

    /**
     * Setter for periodicComfortMessageVideoUrlList
     *
     * @ElementName periodicComfortMessageVideoUrlList
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify|null $periodicComfortMessageVideoUrlList
     * @return $this
     */
    public function setPeriodicComfortMessageVideoUrlList($periodicComfortMessageVideoUrlList)
    {
        $this->periodicComfortMessageVideoUrlList = $periodicComfortMessageVideoUrlList;
        return $this;
    }

    /**
     * Getter for periodicComfortMessageVideoFileList
     *
     * @ElementName periodicComfortMessageVideoFileList
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify20|null
     */
    public function getPeriodicComfortMessageVideoFileList()
    {
        return $this->periodicComfortMessageVideoFileList;
    }

    /**
     * Setter for periodicComfortMessageVideoFileList
     *
     * @ElementName periodicComfortMessageVideoFileList
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify20|null $periodicComfortMessageVideoFileList
     * @return $this
     */
    public function setPeriodicComfortMessageVideoFileList($periodicComfortMessageVideoFileList)
    {
        $this->periodicComfortMessageVideoFileList = $periodicComfortMessageVideoFileList;
        return $this;
    }

    /**
     * Getter for enableMediaOnHoldForQueuedCalls
     *
     * @ElementName enableMediaOnHoldForQueuedCalls
     * @return bool|null
     */
    public function getEnableMediaOnHoldForQueuedCalls()
    {
        return $this->enableMediaOnHoldForQueuedCalls;
    }

    /**
     * Setter for enableMediaOnHoldForQueuedCalls
     *
     * @ElementName enableMediaOnHoldForQueuedCalls
     * @param bool|null $enableMediaOnHoldForQueuedCalls
     * @return $this
     */
    public function setEnableMediaOnHoldForQueuedCalls($enableMediaOnHoldForQueuedCalls)
    {
        $this->enableMediaOnHoldForQueuedCalls = $enableMediaOnHoldForQueuedCalls;
        return $this;
    }

    /**
     * Getter for mediaOnHoldSource
     *
     * @ElementName mediaOnHoldSource
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceModify20|null
     */
    public function getMediaOnHoldSource()
    {
        return $this->mediaOnHoldSource;
    }

    /**
     * Setter for mediaOnHoldSource
     *
     * @ElementName mediaOnHoldSource
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceModify20|null $mediaOnHoldSource
     * @return $this
     */
    public function setMediaOnHoldSource($mediaOnHoldSource)
    {
        $this->mediaOnHoldSource = $mediaOnHoldSource;
        return $this;
    }

    /**
     * Getter for playWhisperMessage
     *
     * @ElementName playWhisperMessage
     * @return bool|null
     */
    public function getPlayWhisperMessage()
    {
        return $this->playWhisperMessage;
    }

    /**
     * Setter for playWhisperMessage
     *
     * @ElementName playWhisperMessage
     * @param bool|null $playWhisperMessage
     * @return $this
     */
    public function setPlayWhisperMessage($playWhisperMessage)
    {
        $this->playWhisperMessage = $playWhisperMessage;
        return $this;
    }

    /**
     * Getter for whisperAudioMessageSelection
     *
     * @ElementName whisperAudioMessageSelection
     * @return string|null
     */
    public function getWhisperAudioMessageSelection()
    {
        return $this->whisperAudioMessageSelection;
    }

    /**
     * Setter for whisperAudioMessageSelection
     *
     * @ElementName whisperAudioMessageSelection
     * @param string|null $whisperAudioMessageSelection
     * @return $this
     */
    public function setWhisperAudioMessageSelection($whisperAudioMessageSelection)
    {
        $this->whisperAudioMessageSelection = $whisperAudioMessageSelection;
        return $this;
    }

    /**
     * Getter for whisperMessageAudioUrlList
     *
     * @ElementName whisperMessageAudioUrlList
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify|null
     */
    public function getWhisperMessageAudioUrlList()
    {
        return $this->whisperMessageAudioUrlList;
    }

    /**
     * Setter for whisperMessageAudioUrlList
     *
     * @ElementName whisperMessageAudioUrlList
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify|null $whisperMessageAudioUrlList
     * @return $this
     */
    public function setWhisperMessageAudioUrlList($whisperMessageAudioUrlList)
    {
        $this->whisperMessageAudioUrlList = $whisperMessageAudioUrlList;
        return $this;
    }

    /**
     * Getter for whisperMessageAudioFileList
     *
     * @ElementName whisperMessageAudioFileList
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify20|null
     */
    public function getWhisperMessageAudioFileList()
    {
        return $this->whisperMessageAudioFileList;
    }

    /**
     * Setter for whisperMessageAudioFileList
     *
     * @ElementName whisperMessageAudioFileList
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify20|null $whisperMessageAudioFileList
     * @return $this
     */
    public function setWhisperMessageAudioFileList($whisperMessageAudioFileList)
    {
        $this->whisperMessageAudioFileList = $whisperMessageAudioFileList;
        return $this;
    }

    /**
     * Getter for whisperVideoMessageSelection
     *
     * @ElementName whisperVideoMessageSelection
     * @return string|null
     */
    public function getWhisperVideoMessageSelection()
    {
        return $this->whisperVideoMessageSelection;
    }

    /**
     * Setter for whisperVideoMessageSelection
     *
     * @ElementName whisperVideoMessageSelection
     * @param string|null $whisperVideoMessageSelection
     * @return $this
     */
    public function setWhisperVideoMessageSelection($whisperVideoMessageSelection)
    {
        $this->whisperVideoMessageSelection = $whisperVideoMessageSelection;
        return $this;
    }

    /**
     * Getter for whisperMessageVideoUrlList
     *
     * @ElementName whisperMessageVideoUrlList
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify|null
     */
    public function getWhisperMessageVideoUrlList()
    {
        return $this->whisperMessageVideoUrlList;
    }

    /**
     * Setter for whisperMessageVideoUrlList
     *
     * @ElementName whisperMessageVideoUrlList
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify|null $whisperMessageVideoUrlList
     * @return $this
     */
    public function setWhisperMessageVideoUrlList($whisperMessageVideoUrlList)
    {
        $this->whisperMessageVideoUrlList = $whisperMessageVideoUrlList;
        return $this;
    }

    /**
     * Getter for whisperMessageVideoFileList
     *
     * @ElementName whisperMessageVideoFileList
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify20|null
     */
    public function getWhisperMessageVideoFileList()
    {
        return $this->whisperMessageVideoFileList;
    }

    /**
     * Setter for whisperMessageVideoFileList
     *
     * @ElementName whisperMessageVideoFileList
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify20|null $whisperMessageVideoFileList
     * @return $this
     */
    public function setWhisperMessageVideoFileList($whisperMessageVideoFileList)
    {
        $this->whisperMessageVideoFileList = $whisperMessageVideoFileList;
        return $this;
    }

    /**
     * Getter for estimatedWaitMessageOptionsModify
     *
     * @ElementName estimatedWaitMessageOptionsModify
     * @return \CWM\BroadWorksConnector\Ocip\Models\EstimatedWaitMessageOptionsModify|null
     */
    public function getEstimatedWaitMessageOptionsModify()
    {
        return $this->estimatedWaitMessageOptionsModify;
    }

    /**
     * Setter for estimatedWaitMessageOptionsModify
     *
     * @ElementName estimatedWaitMessageOptionsModify
     * @param \CWM\BroadWorksConnector\Ocip\Models\EstimatedWaitMessageOptionsModify|null $estimatedWaitMessageOptionsModify
     * @return $this
     */
    public function setEstimatedWaitMessageOptionsModify($estimatedWaitMessageOptionsModify)
    {
        $this->estimatedWaitMessageOptionsModify = $estimatedWaitMessageOptionsModify;
        return $this;
    }


}

