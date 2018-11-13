<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserVoiceMessagingUserGetGreetingResponse16
 *
 * Response to UserVoiceMessagingUserGetGreetingRequest16.
 *         Contains the greeting configuration for a user's voice messaging.
 *         
 *         Replaced by: UserVoiceMessagingUserGetGreetingResponse18
 *
 * @see UserVoiceMessagingUserGetGreetingRequest16
 * @see UserVoiceMessagingUserGetGreetingResponse18
 */
class UserVoiceMessagingUserGetGreetingResponse16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName busyAnnouncementSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AnnouncementSelection
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementSelection|null
     */
    private $busyAnnouncementSelection = null;

    /**
     * @ElementName busyPersonalAudioFile
     * @Type string
     * @var string|null
     */
    private $busyPersonalAudioFile = null;

    /**
     * @ElementName busyPersonalAudioMediaType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MediaFileType
     * @var \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    private $busyPersonalAudioMediaType = null;

    /**
     * @ElementName busyPersonalVideoFile
     * @Type string
     * @var string|null
     */
    private $busyPersonalVideoFile = null;

    /**
     * @ElementName busyPersonalVideoMediaType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MediaFileType
     * @var \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    private $busyPersonalVideoMediaType = null;

    /**
     * @ElementName noAnswerAnnouncementSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingNoAnswerGreetingSelection
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingNoAnswerGreetingSelection|null
     */
    private $noAnswerAnnouncementSelection = null;

    /**
     * @ElementName noAnswerPersonalAudioFile
     * @Type string
     * @var string|null
     */
    private $noAnswerPersonalAudioFile = null;

    /**
     * @ElementName noAnswerPersonalAudioMediaType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MediaFileType
     * @var \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    private $noAnswerPersonalAudioMediaType = null;

    /**
     * @ElementName noAnswerPersonalVideoFile
     * @Type string
     * @var string|null
     */
    private $noAnswerPersonalVideoFile = null;

    /**
     * @ElementName noAnswerPersonalVideoMediaType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MediaFileType
     * @var \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    private $noAnswerPersonalVideoMediaType = null;

    /**
     * @ElementName noAnswerAlternateGreeting01
     * @Type \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingRead16
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingRead16|null
     */
    private $noAnswerAlternateGreeting01 = null;

    /**
     * @ElementName noAnswerAlternateGreeting02
     * @Type \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingRead16
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingRead16|null
     */
    private $noAnswerAlternateGreeting02 = null;

    /**
     * @ElementName noAnswerAlternateGreeting03
     * @Type \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingRead16
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingRead16|null
     */
    private $noAnswerAlternateGreeting03 = null;

    /**
     * @ElementName noAnswerNumberOfRings
     * @Type \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingNumberOfRings
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingNumberOfRings|null
     */
    private $noAnswerNumberOfRings = null;

    /**
     * Getter for busyAnnouncementSelection
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AnnouncementSelection
     */
    public function getBusyAnnouncementSelection()
    {
        return $this->busyAnnouncementSelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->busyAnnouncementSelection;
    }

    /**
     * Setter for busyAnnouncementSelection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AnnouncementSelection $busyAnnouncementSelection
     * @return $this
     */
    public function setBusyAnnouncementSelection(\CWM\BroadWorksConnector\Ocip\Models\AnnouncementSelection $busyAnnouncementSelection)
    {
        $this->busyAnnouncementSelection = $busyAnnouncementSelection;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetBusyAnnouncementSelection()
    {
        $this->busyAnnouncementSelection = null;
        return $this;
    }

    /**
     * Getter for busyPersonalAudioFile
     *
     * @return string
     */
    public function getBusyPersonalAudioFile()
    {
        return $this->busyPersonalAudioFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->busyPersonalAudioFile;
    }

    /**
     * Setter for busyPersonalAudioFile
     *
     * @param string $busyPersonalAudioFile
     * @return $this
     */
    public function setBusyPersonalAudioFile($busyPersonalAudioFile)
    {
        $this->busyPersonalAudioFile = $busyPersonalAudioFile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetBusyPersonalAudioFile()
    {
        $this->busyPersonalAudioFile = null;
        return $this;
    }

    /**
     * Getter for busyPersonalAudioMediaType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MediaFileType
     */
    public function getBusyPersonalAudioMediaType()
    {
        return $this->busyPersonalAudioMediaType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->busyPersonalAudioMediaType;
    }

    /**
     * Setter for busyPersonalAudioMediaType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MediaFileType $busyPersonalAudioMediaType
     * @return $this
     */
    public function setBusyPersonalAudioMediaType(\CWM\BroadWorksConnector\Ocip\Models\MediaFileType $busyPersonalAudioMediaType)
    {
        $this->busyPersonalAudioMediaType = $busyPersonalAudioMediaType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetBusyPersonalAudioMediaType()
    {
        $this->busyPersonalAudioMediaType = null;
        return $this;
    }

    /**
     * Getter for busyPersonalVideoFile
     *
     * @return string
     */
    public function getBusyPersonalVideoFile()
    {
        return $this->busyPersonalVideoFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->busyPersonalVideoFile;
    }

    /**
     * Setter for busyPersonalVideoFile
     *
     * @param string $busyPersonalVideoFile
     * @return $this
     */
    public function setBusyPersonalVideoFile($busyPersonalVideoFile)
    {
        $this->busyPersonalVideoFile = $busyPersonalVideoFile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetBusyPersonalVideoFile()
    {
        $this->busyPersonalVideoFile = null;
        return $this;
    }

    /**
     * Getter for busyPersonalVideoMediaType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MediaFileType
     */
    public function getBusyPersonalVideoMediaType()
    {
        return $this->busyPersonalVideoMediaType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->busyPersonalVideoMediaType;
    }

    /**
     * Setter for busyPersonalVideoMediaType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MediaFileType $busyPersonalVideoMediaType
     * @return $this
     */
    public function setBusyPersonalVideoMediaType(\CWM\BroadWorksConnector\Ocip\Models\MediaFileType $busyPersonalVideoMediaType)
    {
        $this->busyPersonalVideoMediaType = $busyPersonalVideoMediaType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetBusyPersonalVideoMediaType()
    {
        $this->busyPersonalVideoMediaType = null;
        return $this;
    }

    /**
     * Getter for noAnswerAnnouncementSelection
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingNoAnswerGreetingSelection
     */
    public function getNoAnswerAnnouncementSelection()
    {
        return $this->noAnswerAnnouncementSelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->noAnswerAnnouncementSelection;
    }

    /**
     * Setter for noAnswerAnnouncementSelection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingNoAnswerGreetingSelection $noAnswerAnnouncementSelection
     * @return $this
     */
    public function setNoAnswerAnnouncementSelection(\CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingNoAnswerGreetingSelection $noAnswerAnnouncementSelection)
    {
        $this->noAnswerAnnouncementSelection = $noAnswerAnnouncementSelection;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNoAnswerAnnouncementSelection()
    {
        $this->noAnswerAnnouncementSelection = null;
        return $this;
    }

    /**
     * Getter for noAnswerPersonalAudioFile
     *
     * @return string
     */
    public function getNoAnswerPersonalAudioFile()
    {
        return $this->noAnswerPersonalAudioFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->noAnswerPersonalAudioFile;
    }

    /**
     * Setter for noAnswerPersonalAudioFile
     *
     * @param string $noAnswerPersonalAudioFile
     * @return $this
     */
    public function setNoAnswerPersonalAudioFile($noAnswerPersonalAudioFile)
    {
        $this->noAnswerPersonalAudioFile = $noAnswerPersonalAudioFile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNoAnswerPersonalAudioFile()
    {
        $this->noAnswerPersonalAudioFile = null;
        return $this;
    }

    /**
     * Getter for noAnswerPersonalAudioMediaType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MediaFileType
     */
    public function getNoAnswerPersonalAudioMediaType()
    {
        return $this->noAnswerPersonalAudioMediaType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->noAnswerPersonalAudioMediaType;
    }

    /**
     * Setter for noAnswerPersonalAudioMediaType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MediaFileType $noAnswerPersonalAudioMediaType
     * @return $this
     */
    public function setNoAnswerPersonalAudioMediaType(\CWM\BroadWorksConnector\Ocip\Models\MediaFileType $noAnswerPersonalAudioMediaType)
    {
        $this->noAnswerPersonalAudioMediaType = $noAnswerPersonalAudioMediaType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNoAnswerPersonalAudioMediaType()
    {
        $this->noAnswerPersonalAudioMediaType = null;
        return $this;
    }

    /**
     * Getter for noAnswerPersonalVideoFile
     *
     * @return string
     */
    public function getNoAnswerPersonalVideoFile()
    {
        return $this->noAnswerPersonalVideoFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->noAnswerPersonalVideoFile;
    }

    /**
     * Setter for noAnswerPersonalVideoFile
     *
     * @param string $noAnswerPersonalVideoFile
     * @return $this
     */
    public function setNoAnswerPersonalVideoFile($noAnswerPersonalVideoFile)
    {
        $this->noAnswerPersonalVideoFile = $noAnswerPersonalVideoFile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNoAnswerPersonalVideoFile()
    {
        $this->noAnswerPersonalVideoFile = null;
        return $this;
    }

    /**
     * Getter for noAnswerPersonalVideoMediaType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MediaFileType
     */
    public function getNoAnswerPersonalVideoMediaType()
    {
        return $this->noAnswerPersonalVideoMediaType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->noAnswerPersonalVideoMediaType;
    }

    /**
     * Setter for noAnswerPersonalVideoMediaType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MediaFileType $noAnswerPersonalVideoMediaType
     * @return $this
     */
    public function setNoAnswerPersonalVideoMediaType(\CWM\BroadWorksConnector\Ocip\Models\MediaFileType $noAnswerPersonalVideoMediaType)
    {
        $this->noAnswerPersonalVideoMediaType = $noAnswerPersonalVideoMediaType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNoAnswerPersonalVideoMediaType()
    {
        $this->noAnswerPersonalVideoMediaType = null;
        return $this;
    }

    /**
     * Getter for noAnswerAlternateGreeting01
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingRead16
     */
    public function getNoAnswerAlternateGreeting01()
    {
        return $this->noAnswerAlternateGreeting01 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->noAnswerAlternateGreeting01;
    }

    /**
     * Setter for noAnswerAlternateGreeting01
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingRead16 $noAnswerAlternateGreeting01
     * @return $this
     */
    public function setNoAnswerAlternateGreeting01(\CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingRead16 $noAnswerAlternateGreeting01)
    {
        $this->noAnswerAlternateGreeting01 = $noAnswerAlternateGreeting01;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNoAnswerAlternateGreeting01()
    {
        $this->noAnswerAlternateGreeting01 = null;
        return $this;
    }

    /**
     * Getter for noAnswerAlternateGreeting02
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingRead16
     */
    public function getNoAnswerAlternateGreeting02()
    {
        return $this->noAnswerAlternateGreeting02 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->noAnswerAlternateGreeting02;
    }

    /**
     * Setter for noAnswerAlternateGreeting02
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingRead16 $noAnswerAlternateGreeting02
     * @return $this
     */
    public function setNoAnswerAlternateGreeting02(\CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingRead16 $noAnswerAlternateGreeting02)
    {
        $this->noAnswerAlternateGreeting02 = $noAnswerAlternateGreeting02;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNoAnswerAlternateGreeting02()
    {
        $this->noAnswerAlternateGreeting02 = null;
        return $this;
    }

    /**
     * Getter for noAnswerAlternateGreeting03
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingRead16
     */
    public function getNoAnswerAlternateGreeting03()
    {
        return $this->noAnswerAlternateGreeting03 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->noAnswerAlternateGreeting03;
    }

    /**
     * Setter for noAnswerAlternateGreeting03
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingRead16 $noAnswerAlternateGreeting03
     * @return $this
     */
    public function setNoAnswerAlternateGreeting03(\CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingRead16 $noAnswerAlternateGreeting03)
    {
        $this->noAnswerAlternateGreeting03 = $noAnswerAlternateGreeting03;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNoAnswerAlternateGreeting03()
    {
        $this->noAnswerAlternateGreeting03 = null;
        return $this;
    }

    /**
     * Getter for noAnswerNumberOfRings
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingNumberOfRings
     */
    public function getNoAnswerNumberOfRings()
    {
        return $this->noAnswerNumberOfRings instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->noAnswerNumberOfRings;
    }

    /**
     * Setter for noAnswerNumberOfRings
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingNumberOfRings $noAnswerNumberOfRings
     * @return $this
     */
    public function setNoAnswerNumberOfRings(\CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingNumberOfRings $noAnswerNumberOfRings)
    {
        $this->noAnswerNumberOfRings = $noAnswerNumberOfRings;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNoAnswerNumberOfRings()
    {
        $this->noAnswerNumberOfRings = null;
        return $this;
    }


}

