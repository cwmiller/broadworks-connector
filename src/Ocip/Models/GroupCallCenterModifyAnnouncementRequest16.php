<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterModifyAnnouncementRequest16
 *
 * Modify a call center's announcement settings.
 *                 The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:12981","type":"sequence"}]
 */
class GroupCallCenterModifyAnnouncementRequest16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:12981
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName playEntranceMessage
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:12981
     * @var bool|null
     */
    private $playEntranceMessage = null;

    /**
     * @ElementName mandatoryEntranceMessage
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:12981
     * @var bool|null
     */
    private $mandatoryEntranceMessage = null;

    /**
     * @ElementName entranceAudioMessageSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:12981
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    private $entranceAudioMessageSelection = null;

    /**
     * @ElementName entranceMessageAudioFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:12981
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource|null
     */
    private $entranceMessageAudioFile = null;

    /**
     * @ElementName entranceVideoMessageSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:12981
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    private $entranceVideoMessageSelection = null;

    /**
     * @ElementName entranceMessageVideoFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:12981
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource|null
     */
    private $entranceMessageVideoFile = null;

    /**
     * @ElementName playPeriodicComfortMessage
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:12981
     * @var bool|null
     */
    private $playPeriodicComfortMessage = null;

    /**
     * @ElementName timeBetweenComfortMessagesSeconds
     * @Type int
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:12981
     * @var int|null
     */
    private $timeBetweenComfortMessagesSeconds = null;

    /**
     * @ElementName periodicComfortAudioMessageSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:12981
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    private $periodicComfortAudioMessageSelection = null;

    /**
     * @ElementName periodicComfortMessageAudioFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:12981
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource|null
     */
    private $periodicComfortMessageAudioFile = null;

    /**
     * @ElementName periodicComfortVideoMessageSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:12981
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    private $periodicComfortVideoMessageSelection = null;

    /**
     * @ElementName periodicComfortMessageVideoFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:12981
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource|null
     */
    private $periodicComfortMessageVideoFile = null;

    /**
     * @ElementName enableMediaOnHoldForQueuedCalls
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:12981
     * @var bool|null
     */
    private $enableMediaOnHoldForQueuedCalls = null;

    /**
     * @ElementName mediaOnHoldSource
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceModify16
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:12981
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceModify16|null
     */
    private $mediaOnHoldSource = null;

    /**
     * @ElementName mediaOnHoldUseAlternateSourceForInternalCalls
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:12981
     * @var bool|null
     */
    private $mediaOnHoldUseAlternateSourceForInternalCalls = null;

    /**
     * @ElementName mediaOnHoldInternalSource
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceModify16
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:12981
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceModify16|null
     */
    private $mediaOnHoldInternalSource = null;

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
     * Getter for entranceMessageAudioFile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource
     */
    public function getEntranceMessageAudioFile()
    {
        return $this->entranceMessageAudioFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->entranceMessageAudioFile;
    }

    /**
     * Setter for entranceMessageAudioFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource $entranceMessageAudioFile
     * @return $this
     */
    public function setEntranceMessageAudioFile(\CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource $entranceMessageAudioFile)
    {
        $this->entranceMessageAudioFile = $entranceMessageAudioFile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEntranceMessageAudioFile()
    {
        $this->entranceMessageAudioFile = null;
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
     * Getter for entranceMessageVideoFile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource
     */
    public function getEntranceMessageVideoFile()
    {
        return $this->entranceMessageVideoFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->entranceMessageVideoFile;
    }

    /**
     * Setter for entranceMessageVideoFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource $entranceMessageVideoFile
     * @return $this
     */
    public function setEntranceMessageVideoFile(\CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource $entranceMessageVideoFile)
    {
        $this->entranceMessageVideoFile = $entranceMessageVideoFile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEntranceMessageVideoFile()
    {
        $this->entranceMessageVideoFile = null;
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
     * Getter for periodicComfortMessageAudioFile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource
     */
    public function getPeriodicComfortMessageAudioFile()
    {
        return $this->periodicComfortMessageAudioFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->periodicComfortMessageAudioFile;
    }

    /**
     * Setter for periodicComfortMessageAudioFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource $periodicComfortMessageAudioFile
     * @return $this
     */
    public function setPeriodicComfortMessageAudioFile(\CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource $periodicComfortMessageAudioFile)
    {
        $this->periodicComfortMessageAudioFile = $periodicComfortMessageAudioFile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPeriodicComfortMessageAudioFile()
    {
        $this->periodicComfortMessageAudioFile = null;
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
     * Getter for periodicComfortMessageVideoFile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource
     */
    public function getPeriodicComfortMessageVideoFile()
    {
        return $this->periodicComfortMessageVideoFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->periodicComfortMessageVideoFile;
    }

    /**
     * Setter for periodicComfortMessageVideoFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource $periodicComfortMessageVideoFile
     * @return $this
     */
    public function setPeriodicComfortMessageVideoFile(\CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource $periodicComfortMessageVideoFile)
    {
        $this->periodicComfortMessageVideoFile = $periodicComfortMessageVideoFile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPeriodicComfortMessageVideoFile()
    {
        $this->periodicComfortMessageVideoFile = null;
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceModify16
     */
    public function getMediaOnHoldSource()
    {
        return $this->mediaOnHoldSource instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mediaOnHoldSource;
    }

    /**
     * Setter for mediaOnHoldSource
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceModify16 $mediaOnHoldSource
     * @return $this
     */
    public function setMediaOnHoldSource(\CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceModify16 $mediaOnHoldSource)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceModify16
     */
    public function getMediaOnHoldInternalSource()
    {
        return $this->mediaOnHoldInternalSource instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mediaOnHoldInternalSource;
    }

    /**
     * Setter for mediaOnHoldInternalSource
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceModify16 $mediaOnHoldInternalSource
     * @return $this
     */
    public function setMediaOnHoldInternalSource(\CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceModify16 $mediaOnHoldInternalSource)
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


}

