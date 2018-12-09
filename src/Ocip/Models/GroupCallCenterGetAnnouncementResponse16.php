<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterGetAnnouncementResponse16
 *
 * Response to the GroupCallCenterGetAnnouncementRequest16.
 *
 * @see GroupCallCenterGetAnnouncementRequest16
 * @Groups [{"id":"4f0fb68b4d4b3ac50a70eeb01a628dce:3784","type":"sequence"}]
 */
class GroupCallCenterGetAnnouncementResponse16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName playEntranceMessage
     * @Type bool
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:3784
     * @var bool|null
     */
    private $playEntranceMessage = null;

    /**
     * @ElementName mandatoryEntranceMessage
     * @Type bool
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:3784
     * @var bool|null
     */
    private $mandatoryEntranceMessage = null;

    /**
     * @ElementName entranceAudioMessageSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:3784
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    private $entranceAudioMessageSelection = null;

    /**
     * @ElementName entranceAudioFileUrl
     * @Type string
     * @Optional
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:3784
     * @var string|null
     */
    private $entranceAudioFileUrl = null;

    /**
     * @ElementName entranceMessageAudioFileDescription
     * @Type string
     * @Optional
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:3784
     * @var string|null
     */
    private $entranceMessageAudioFileDescription = null;

    /**
     * @ElementName entranceAudioFileMediaType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MediaFileType
     * @Optional
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:3784
     * @var \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    private $entranceAudioFileMediaType = null;

    /**
     * @ElementName entranceVideoMessageSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     * @Optional
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:3784
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    private $entranceVideoMessageSelection = null;

    /**
     * @ElementName entranceVideoFileUrl
     * @Type string
     * @Optional
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:3784
     * @var string|null
     */
    private $entranceVideoFileUrl = null;

    /**
     * @ElementName entranceMessageVideoFileDescription
     * @Type string
     * @Optional
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:3784
     * @var string|null
     */
    private $entranceMessageVideoFileDescription = null;

    /**
     * @ElementName entranceVideoFileMediaType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MediaFileType
     * @Optional
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:3784
     * @var \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    private $entranceVideoFileMediaType = null;

    /**
     * @ElementName playPeriodicComfortMessage
     * @Type bool
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:3784
     * @var bool|null
     */
    private $playPeriodicComfortMessage = null;

    /**
     * @ElementName timeBetweenComfortMessagesSeconds
     * @Type int
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:3784
     * @var int|null
     */
    private $timeBetweenComfortMessagesSeconds = null;

    /**
     * @ElementName periodicComfortAudioMessageSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:3784
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    private $periodicComfortAudioMessageSelection = null;

    /**
     * @ElementName periodicComfortAudioFileUrl
     * @Type string
     * @Optional
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:3784
     * @var string|null
     */
    private $periodicComfortAudioFileUrl = null;

    /**
     * @ElementName periodicComfortMessageAudioFileDescription
     * @Type string
     * @Optional
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:3784
     * @var string|null
     */
    private $periodicComfortMessageAudioFileDescription = null;

    /**
     * @ElementName periodicComfortAudioFileMediaType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MediaFileType
     * @Optional
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:3784
     * @var \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    private $periodicComfortAudioFileMediaType = null;

    /**
     * @ElementName periodicComfortVideoMessageSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     * @Optional
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:3784
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    private $periodicComfortVideoMessageSelection = null;

    /**
     * @ElementName periodicComfortVideoFileUrl
     * @Type string
     * @Optional
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:3784
     * @var string|null
     */
    private $periodicComfortVideoFileUrl = null;

    /**
     * @ElementName periodicComfortMessageVideoFileDescription
     * @Type string
     * @Optional
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:3784
     * @var string|null
     */
    private $periodicComfortMessageVideoFileDescription = null;

    /**
     * @ElementName periodicComfortVideoFileMediaType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MediaFileType
     * @Optional
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:3784
     * @var \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    private $periodicComfortVideoFileMediaType = null;

    /**
     * @ElementName enableMediaOnHoldForQueuedCalls
     * @Type bool
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:3784
     * @var bool|null
     */
    private $enableMediaOnHoldForQueuedCalls = null;

    /**
     * @ElementName mediaOnHoldSource
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceRead16
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:3784
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceRead16|null
     */
    private $mediaOnHoldSource = null;

    /**
     * @ElementName mediaOnHoldUseAlternateSourceForInternalCalls
     * @Type bool
     * @Optional
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:3784
     * @var bool|null
     */
    private $mediaOnHoldUseAlternateSourceForInternalCalls = null;

    /**
     * @ElementName mediaOnHoldInternalSource
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceRead16
     * @Optional
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:3784
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceRead16|null
     */
    private $mediaOnHoldInternalSource = null;

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
     * Getter for entranceAudioFileUrl
     *
     * @return string
     */
    public function getEntranceAudioFileUrl()
    {
        return $this->entranceAudioFileUrl instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->entranceAudioFileUrl;
    }

    /**
     * Setter for entranceAudioFileUrl
     *
     * @param string $entranceAudioFileUrl
     * @return $this
     */
    public function setEntranceAudioFileUrl($entranceAudioFileUrl)
    {
        $this->entranceAudioFileUrl = $entranceAudioFileUrl;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEntranceAudioFileUrl()
    {
        $this->entranceAudioFileUrl = null;
        return $this;
    }

    /**
     * Getter for entranceMessageAudioFileDescription
     *
     * @return string
     */
    public function getEntranceMessageAudioFileDescription()
    {
        return $this->entranceMessageAudioFileDescription instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->entranceMessageAudioFileDescription;
    }

    /**
     * Setter for entranceMessageAudioFileDescription
     *
     * @param string $entranceMessageAudioFileDescription
     * @return $this
     */
    public function setEntranceMessageAudioFileDescription($entranceMessageAudioFileDescription)
    {
        $this->entranceMessageAudioFileDescription = $entranceMessageAudioFileDescription;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEntranceMessageAudioFileDescription()
    {
        $this->entranceMessageAudioFileDescription = null;
        return $this;
    }

    /**
     * Getter for entranceAudioFileMediaType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MediaFileType
     */
    public function getEntranceAudioFileMediaType()
    {
        return $this->entranceAudioFileMediaType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->entranceAudioFileMediaType;
    }

    /**
     * Setter for entranceAudioFileMediaType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MediaFileType $entranceAudioFileMediaType
     * @return $this
     */
    public function setEntranceAudioFileMediaType(\CWM\BroadWorksConnector\Ocip\Models\MediaFileType $entranceAudioFileMediaType)
    {
        $this->entranceAudioFileMediaType = $entranceAudioFileMediaType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEntranceAudioFileMediaType()
    {
        $this->entranceAudioFileMediaType = null;
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
     * Getter for entranceVideoFileUrl
     *
     * @return string
     */
    public function getEntranceVideoFileUrl()
    {
        return $this->entranceVideoFileUrl instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->entranceVideoFileUrl;
    }

    /**
     * Setter for entranceVideoFileUrl
     *
     * @param string $entranceVideoFileUrl
     * @return $this
     */
    public function setEntranceVideoFileUrl($entranceVideoFileUrl)
    {
        $this->entranceVideoFileUrl = $entranceVideoFileUrl;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEntranceVideoFileUrl()
    {
        $this->entranceVideoFileUrl = null;
        return $this;
    }

    /**
     * Getter for entranceMessageVideoFileDescription
     *
     * @return string
     */
    public function getEntranceMessageVideoFileDescription()
    {
        return $this->entranceMessageVideoFileDescription instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->entranceMessageVideoFileDescription;
    }

    /**
     * Setter for entranceMessageVideoFileDescription
     *
     * @param string $entranceMessageVideoFileDescription
     * @return $this
     */
    public function setEntranceMessageVideoFileDescription($entranceMessageVideoFileDescription)
    {
        $this->entranceMessageVideoFileDescription = $entranceMessageVideoFileDescription;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEntranceMessageVideoFileDescription()
    {
        $this->entranceMessageVideoFileDescription = null;
        return $this;
    }

    /**
     * Getter for entranceVideoFileMediaType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MediaFileType
     */
    public function getEntranceVideoFileMediaType()
    {
        return $this->entranceVideoFileMediaType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->entranceVideoFileMediaType;
    }

    /**
     * Setter for entranceVideoFileMediaType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MediaFileType $entranceVideoFileMediaType
     * @return $this
     */
    public function setEntranceVideoFileMediaType(\CWM\BroadWorksConnector\Ocip\Models\MediaFileType $entranceVideoFileMediaType)
    {
        $this->entranceVideoFileMediaType = $entranceVideoFileMediaType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEntranceVideoFileMediaType()
    {
        $this->entranceVideoFileMediaType = null;
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
     * Getter for periodicComfortAudioFileUrl
     *
     * @return string
     */
    public function getPeriodicComfortAudioFileUrl()
    {
        return $this->periodicComfortAudioFileUrl instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->periodicComfortAudioFileUrl;
    }

    /**
     * Setter for periodicComfortAudioFileUrl
     *
     * @param string $periodicComfortAudioFileUrl
     * @return $this
     */
    public function setPeriodicComfortAudioFileUrl($periodicComfortAudioFileUrl)
    {
        $this->periodicComfortAudioFileUrl = $periodicComfortAudioFileUrl;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPeriodicComfortAudioFileUrl()
    {
        $this->periodicComfortAudioFileUrl = null;
        return $this;
    }

    /**
     * Getter for periodicComfortMessageAudioFileDescription
     *
     * @return string
     */
    public function getPeriodicComfortMessageAudioFileDescription()
    {
        return $this->periodicComfortMessageAudioFileDescription instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->periodicComfortMessageAudioFileDescription;
    }

    /**
     * Setter for periodicComfortMessageAudioFileDescription
     *
     * @param string $periodicComfortMessageAudioFileDescription
     * @return $this
     */
    public function setPeriodicComfortMessageAudioFileDescription($periodicComfortMessageAudioFileDescription)
    {
        $this->periodicComfortMessageAudioFileDescription = $periodicComfortMessageAudioFileDescription;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPeriodicComfortMessageAudioFileDescription()
    {
        $this->periodicComfortMessageAudioFileDescription = null;
        return $this;
    }

    /**
     * Getter for periodicComfortAudioFileMediaType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MediaFileType
     */
    public function getPeriodicComfortAudioFileMediaType()
    {
        return $this->periodicComfortAudioFileMediaType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->periodicComfortAudioFileMediaType;
    }

    /**
     * Setter for periodicComfortAudioFileMediaType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MediaFileType $periodicComfortAudioFileMediaType
     * @return $this
     */
    public function setPeriodicComfortAudioFileMediaType(\CWM\BroadWorksConnector\Ocip\Models\MediaFileType $periodicComfortAudioFileMediaType)
    {
        $this->periodicComfortAudioFileMediaType = $periodicComfortAudioFileMediaType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPeriodicComfortAudioFileMediaType()
    {
        $this->periodicComfortAudioFileMediaType = null;
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
     * Getter for periodicComfortVideoFileUrl
     *
     * @return string
     */
    public function getPeriodicComfortVideoFileUrl()
    {
        return $this->periodicComfortVideoFileUrl instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->periodicComfortVideoFileUrl;
    }

    /**
     * Setter for periodicComfortVideoFileUrl
     *
     * @param string $periodicComfortVideoFileUrl
     * @return $this
     */
    public function setPeriodicComfortVideoFileUrl($periodicComfortVideoFileUrl)
    {
        $this->periodicComfortVideoFileUrl = $periodicComfortVideoFileUrl;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPeriodicComfortVideoFileUrl()
    {
        $this->periodicComfortVideoFileUrl = null;
        return $this;
    }

    /**
     * Getter for periodicComfortMessageVideoFileDescription
     *
     * @return string
     */
    public function getPeriodicComfortMessageVideoFileDescription()
    {
        return $this->periodicComfortMessageVideoFileDescription instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->periodicComfortMessageVideoFileDescription;
    }

    /**
     * Setter for periodicComfortMessageVideoFileDescription
     *
     * @param string $periodicComfortMessageVideoFileDescription
     * @return $this
     */
    public function setPeriodicComfortMessageVideoFileDescription($periodicComfortMessageVideoFileDescription)
    {
        $this->periodicComfortMessageVideoFileDescription = $periodicComfortMessageVideoFileDescription;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPeriodicComfortMessageVideoFileDescription()
    {
        $this->periodicComfortMessageVideoFileDescription = null;
        return $this;
    }

    /**
     * Getter for periodicComfortVideoFileMediaType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MediaFileType
     */
    public function getPeriodicComfortVideoFileMediaType()
    {
        return $this->periodicComfortVideoFileMediaType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->periodicComfortVideoFileMediaType;
    }

    /**
     * Setter for periodicComfortVideoFileMediaType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MediaFileType $periodicComfortVideoFileMediaType
     * @return $this
     */
    public function setPeriodicComfortVideoFileMediaType(\CWM\BroadWorksConnector\Ocip\Models\MediaFileType $periodicComfortVideoFileMediaType)
    {
        $this->periodicComfortVideoFileMediaType = $periodicComfortVideoFileMediaType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPeriodicComfortVideoFileMediaType()
    {
        $this->periodicComfortVideoFileMediaType = null;
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceRead16
     */
    public function getMediaOnHoldSource()
    {
        return $this->mediaOnHoldSource instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mediaOnHoldSource;
    }

    /**
     * Setter for mediaOnHoldSource
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceRead16 $mediaOnHoldSource
     * @return $this
     */
    public function setMediaOnHoldSource(\CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceRead16 $mediaOnHoldSource)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceRead16
     */
    public function getMediaOnHoldInternalSource()
    {
        return $this->mediaOnHoldInternalSource instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mediaOnHoldInternalSource;
    }

    /**
     * Setter for mediaOnHoldInternalSource
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceRead16 $mediaOnHoldInternalSource
     * @return $this
     */
    public function setMediaOnHoldInternalSource(\CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceRead16 $mediaOnHoldInternalSource)
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

