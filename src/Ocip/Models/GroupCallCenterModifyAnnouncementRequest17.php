<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterModifyAnnouncementRequest17
 *
 * Modify a call center's announcement settings.
 *         The response is either a SuccessResponse or an
 *         ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:1658","type":"sequence"}]
 */
class GroupCallCenterModifyAnnouncementRequest17 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group de4d76f01f337fe4694212ec9f771753:1658
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $serviceUserId = null;

    /**
     * @ElementName playEntranceMessage
     * @Type bool
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:1658
     * @var bool|null
     */
    protected $playEntranceMessage = null;

    /**
     * @ElementName mandatoryEntranceMessage
     * @Type bool
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:1658
     * @var bool|null
     */
    protected $mandatoryEntranceMessage = null;

    /**
     * @ElementName entranceAudioMessageSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:1658
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    protected $entranceAudioMessageSelection = null;

    /**
     * @ElementName entranceMessageAudioUrlList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:1658
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify|null
     */
    protected $entranceMessageAudioUrlList = null;

    /**
     * @ElementName entranceMessageAudioFileList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:1658
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify|null
     */
    protected $entranceMessageAudioFileList = null;

    /**
     * @ElementName entranceVideoMessageSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:1658
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    protected $entranceVideoMessageSelection = null;

    /**
     * @ElementName entranceMessageVideoUrlList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:1658
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify|null
     */
    protected $entranceMessageVideoUrlList = null;

    /**
     * @ElementName entranceMessageVideoFileList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:1658
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify|null
     */
    protected $entranceMessageVideoFileList = null;

    /**
     * @ElementName playPeriodicComfortMessage
     * @Type bool
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:1658
     * @var bool|null
     */
    protected $playPeriodicComfortMessage = null;

    /**
     * @ElementName timeBetweenComfortMessagesSeconds
     * @Type int
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:1658
     * @MinInclusive 10
     * @MaxInclusive 600
     * @var int|null
     */
    protected $timeBetweenComfortMessagesSeconds = null;

    /**
     * @ElementName periodicComfortAudioMessageSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:1658
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    protected $periodicComfortAudioMessageSelection = null;

    /**
     * @ElementName periodicComfortMessageAudioUrlList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:1658
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify|null
     */
    protected $periodicComfortMessageAudioUrlList = null;

    /**
     * @ElementName periodicComfortMessageAudioFileList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:1658
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify|null
     */
    protected $periodicComfortMessageAudioFileList = null;

    /**
     * @ElementName periodicComfortVideoMessageSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:1658
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    protected $periodicComfortVideoMessageSelection = null;

    /**
     * @ElementName periodicComfortMessageVideoUrlList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:1658
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify|null
     */
    protected $periodicComfortMessageVideoUrlList = null;

    /**
     * @ElementName periodicComfortMessageVideoFileList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:1658
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify|null
     */
    protected $periodicComfortMessageVideoFileList = null;

    /**
     * @ElementName enableMediaOnHoldForQueuedCalls
     * @Type bool
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:1658
     * @var bool|null
     */
    protected $enableMediaOnHoldForQueuedCalls = null;

    /**
     * @ElementName mediaOnHoldSource
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceModify17
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:1658
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceModify17|null
     */
    protected $mediaOnHoldSource = null;

    /**
     * @ElementName mediaOnHoldUseAlternateSourceForInternalCalls
     * @Type bool
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:1658
     * @var bool|null
     */
    protected $mediaOnHoldUseAlternateSourceForInternalCalls = null;

    /**
     * @ElementName mediaOnHoldInternalSource
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceModify17
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:1658
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceModify17|null
     */
    protected $mediaOnHoldInternalSource = null;

    /**
     * @ElementName playWhisperMessage
     * @Type bool
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:1658
     * @var bool|null
     */
    protected $playWhisperMessage = null;

    /**
     * @ElementName whisperAudioMessageSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:1658
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    protected $whisperAudioMessageSelection = null;

    /**
     * @ElementName whisperMessageAudioUrlList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:1658
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify|null
     */
    protected $whisperMessageAudioUrlList = null;

    /**
     * @ElementName whisperMessageAudioFileList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:1658
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify|null
     */
    protected $whisperMessageAudioFileList = null;

    /**
     * @ElementName whisperVideoMessageSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:1658
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    protected $whisperVideoMessageSelection = null;

    /**
     * @ElementName whisperMessageVideoUrlList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:1658
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify|null
     */
    protected $whisperMessageVideoUrlList = null;

    /**
     * @ElementName whisperMessageVideoFileList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:1658
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify|null
     */
    protected $whisperMessageVideoFileList = null;

    /**
     * @ElementName estimatedWaitMessageOptionsModify
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EstimatedWaitMessageOptionsModify
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:1658
     * @var \CWM\BroadWorksConnector\Ocip\Models\EstimatedWaitMessageOptionsModify|null
     */
    protected $estimatedWaitMessageOptionsModify = null;

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
     * Getter for playEntranceMessage
     *
     * @return bool
     */
    public function getPlayEntranceMessage()
    {
        return $this->playEntranceMessage instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->playEntranceMessage;
    }

    /**
     * Setter for playEntranceMessage
     *
     * @param bool $playEntranceMessage
     * @return $this
     */
    public function setPlayEntranceMessage($playEntranceMessage)
    {
        $this->playEntranceMessage = $playEntranceMessage;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPlayEntranceMessage()
    {
        $this->playEntranceMessage = null;
        return $this;
    }

    /**
     * Getter for mandatoryEntranceMessage
     *
     * @return bool
     */
    public function getMandatoryEntranceMessage()
    {
        return $this->mandatoryEntranceMessage instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mandatoryEntranceMessage;
    }

    /**
     * Setter for mandatoryEntranceMessage
     *
     * @param bool $mandatoryEntranceMessage
     * @return $this
     */
    public function setMandatoryEntranceMessage($mandatoryEntranceMessage)
    {
        $this->mandatoryEntranceMessage = $mandatoryEntranceMessage;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMandatoryEntranceMessage()
    {
        $this->mandatoryEntranceMessage = null;
        return $this;
    }

    /**
     * Getter for entranceAudioMessageSelection
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     */
    public function getEntranceAudioMessageSelection()
    {
        return $this->entranceAudioMessageSelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->entranceAudioMessageSelection;
    }

    /**
     * Setter for entranceAudioMessageSelection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection $entranceAudioMessageSelection
     * @return $this
     */
    public function setEntranceAudioMessageSelection(\CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection $entranceAudioMessageSelection)
    {
        $this->entranceAudioMessageSelection = $entranceAudioMessageSelection;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEntranceAudioMessageSelection()
    {
        $this->entranceAudioMessageSelection = null;
        return $this;
    }

    /**
     * Getter for entranceMessageAudioUrlList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify
     */
    public function getEntranceMessageAudioUrlList()
    {
        return $this->entranceMessageAudioUrlList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->entranceMessageAudioUrlList;
    }

    /**
     * Setter for entranceMessageAudioUrlList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify $entranceMessageAudioUrlList
     * @return $this
     */
    public function setEntranceMessageAudioUrlList(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify $entranceMessageAudioUrlList)
    {
        $this->entranceMessageAudioUrlList = $entranceMessageAudioUrlList;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEntranceMessageAudioUrlList()
    {
        $this->entranceMessageAudioUrlList = null;
        return $this;
    }

    /**
     * Getter for entranceMessageAudioFileList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify
     */
    public function getEntranceMessageAudioFileList()
    {
        return $this->entranceMessageAudioFileList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->entranceMessageAudioFileList;
    }

    /**
     * Setter for entranceMessageAudioFileList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify $entranceMessageAudioFileList
     * @return $this
     */
    public function setEntranceMessageAudioFileList(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify $entranceMessageAudioFileList)
    {
        $this->entranceMessageAudioFileList = $entranceMessageAudioFileList;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEntranceMessageAudioFileList()
    {
        $this->entranceMessageAudioFileList = null;
        return $this;
    }

    /**
     * Getter for entranceVideoMessageSelection
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     */
    public function getEntranceVideoMessageSelection()
    {
        return $this->entranceVideoMessageSelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->entranceVideoMessageSelection;
    }

    /**
     * Setter for entranceVideoMessageSelection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection $entranceVideoMessageSelection
     * @return $this
     */
    public function setEntranceVideoMessageSelection(\CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection $entranceVideoMessageSelection)
    {
        $this->entranceVideoMessageSelection = $entranceVideoMessageSelection;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEntranceVideoMessageSelection()
    {
        $this->entranceVideoMessageSelection = null;
        return $this;
    }

    /**
     * Getter for entranceMessageVideoUrlList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify
     */
    public function getEntranceMessageVideoUrlList()
    {
        return $this->entranceMessageVideoUrlList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->entranceMessageVideoUrlList;
    }

    /**
     * Setter for entranceMessageVideoUrlList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify $entranceMessageVideoUrlList
     * @return $this
     */
    public function setEntranceMessageVideoUrlList(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify $entranceMessageVideoUrlList)
    {
        $this->entranceMessageVideoUrlList = $entranceMessageVideoUrlList;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEntranceMessageVideoUrlList()
    {
        $this->entranceMessageVideoUrlList = null;
        return $this;
    }

    /**
     * Getter for entranceMessageVideoFileList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify
     */
    public function getEntranceMessageVideoFileList()
    {
        return $this->entranceMessageVideoFileList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->entranceMessageVideoFileList;
    }

    /**
     * Setter for entranceMessageVideoFileList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify $entranceMessageVideoFileList
     * @return $this
     */
    public function setEntranceMessageVideoFileList(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify $entranceMessageVideoFileList)
    {
        $this->entranceMessageVideoFileList = $entranceMessageVideoFileList;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEntranceMessageVideoFileList()
    {
        $this->entranceMessageVideoFileList = null;
        return $this;
    }

    /**
     * Getter for playPeriodicComfortMessage
     *
     * @return bool
     */
    public function getPlayPeriodicComfortMessage()
    {
        return $this->playPeriodicComfortMessage instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->playPeriodicComfortMessage;
    }

    /**
     * Setter for playPeriodicComfortMessage
     *
     * @param bool $playPeriodicComfortMessage
     * @return $this
     */
    public function setPlayPeriodicComfortMessage($playPeriodicComfortMessage)
    {
        $this->playPeriodicComfortMessage = $playPeriodicComfortMessage;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPlayPeriodicComfortMessage()
    {
        $this->playPeriodicComfortMessage = null;
        return $this;
    }

    /**
     * Getter for timeBetweenComfortMessagesSeconds
     *
     * @return int
     */
    public function getTimeBetweenComfortMessagesSeconds()
    {
        return $this->timeBetweenComfortMessagesSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->timeBetweenComfortMessagesSeconds;
    }

    /**
     * Setter for timeBetweenComfortMessagesSeconds
     *
     * @param int $timeBetweenComfortMessagesSeconds
     * @return $this
     */
    public function setTimeBetweenComfortMessagesSeconds($timeBetweenComfortMessagesSeconds)
    {
        $this->timeBetweenComfortMessagesSeconds = $timeBetweenComfortMessagesSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTimeBetweenComfortMessagesSeconds()
    {
        $this->timeBetweenComfortMessagesSeconds = null;
        return $this;
    }

    /**
     * Getter for periodicComfortAudioMessageSelection
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     */
    public function getPeriodicComfortAudioMessageSelection()
    {
        return $this->periodicComfortAudioMessageSelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->periodicComfortAudioMessageSelection;
    }

    /**
     * Setter for periodicComfortAudioMessageSelection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection $periodicComfortAudioMessageSelection
     * @return $this
     */
    public function setPeriodicComfortAudioMessageSelection(\CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection $periodicComfortAudioMessageSelection)
    {
        $this->periodicComfortAudioMessageSelection = $periodicComfortAudioMessageSelection;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPeriodicComfortAudioMessageSelection()
    {
        $this->periodicComfortAudioMessageSelection = null;
        return $this;
    }

    /**
     * Getter for periodicComfortMessageAudioUrlList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify
     */
    public function getPeriodicComfortMessageAudioUrlList()
    {
        return $this->periodicComfortMessageAudioUrlList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->periodicComfortMessageAudioUrlList;
    }

    /**
     * Setter for periodicComfortMessageAudioUrlList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify $periodicComfortMessageAudioUrlList
     * @return $this
     */
    public function setPeriodicComfortMessageAudioUrlList(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify $periodicComfortMessageAudioUrlList)
    {
        $this->periodicComfortMessageAudioUrlList = $periodicComfortMessageAudioUrlList;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPeriodicComfortMessageAudioUrlList()
    {
        $this->periodicComfortMessageAudioUrlList = null;
        return $this;
    }

    /**
     * Getter for periodicComfortMessageAudioFileList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify
     */
    public function getPeriodicComfortMessageAudioFileList()
    {
        return $this->periodicComfortMessageAudioFileList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->periodicComfortMessageAudioFileList;
    }

    /**
     * Setter for periodicComfortMessageAudioFileList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify $periodicComfortMessageAudioFileList
     * @return $this
     */
    public function setPeriodicComfortMessageAudioFileList(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify $periodicComfortMessageAudioFileList)
    {
        $this->periodicComfortMessageAudioFileList = $periodicComfortMessageAudioFileList;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPeriodicComfortMessageAudioFileList()
    {
        $this->periodicComfortMessageAudioFileList = null;
        return $this;
    }

    /**
     * Getter for periodicComfortVideoMessageSelection
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     */
    public function getPeriodicComfortVideoMessageSelection()
    {
        return $this->periodicComfortVideoMessageSelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->periodicComfortVideoMessageSelection;
    }

    /**
     * Setter for periodicComfortVideoMessageSelection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection $periodicComfortVideoMessageSelection
     * @return $this
     */
    public function setPeriodicComfortVideoMessageSelection(\CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection $periodicComfortVideoMessageSelection)
    {
        $this->periodicComfortVideoMessageSelection = $periodicComfortVideoMessageSelection;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPeriodicComfortVideoMessageSelection()
    {
        $this->periodicComfortVideoMessageSelection = null;
        return $this;
    }

    /**
     * Getter for periodicComfortMessageVideoUrlList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify
     */
    public function getPeriodicComfortMessageVideoUrlList()
    {
        return $this->periodicComfortMessageVideoUrlList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->periodicComfortMessageVideoUrlList;
    }

    /**
     * Setter for periodicComfortMessageVideoUrlList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify $periodicComfortMessageVideoUrlList
     * @return $this
     */
    public function setPeriodicComfortMessageVideoUrlList(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify $periodicComfortMessageVideoUrlList)
    {
        $this->periodicComfortMessageVideoUrlList = $periodicComfortMessageVideoUrlList;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPeriodicComfortMessageVideoUrlList()
    {
        $this->periodicComfortMessageVideoUrlList = null;
        return $this;
    }

    /**
     * Getter for periodicComfortMessageVideoFileList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify
     */
    public function getPeriodicComfortMessageVideoFileList()
    {
        return $this->periodicComfortMessageVideoFileList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->periodicComfortMessageVideoFileList;
    }

    /**
     * Setter for periodicComfortMessageVideoFileList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify $periodicComfortMessageVideoFileList
     * @return $this
     */
    public function setPeriodicComfortMessageVideoFileList(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify $periodicComfortMessageVideoFileList)
    {
        $this->periodicComfortMessageVideoFileList = $periodicComfortMessageVideoFileList;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPeriodicComfortMessageVideoFileList()
    {
        $this->periodicComfortMessageVideoFileList = null;
        return $this;
    }

    /**
     * Getter for enableMediaOnHoldForQueuedCalls
     *
     * @return bool
     */
    public function getEnableMediaOnHoldForQueuedCalls()
    {
        return $this->enableMediaOnHoldForQueuedCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableMediaOnHoldForQueuedCalls;
    }

    /**
     * Setter for enableMediaOnHoldForQueuedCalls
     *
     * @param bool $enableMediaOnHoldForQueuedCalls
     * @return $this
     */
    public function setEnableMediaOnHoldForQueuedCalls($enableMediaOnHoldForQueuedCalls)
    {
        $this->enableMediaOnHoldForQueuedCalls = $enableMediaOnHoldForQueuedCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableMediaOnHoldForQueuedCalls()
    {
        $this->enableMediaOnHoldForQueuedCalls = null;
        return $this;
    }

    /**
     * Getter for mediaOnHoldSource
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceModify17
     */
    public function getMediaOnHoldSource()
    {
        return $this->mediaOnHoldSource instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mediaOnHoldSource;
    }

    /**
     * Setter for mediaOnHoldSource
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceModify17 $mediaOnHoldSource
     * @return $this
     */
    public function setMediaOnHoldSource(\CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceModify17 $mediaOnHoldSource)
    {
        $this->mediaOnHoldSource = $mediaOnHoldSource;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMediaOnHoldSource()
    {
        $this->mediaOnHoldSource = null;
        return $this;
    }

    /**
     * Getter for mediaOnHoldUseAlternateSourceForInternalCalls
     *
     * @return bool
     */
    public function getMediaOnHoldUseAlternateSourceForInternalCalls()
    {
        return $this->mediaOnHoldUseAlternateSourceForInternalCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mediaOnHoldUseAlternateSourceForInternalCalls;
    }

    /**
     * Setter for mediaOnHoldUseAlternateSourceForInternalCalls
     *
     * @param bool $mediaOnHoldUseAlternateSourceForInternalCalls
     * @return $this
     */
    public function setMediaOnHoldUseAlternateSourceForInternalCalls($mediaOnHoldUseAlternateSourceForInternalCalls)
    {
        $this->mediaOnHoldUseAlternateSourceForInternalCalls = $mediaOnHoldUseAlternateSourceForInternalCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMediaOnHoldUseAlternateSourceForInternalCalls()
    {
        $this->mediaOnHoldUseAlternateSourceForInternalCalls = null;
        return $this;
    }

    /**
     * Getter for mediaOnHoldInternalSource
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceModify17
     */
    public function getMediaOnHoldInternalSource()
    {
        return $this->mediaOnHoldInternalSource instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mediaOnHoldInternalSource;
    }

    /**
     * Setter for mediaOnHoldInternalSource
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceModify17 $mediaOnHoldInternalSource
     * @return $this
     */
    public function setMediaOnHoldInternalSource(\CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceModify17 $mediaOnHoldInternalSource)
    {
        $this->mediaOnHoldInternalSource = $mediaOnHoldInternalSource;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMediaOnHoldInternalSource()
    {
        $this->mediaOnHoldInternalSource = null;
        return $this;
    }

    /**
     * Getter for playWhisperMessage
     *
     * @return bool
     */
    public function getPlayWhisperMessage()
    {
        return $this->playWhisperMessage instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->playWhisperMessage;
    }

    /**
     * Setter for playWhisperMessage
     *
     * @param bool $playWhisperMessage
     * @return $this
     */
    public function setPlayWhisperMessage($playWhisperMessage)
    {
        $this->playWhisperMessage = $playWhisperMessage;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPlayWhisperMessage()
    {
        $this->playWhisperMessage = null;
        return $this;
    }

    /**
     * Getter for whisperAudioMessageSelection
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     */
    public function getWhisperAudioMessageSelection()
    {
        return $this->whisperAudioMessageSelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->whisperAudioMessageSelection;
    }

    /**
     * Setter for whisperAudioMessageSelection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection $whisperAudioMessageSelection
     * @return $this
     */
    public function setWhisperAudioMessageSelection(\CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection $whisperAudioMessageSelection)
    {
        $this->whisperAudioMessageSelection = $whisperAudioMessageSelection;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetWhisperAudioMessageSelection()
    {
        $this->whisperAudioMessageSelection = null;
        return $this;
    }

    /**
     * Getter for whisperMessageAudioUrlList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify
     */
    public function getWhisperMessageAudioUrlList()
    {
        return $this->whisperMessageAudioUrlList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->whisperMessageAudioUrlList;
    }

    /**
     * Setter for whisperMessageAudioUrlList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify $whisperMessageAudioUrlList
     * @return $this
     */
    public function setWhisperMessageAudioUrlList(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify $whisperMessageAudioUrlList)
    {
        $this->whisperMessageAudioUrlList = $whisperMessageAudioUrlList;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetWhisperMessageAudioUrlList()
    {
        $this->whisperMessageAudioUrlList = null;
        return $this;
    }

    /**
     * Getter for whisperMessageAudioFileList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify
     */
    public function getWhisperMessageAudioFileList()
    {
        return $this->whisperMessageAudioFileList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->whisperMessageAudioFileList;
    }

    /**
     * Setter for whisperMessageAudioFileList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify $whisperMessageAudioFileList
     * @return $this
     */
    public function setWhisperMessageAudioFileList(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify $whisperMessageAudioFileList)
    {
        $this->whisperMessageAudioFileList = $whisperMessageAudioFileList;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetWhisperMessageAudioFileList()
    {
        $this->whisperMessageAudioFileList = null;
        return $this;
    }

    /**
     * Getter for whisperVideoMessageSelection
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     */
    public function getWhisperVideoMessageSelection()
    {
        return $this->whisperVideoMessageSelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->whisperVideoMessageSelection;
    }

    /**
     * Setter for whisperVideoMessageSelection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection $whisperVideoMessageSelection
     * @return $this
     */
    public function setWhisperVideoMessageSelection(\CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection $whisperVideoMessageSelection)
    {
        $this->whisperVideoMessageSelection = $whisperVideoMessageSelection;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetWhisperVideoMessageSelection()
    {
        $this->whisperVideoMessageSelection = null;
        return $this;
    }

    /**
     * Getter for whisperMessageVideoUrlList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify
     */
    public function getWhisperMessageVideoUrlList()
    {
        return $this->whisperMessageVideoUrlList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->whisperMessageVideoUrlList;
    }

    /**
     * Setter for whisperMessageVideoUrlList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify $whisperMessageVideoUrlList
     * @return $this
     */
    public function setWhisperMessageVideoUrlList(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify $whisperMessageVideoUrlList)
    {
        $this->whisperMessageVideoUrlList = $whisperMessageVideoUrlList;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetWhisperMessageVideoUrlList()
    {
        $this->whisperMessageVideoUrlList = null;
        return $this;
    }

    /**
     * Getter for whisperMessageVideoFileList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify
     */
    public function getWhisperMessageVideoFileList()
    {
        return $this->whisperMessageVideoFileList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->whisperMessageVideoFileList;
    }

    /**
     * Setter for whisperMessageVideoFileList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify $whisperMessageVideoFileList
     * @return $this
     */
    public function setWhisperMessageVideoFileList(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify $whisperMessageVideoFileList)
    {
        $this->whisperMessageVideoFileList = $whisperMessageVideoFileList;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetWhisperMessageVideoFileList()
    {
        $this->whisperMessageVideoFileList = null;
        return $this;
    }

    /**
     * Getter for estimatedWaitMessageOptionsModify
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\EstimatedWaitMessageOptionsModify
     */
    public function getEstimatedWaitMessageOptionsModify()
    {
        return $this->estimatedWaitMessageOptionsModify instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->estimatedWaitMessageOptionsModify;
    }

    /**
     * Setter for estimatedWaitMessageOptionsModify
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EstimatedWaitMessageOptionsModify $estimatedWaitMessageOptionsModify
     * @return $this
     */
    public function setEstimatedWaitMessageOptionsModify(\CWM\BroadWorksConnector\Ocip\Models\EstimatedWaitMessageOptionsModify $estimatedWaitMessageOptionsModify)
    {
        $this->estimatedWaitMessageOptionsModify = $estimatedWaitMessageOptionsModify;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEstimatedWaitMessageOptionsModify()
    {
        $this->estimatedWaitMessageOptionsModify = null;
        return $this;
    }


}

