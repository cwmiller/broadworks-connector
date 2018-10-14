<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterGetAnnouncementResponse16
 *
 * Response to the GroupCallCenterGetAnnouncementRequest16.
 *
 * @see GroupCallCenterGetAnnouncementRequest16
 */
class GroupCallCenterGetAnnouncementResponse16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

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
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    private $entranceAudioMessageSelection = null;

    /**
     * @ElementName entranceAudioFileUrl
     * @var string|null
     */
    private $entranceAudioFileUrl = null;

    /**
     * @ElementName entranceMessageAudioFileDescription
     * @var string|null
     */
    private $entranceMessageAudioFileDescription = null;

    /**
     * @ElementName entranceAudioFileMediaType
     * @var \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    private $entranceAudioFileMediaType = null;

    /**
     * @ElementName entranceVideoMessageSelection
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    private $entranceVideoMessageSelection = null;

    /**
     * @ElementName entranceVideoFileUrl
     * @var string|null
     */
    private $entranceVideoFileUrl = null;

    /**
     * @ElementName entranceMessageVideoFileDescription
     * @var string|null
     */
    private $entranceMessageVideoFileDescription = null;

    /**
     * @ElementName entranceVideoFileMediaType
     * @var \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    private $entranceVideoFileMediaType = null;

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
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    private $periodicComfortAudioMessageSelection = null;

    /**
     * @ElementName periodicComfortAudioFileUrl
     * @var string|null
     */
    private $periodicComfortAudioFileUrl = null;

    /**
     * @ElementName periodicComfortMessageAudioFileDescription
     * @var string|null
     */
    private $periodicComfortMessageAudioFileDescription = null;

    /**
     * @ElementName periodicComfortAudioFileMediaType
     * @var \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    private $periodicComfortAudioFileMediaType = null;

    /**
     * @ElementName periodicComfortVideoMessageSelection
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    private $periodicComfortVideoMessageSelection = null;

    /**
     * @ElementName periodicComfortVideoFileUrl
     * @var string|null
     */
    private $periodicComfortVideoFileUrl = null;

    /**
     * @ElementName periodicComfortMessageVideoFileDescription
     * @var string|null
     */
    private $periodicComfortMessageVideoFileDescription = null;

    /**
     * @ElementName periodicComfortVideoFileMediaType
     * @var \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    private $periodicComfortVideoFileMediaType = null;

    /**
     * @ElementName enableMediaOnHoldForQueuedCalls
     * @var bool|null
     */
    private $enableMediaOnHoldForQueuedCalls = null;

    /**
     * @ElementName mediaOnHoldSource
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceRead16|null
     */
    private $mediaOnHoldSource = null;

    /**
     * @ElementName mediaOnHoldUseAlternateSourceForInternalCalls
     * @var bool|null
     */
    private $mediaOnHoldUseAlternateSourceForInternalCalls = null;

    /**
     * @ElementName mediaOnHoldInternalSource
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceRead16|null
     */
    private $mediaOnHoldInternalSource = null;

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
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    public function getEntranceAudioMessageSelection()
    {
        return $this->entranceAudioMessageSelection;
    }

    /**
     * Setter for entranceAudioMessageSelection
     *
     * @ElementName entranceAudioMessageSelection
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null $entranceAudioMessageSelection
     * @return $this
     */
    public function setEntranceAudioMessageSelection(\CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection $entranceAudioMessageSelection)
    {
        $this->entranceAudioMessageSelection = $entranceAudioMessageSelection;
        return $this;
    }

    /**
     * Getter for entranceAudioFileUrl
     *
     * @ElementName entranceAudioFileUrl
     * @return string|null
     */
    public function getEntranceAudioFileUrl()
    {
        return $this->entranceAudioFileUrl;
    }

    /**
     * Setter for entranceAudioFileUrl
     *
     * @ElementName entranceAudioFileUrl
     * @param string|null $entranceAudioFileUrl
     * @return $this
     */
    public function setEntranceAudioFileUrl($entranceAudioFileUrl)
    {
        $this->entranceAudioFileUrl = $entranceAudioFileUrl;
        return $this;
    }

    /**
     * Getter for entranceMessageAudioFileDescription
     *
     * @ElementName entranceMessageAudioFileDescription
     * @return string|null
     */
    public function getEntranceMessageAudioFileDescription()
    {
        return $this->entranceMessageAudioFileDescription;
    }

    /**
     * Setter for entranceMessageAudioFileDescription
     *
     * @ElementName entranceMessageAudioFileDescription
     * @param string|null $entranceMessageAudioFileDescription
     * @return $this
     */
    public function setEntranceMessageAudioFileDescription($entranceMessageAudioFileDescription)
    {
        $this->entranceMessageAudioFileDescription = $entranceMessageAudioFileDescription;
        return $this;
    }

    /**
     * Getter for entranceAudioFileMediaType
     *
     * @ElementName entranceAudioFileMediaType
     * @return \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    public function getEntranceAudioFileMediaType()
    {
        return $this->entranceAudioFileMediaType;
    }

    /**
     * Setter for entranceAudioFileMediaType
     *
     * @ElementName entranceAudioFileMediaType
     * @param \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null $entranceAudioFileMediaType
     * @return $this
     */
    public function setEntranceAudioFileMediaType(\CWM\BroadWorksConnector\Ocip\Models\MediaFileType $entranceAudioFileMediaType)
    {
        $this->entranceAudioFileMediaType = $entranceAudioFileMediaType;
        return $this;
    }

    /**
     * Getter for entranceVideoMessageSelection
     *
     * @ElementName entranceVideoMessageSelection
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    public function getEntranceVideoMessageSelection()
    {
        return $this->entranceVideoMessageSelection;
    }

    /**
     * Setter for entranceVideoMessageSelection
     *
     * @ElementName entranceVideoMessageSelection
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null $entranceVideoMessageSelection
     * @return $this
     */
    public function setEntranceVideoMessageSelection(\CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection $entranceVideoMessageSelection)
    {
        $this->entranceVideoMessageSelection = $entranceVideoMessageSelection;
        return $this;
    }

    /**
     * Getter for entranceVideoFileUrl
     *
     * @ElementName entranceVideoFileUrl
     * @return string|null
     */
    public function getEntranceVideoFileUrl()
    {
        return $this->entranceVideoFileUrl;
    }

    /**
     * Setter for entranceVideoFileUrl
     *
     * @ElementName entranceVideoFileUrl
     * @param string|null $entranceVideoFileUrl
     * @return $this
     */
    public function setEntranceVideoFileUrl($entranceVideoFileUrl)
    {
        $this->entranceVideoFileUrl = $entranceVideoFileUrl;
        return $this;
    }

    /**
     * Getter for entranceMessageVideoFileDescription
     *
     * @ElementName entranceMessageVideoFileDescription
     * @return string|null
     */
    public function getEntranceMessageVideoFileDescription()
    {
        return $this->entranceMessageVideoFileDescription;
    }

    /**
     * Setter for entranceMessageVideoFileDescription
     *
     * @ElementName entranceMessageVideoFileDescription
     * @param string|null $entranceMessageVideoFileDescription
     * @return $this
     */
    public function setEntranceMessageVideoFileDescription($entranceMessageVideoFileDescription)
    {
        $this->entranceMessageVideoFileDescription = $entranceMessageVideoFileDescription;
        return $this;
    }

    /**
     * Getter for entranceVideoFileMediaType
     *
     * @ElementName entranceVideoFileMediaType
     * @return \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    public function getEntranceVideoFileMediaType()
    {
        return $this->entranceVideoFileMediaType;
    }

    /**
     * Setter for entranceVideoFileMediaType
     *
     * @ElementName entranceVideoFileMediaType
     * @param \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null $entranceVideoFileMediaType
     * @return $this
     */
    public function setEntranceVideoFileMediaType(\CWM\BroadWorksConnector\Ocip\Models\MediaFileType $entranceVideoFileMediaType)
    {
        $this->entranceVideoFileMediaType = $entranceVideoFileMediaType;
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    public function getPeriodicComfortAudioMessageSelection()
    {
        return $this->periodicComfortAudioMessageSelection;
    }

    /**
     * Setter for periodicComfortAudioMessageSelection
     *
     * @ElementName periodicComfortAudioMessageSelection
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null $periodicComfortAudioMessageSelection
     * @return $this
     */
    public function setPeriodicComfortAudioMessageSelection(\CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection $periodicComfortAudioMessageSelection)
    {
        $this->periodicComfortAudioMessageSelection = $periodicComfortAudioMessageSelection;
        return $this;
    }

    /**
     * Getter for periodicComfortAudioFileUrl
     *
     * @ElementName periodicComfortAudioFileUrl
     * @return string|null
     */
    public function getPeriodicComfortAudioFileUrl()
    {
        return $this->periodicComfortAudioFileUrl;
    }

    /**
     * Setter for periodicComfortAudioFileUrl
     *
     * @ElementName periodicComfortAudioFileUrl
     * @param string|null $periodicComfortAudioFileUrl
     * @return $this
     */
    public function setPeriodicComfortAudioFileUrl($periodicComfortAudioFileUrl)
    {
        $this->periodicComfortAudioFileUrl = $periodicComfortAudioFileUrl;
        return $this;
    }

    /**
     * Getter for periodicComfortMessageAudioFileDescription
     *
     * @ElementName periodicComfortMessageAudioFileDescription
     * @return string|null
     */
    public function getPeriodicComfortMessageAudioFileDescription()
    {
        return $this->periodicComfortMessageAudioFileDescription;
    }

    /**
     * Setter for periodicComfortMessageAudioFileDescription
     *
     * @ElementName periodicComfortMessageAudioFileDescription
     * @param string|null $periodicComfortMessageAudioFileDescription
     * @return $this
     */
    public function setPeriodicComfortMessageAudioFileDescription($periodicComfortMessageAudioFileDescription)
    {
        $this->periodicComfortMessageAudioFileDescription = $periodicComfortMessageAudioFileDescription;
        return $this;
    }

    /**
     * Getter for periodicComfortAudioFileMediaType
     *
     * @ElementName periodicComfortAudioFileMediaType
     * @return \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    public function getPeriodicComfortAudioFileMediaType()
    {
        return $this->periodicComfortAudioFileMediaType;
    }

    /**
     * Setter for periodicComfortAudioFileMediaType
     *
     * @ElementName periodicComfortAudioFileMediaType
     * @param \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null $periodicComfortAudioFileMediaType
     * @return $this
     */
    public function setPeriodicComfortAudioFileMediaType(\CWM\BroadWorksConnector\Ocip\Models\MediaFileType $periodicComfortAudioFileMediaType)
    {
        $this->periodicComfortAudioFileMediaType = $periodicComfortAudioFileMediaType;
        return $this;
    }

    /**
     * Getter for periodicComfortVideoMessageSelection
     *
     * @ElementName periodicComfortVideoMessageSelection
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    public function getPeriodicComfortVideoMessageSelection()
    {
        return $this->periodicComfortVideoMessageSelection;
    }

    /**
     * Setter for periodicComfortVideoMessageSelection
     *
     * @ElementName periodicComfortVideoMessageSelection
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null $periodicComfortVideoMessageSelection
     * @return $this
     */
    public function setPeriodicComfortVideoMessageSelection(\CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection $periodicComfortVideoMessageSelection)
    {
        $this->periodicComfortVideoMessageSelection = $periodicComfortVideoMessageSelection;
        return $this;
    }

    /**
     * Getter for periodicComfortVideoFileUrl
     *
     * @ElementName periodicComfortVideoFileUrl
     * @return string|null
     */
    public function getPeriodicComfortVideoFileUrl()
    {
        return $this->periodicComfortVideoFileUrl;
    }

    /**
     * Setter for periodicComfortVideoFileUrl
     *
     * @ElementName periodicComfortVideoFileUrl
     * @param string|null $periodicComfortVideoFileUrl
     * @return $this
     */
    public function setPeriodicComfortVideoFileUrl($periodicComfortVideoFileUrl)
    {
        $this->periodicComfortVideoFileUrl = $periodicComfortVideoFileUrl;
        return $this;
    }

    /**
     * Getter for periodicComfortMessageVideoFileDescription
     *
     * @ElementName periodicComfortMessageVideoFileDescription
     * @return string|null
     */
    public function getPeriodicComfortMessageVideoFileDescription()
    {
        return $this->periodicComfortMessageVideoFileDescription;
    }

    /**
     * Setter for periodicComfortMessageVideoFileDescription
     *
     * @ElementName periodicComfortMessageVideoFileDescription
     * @param string|null $periodicComfortMessageVideoFileDescription
     * @return $this
     */
    public function setPeriodicComfortMessageVideoFileDescription($periodicComfortMessageVideoFileDescription)
    {
        $this->periodicComfortMessageVideoFileDescription = $periodicComfortMessageVideoFileDescription;
        return $this;
    }

    /**
     * Getter for periodicComfortVideoFileMediaType
     *
     * @ElementName periodicComfortVideoFileMediaType
     * @return \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    public function getPeriodicComfortVideoFileMediaType()
    {
        return $this->periodicComfortVideoFileMediaType;
    }

    /**
     * Setter for periodicComfortVideoFileMediaType
     *
     * @ElementName periodicComfortVideoFileMediaType
     * @param \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null $periodicComfortVideoFileMediaType
     * @return $this
     */
    public function setPeriodicComfortVideoFileMediaType(\CWM\BroadWorksConnector\Ocip\Models\MediaFileType $periodicComfortVideoFileMediaType)
    {
        $this->periodicComfortVideoFileMediaType = $periodicComfortVideoFileMediaType;
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceRead16|null
     */
    public function getMediaOnHoldSource()
    {
        return $this->mediaOnHoldSource;
    }

    /**
     * Setter for mediaOnHoldSource
     *
     * @ElementName mediaOnHoldSource
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceRead16|null $mediaOnHoldSource
     * @return $this
     */
    public function setMediaOnHoldSource(\CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceRead16 $mediaOnHoldSource)
    {
        $this->mediaOnHoldSource = $mediaOnHoldSource;
        return $this;
    }

    /**
     * Getter for mediaOnHoldUseAlternateSourceForInternalCalls
     *
     * @ElementName mediaOnHoldUseAlternateSourceForInternalCalls
     * @return bool|null
     */
    public function getMediaOnHoldUseAlternateSourceForInternalCalls()
    {
        return $this->mediaOnHoldUseAlternateSourceForInternalCalls;
    }

    /**
     * Setter for mediaOnHoldUseAlternateSourceForInternalCalls
     *
     * @ElementName mediaOnHoldUseAlternateSourceForInternalCalls
     * @param bool|null $mediaOnHoldUseAlternateSourceForInternalCalls
     * @return $this
     */
    public function setMediaOnHoldUseAlternateSourceForInternalCalls($mediaOnHoldUseAlternateSourceForInternalCalls)
    {
        $this->mediaOnHoldUseAlternateSourceForInternalCalls = $mediaOnHoldUseAlternateSourceForInternalCalls;
        return $this;
    }

    /**
     * Getter for mediaOnHoldInternalSource
     *
     * @ElementName mediaOnHoldInternalSource
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceRead16|null
     */
    public function getMediaOnHoldInternalSource()
    {
        return $this->mediaOnHoldInternalSource;
    }

    /**
     * Setter for mediaOnHoldInternalSource
     *
     * @ElementName mediaOnHoldInternalSource
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceRead16|null $mediaOnHoldInternalSource
     * @return $this
     */
    public function setMediaOnHoldInternalSource(\CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceRead16 $mediaOnHoldInternalSource)
    {
        $this->mediaOnHoldInternalSource = $mediaOnHoldInternalSource;
        return $this;
    }


}

