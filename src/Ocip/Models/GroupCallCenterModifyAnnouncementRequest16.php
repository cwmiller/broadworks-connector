<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterModifyAnnouncementRequest16
 *
 * Modify a call center's announcement settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class GroupCallCenterModifyAnnouncementRequest16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @var string|null
     */
    private $serviceUserId = null;

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
     * @ElementName entranceMessageAudioFile
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource|null
     */
    private $entranceMessageAudioFile = null;

    /**
     * @ElementName entranceVideoMessageSelection
     * @var string|null
     */
    private $entranceVideoMessageSelection = null;

    /**
     * @ElementName entranceMessageVideoFile
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource|null
     */
    private $entranceMessageVideoFile = null;

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
     * @ElementName periodicComfortMessageAudioFile
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource|null
     */
    private $periodicComfortMessageAudioFile = null;

    /**
     * @ElementName periodicComfortVideoMessageSelection
     * @var string|null
     */
    private $periodicComfortVideoMessageSelection = null;

    /**
     * @ElementName periodicComfortMessageVideoFile
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource|null
     */
    private $periodicComfortMessageVideoFile = null;

    /**
     * @ElementName enableMediaOnHoldForQueuedCalls
     * @var bool|null
     */
    private $enableMediaOnHoldForQueuedCalls = null;

    /**
     * @ElementName mediaOnHoldSource
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceModify16|null
     */
    private $mediaOnHoldSource = null;

    /**
     * @ElementName mediaOnHoldUseAlternateSourceForInternalCalls
     * @var bool|null
     */
    private $mediaOnHoldUseAlternateSourceForInternalCalls = null;

    /**
     * @ElementName mediaOnHoldInternalSource
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceModify16|null
     */
    private $mediaOnHoldInternalSource = null;

    /**
     * Getter for serviceUserId
     *
     * @ElementName serviceUserId
     * @return string|null
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @ElementName serviceUserId
     * @param string|null $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
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
     * Getter for entranceMessageAudioFile
     *
     * @ElementName entranceMessageAudioFile
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource|null
     */
    public function getEntranceMessageAudioFile()
    {
        return $this->entranceMessageAudioFile;
    }

    /**
     * Setter for entranceMessageAudioFile
     *
     * @ElementName entranceMessageAudioFile
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource|null $entranceMessageAudioFile
     * @return $this
     */
    public function setEntranceMessageAudioFile($entranceMessageAudioFile)
    {
        $this->entranceMessageAudioFile = $entranceMessageAudioFile;
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
     * Getter for entranceMessageVideoFile
     *
     * @ElementName entranceMessageVideoFile
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource|null
     */
    public function getEntranceMessageVideoFile()
    {
        return $this->entranceMessageVideoFile;
    }

    /**
     * Setter for entranceMessageVideoFile
     *
     * @ElementName entranceMessageVideoFile
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource|null $entranceMessageVideoFile
     * @return $this
     */
    public function setEntranceMessageVideoFile($entranceMessageVideoFile)
    {
        $this->entranceMessageVideoFile = $entranceMessageVideoFile;
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
     * Getter for periodicComfortMessageAudioFile
     *
     * @ElementName periodicComfortMessageAudioFile
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource|null
     */
    public function getPeriodicComfortMessageAudioFile()
    {
        return $this->periodicComfortMessageAudioFile;
    }

    /**
     * Setter for periodicComfortMessageAudioFile
     *
     * @ElementName periodicComfortMessageAudioFile
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource|null $periodicComfortMessageAudioFile
     * @return $this
     */
    public function setPeriodicComfortMessageAudioFile($periodicComfortMessageAudioFile)
    {
        $this->periodicComfortMessageAudioFile = $periodicComfortMessageAudioFile;
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
     * Getter for periodicComfortMessageVideoFile
     *
     * @ElementName periodicComfortMessageVideoFile
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource|null
     */
    public function getPeriodicComfortMessageVideoFile()
    {
        return $this->periodicComfortMessageVideoFile;
    }

    /**
     * Setter for periodicComfortMessageVideoFile
     *
     * @ElementName periodicComfortMessageVideoFile
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource|null $periodicComfortMessageVideoFile
     * @return $this
     */
    public function setPeriodicComfortMessageVideoFile($periodicComfortMessageVideoFile)
    {
        $this->periodicComfortMessageVideoFile = $periodicComfortMessageVideoFile;
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceModify16|null
     */
    public function getMediaOnHoldSource()
    {
        return $this->mediaOnHoldSource;
    }

    /**
     * Setter for mediaOnHoldSource
     *
     * @ElementName mediaOnHoldSource
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceModify16|null $mediaOnHoldSource
     * @return $this
     */
    public function setMediaOnHoldSource($mediaOnHoldSource)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceModify16|null
     */
    public function getMediaOnHoldInternalSource()
    {
        return $this->mediaOnHoldInternalSource;
    }

    /**
     * Setter for mediaOnHoldInternalSource
     *
     * @ElementName mediaOnHoldInternalSource
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceModify16|null $mediaOnHoldInternalSource
     * @return $this
     */
    public function setMediaOnHoldInternalSource($mediaOnHoldInternalSource)
    {
        $this->mediaOnHoldInternalSource = $mediaOnHoldInternalSource;
        return $this;
    }


}

