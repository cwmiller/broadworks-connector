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
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementSelection|null
     */
    private $busyAnnouncementSelection = null;

    /**
     * @ElementName busyPersonalAudioFile
     * @var string|null
     */
    private $busyPersonalAudioFile = null;

    /**
     * @ElementName busyPersonalAudioMediaType
     * @var \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    private $busyPersonalAudioMediaType = null;

    /**
     * @ElementName busyPersonalVideoFile
     * @var string|null
     */
    private $busyPersonalVideoFile = null;

    /**
     * @ElementName busyPersonalVideoMediaType
     * @var \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    private $busyPersonalVideoMediaType = null;

    /**
     * @ElementName noAnswerAnnouncementSelection
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingNoAnswerGreetingSelection|null
     */
    private $noAnswerAnnouncementSelection = null;

    /**
     * @ElementName noAnswerPersonalAudioFile
     * @var string|null
     */
    private $noAnswerPersonalAudioFile = null;

    /**
     * @ElementName noAnswerPersonalAudioMediaType
     * @var \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    private $noAnswerPersonalAudioMediaType = null;

    /**
     * @ElementName noAnswerPersonalVideoFile
     * @var string|null
     */
    private $noAnswerPersonalVideoFile = null;

    /**
     * @ElementName noAnswerPersonalVideoMediaType
     * @var \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    private $noAnswerPersonalVideoMediaType = null;

    /**
     * @ElementName noAnswerAlternateGreeting01
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingRead16|null
     */
    private $noAnswerAlternateGreeting01 = null;

    /**
     * @ElementName noAnswerAlternateGreeting02
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingRead16|null
     */
    private $noAnswerAlternateGreeting02 = null;

    /**
     * @ElementName noAnswerAlternateGreeting03
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingRead16|null
     */
    private $noAnswerAlternateGreeting03 = null;

    /**
     * @ElementName noAnswerNumberOfRings
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingNumberOfRings|null
     */
    private $noAnswerNumberOfRings = null;

    /**
     * Getter for busyAnnouncementSelection
     *
     * @ElementName busyAnnouncementSelection
     * @return \CWM\BroadWorksConnector\Ocip\Models\AnnouncementSelection|null
     */
    public function getBusyAnnouncementSelection()
    {
        return $this->busyAnnouncementSelection;
    }

    /**
     * Setter for busyAnnouncementSelection
     *
     * @ElementName busyAnnouncementSelection
     * @param \CWM\BroadWorksConnector\Ocip\Models\AnnouncementSelection|null $busyAnnouncementSelection
     * @return $this
     */
    public function setBusyAnnouncementSelection(\CWM\BroadWorksConnector\Ocip\Models\AnnouncementSelection $busyAnnouncementSelection)
    {
        $this->busyAnnouncementSelection = $busyAnnouncementSelection;
        return $this;
    }

    /**
     * Getter for busyPersonalAudioFile
     *
     * @ElementName busyPersonalAudioFile
     * @return string|null
     */
    public function getBusyPersonalAudioFile()
    {
        return $this->busyPersonalAudioFile;
    }

    /**
     * Setter for busyPersonalAudioFile
     *
     * @ElementName busyPersonalAudioFile
     * @param string|null $busyPersonalAudioFile
     * @return $this
     */
    public function setBusyPersonalAudioFile($busyPersonalAudioFile)
    {
        $this->busyPersonalAudioFile = $busyPersonalAudioFile;
        return $this;
    }

    /**
     * Getter for busyPersonalAudioMediaType
     *
     * @ElementName busyPersonalAudioMediaType
     * @return \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    public function getBusyPersonalAudioMediaType()
    {
        return $this->busyPersonalAudioMediaType;
    }

    /**
     * Setter for busyPersonalAudioMediaType
     *
     * @ElementName busyPersonalAudioMediaType
     * @param \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null $busyPersonalAudioMediaType
     * @return $this
     */
    public function setBusyPersonalAudioMediaType(\CWM\BroadWorksConnector\Ocip\Models\MediaFileType $busyPersonalAudioMediaType)
    {
        $this->busyPersonalAudioMediaType = $busyPersonalAudioMediaType;
        return $this;
    }

    /**
     * Getter for busyPersonalVideoFile
     *
     * @ElementName busyPersonalVideoFile
     * @return string|null
     */
    public function getBusyPersonalVideoFile()
    {
        return $this->busyPersonalVideoFile;
    }

    /**
     * Setter for busyPersonalVideoFile
     *
     * @ElementName busyPersonalVideoFile
     * @param string|null $busyPersonalVideoFile
     * @return $this
     */
    public function setBusyPersonalVideoFile($busyPersonalVideoFile)
    {
        $this->busyPersonalVideoFile = $busyPersonalVideoFile;
        return $this;
    }

    /**
     * Getter for busyPersonalVideoMediaType
     *
     * @ElementName busyPersonalVideoMediaType
     * @return \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    public function getBusyPersonalVideoMediaType()
    {
        return $this->busyPersonalVideoMediaType;
    }

    /**
     * Setter for busyPersonalVideoMediaType
     *
     * @ElementName busyPersonalVideoMediaType
     * @param \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null $busyPersonalVideoMediaType
     * @return $this
     */
    public function setBusyPersonalVideoMediaType(\CWM\BroadWorksConnector\Ocip\Models\MediaFileType $busyPersonalVideoMediaType)
    {
        $this->busyPersonalVideoMediaType = $busyPersonalVideoMediaType;
        return $this;
    }

    /**
     * Getter for noAnswerAnnouncementSelection
     *
     * @ElementName noAnswerAnnouncementSelection
     * @return \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingNoAnswerGreetingSelection|null
     */
    public function getNoAnswerAnnouncementSelection()
    {
        return $this->noAnswerAnnouncementSelection;
    }

    /**
     * Setter for noAnswerAnnouncementSelection
     *
     * @ElementName noAnswerAnnouncementSelection
     * @param \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingNoAnswerGreetingSelection|null $noAnswerAnnouncementSelection
     * @return $this
     */
    public function setNoAnswerAnnouncementSelection(\CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingNoAnswerGreetingSelection $noAnswerAnnouncementSelection)
    {
        $this->noAnswerAnnouncementSelection = $noAnswerAnnouncementSelection;
        return $this;
    }

    /**
     * Getter for noAnswerPersonalAudioFile
     *
     * @ElementName noAnswerPersonalAudioFile
     * @return string|null
     */
    public function getNoAnswerPersonalAudioFile()
    {
        return $this->noAnswerPersonalAudioFile;
    }

    /**
     * Setter for noAnswerPersonalAudioFile
     *
     * @ElementName noAnswerPersonalAudioFile
     * @param string|null $noAnswerPersonalAudioFile
     * @return $this
     */
    public function setNoAnswerPersonalAudioFile($noAnswerPersonalAudioFile)
    {
        $this->noAnswerPersonalAudioFile = $noAnswerPersonalAudioFile;
        return $this;
    }

    /**
     * Getter for noAnswerPersonalAudioMediaType
     *
     * @ElementName noAnswerPersonalAudioMediaType
     * @return \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    public function getNoAnswerPersonalAudioMediaType()
    {
        return $this->noAnswerPersonalAudioMediaType;
    }

    /**
     * Setter for noAnswerPersonalAudioMediaType
     *
     * @ElementName noAnswerPersonalAudioMediaType
     * @param \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null $noAnswerPersonalAudioMediaType
     * @return $this
     */
    public function setNoAnswerPersonalAudioMediaType(\CWM\BroadWorksConnector\Ocip\Models\MediaFileType $noAnswerPersonalAudioMediaType)
    {
        $this->noAnswerPersonalAudioMediaType = $noAnswerPersonalAudioMediaType;
        return $this;
    }

    /**
     * Getter for noAnswerPersonalVideoFile
     *
     * @ElementName noAnswerPersonalVideoFile
     * @return string|null
     */
    public function getNoAnswerPersonalVideoFile()
    {
        return $this->noAnswerPersonalVideoFile;
    }

    /**
     * Setter for noAnswerPersonalVideoFile
     *
     * @ElementName noAnswerPersonalVideoFile
     * @param string|null $noAnswerPersonalVideoFile
     * @return $this
     */
    public function setNoAnswerPersonalVideoFile($noAnswerPersonalVideoFile)
    {
        $this->noAnswerPersonalVideoFile = $noAnswerPersonalVideoFile;
        return $this;
    }

    /**
     * Getter for noAnswerPersonalVideoMediaType
     *
     * @ElementName noAnswerPersonalVideoMediaType
     * @return \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    public function getNoAnswerPersonalVideoMediaType()
    {
        return $this->noAnswerPersonalVideoMediaType;
    }

    /**
     * Setter for noAnswerPersonalVideoMediaType
     *
     * @ElementName noAnswerPersonalVideoMediaType
     * @param \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null $noAnswerPersonalVideoMediaType
     * @return $this
     */
    public function setNoAnswerPersonalVideoMediaType(\CWM\BroadWorksConnector\Ocip\Models\MediaFileType $noAnswerPersonalVideoMediaType)
    {
        $this->noAnswerPersonalVideoMediaType = $noAnswerPersonalVideoMediaType;
        return $this;
    }

    /**
     * Getter for noAnswerAlternateGreeting01
     *
     * @ElementName noAnswerAlternateGreeting01
     * @return \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingRead16|null
     */
    public function getNoAnswerAlternateGreeting01()
    {
        return $this->noAnswerAlternateGreeting01;
    }

    /**
     * Setter for noAnswerAlternateGreeting01
     *
     * @ElementName noAnswerAlternateGreeting01
     * @param \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingRead16|null $noAnswerAlternateGreeting01
     * @return $this
     */
    public function setNoAnswerAlternateGreeting01(\CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingRead16 $noAnswerAlternateGreeting01)
    {
        $this->noAnswerAlternateGreeting01 = $noAnswerAlternateGreeting01;
        return $this;
    }

    /**
     * Getter for noAnswerAlternateGreeting02
     *
     * @ElementName noAnswerAlternateGreeting02
     * @return \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingRead16|null
     */
    public function getNoAnswerAlternateGreeting02()
    {
        return $this->noAnswerAlternateGreeting02;
    }

    /**
     * Setter for noAnswerAlternateGreeting02
     *
     * @ElementName noAnswerAlternateGreeting02
     * @param \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingRead16|null $noAnswerAlternateGreeting02
     * @return $this
     */
    public function setNoAnswerAlternateGreeting02(\CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingRead16 $noAnswerAlternateGreeting02)
    {
        $this->noAnswerAlternateGreeting02 = $noAnswerAlternateGreeting02;
        return $this;
    }

    /**
     * Getter for noAnswerAlternateGreeting03
     *
     * @ElementName noAnswerAlternateGreeting03
     * @return \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingRead16|null
     */
    public function getNoAnswerAlternateGreeting03()
    {
        return $this->noAnswerAlternateGreeting03;
    }

    /**
     * Setter for noAnswerAlternateGreeting03
     *
     * @ElementName noAnswerAlternateGreeting03
     * @param \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingRead16|null $noAnswerAlternateGreeting03
     * @return $this
     */
    public function setNoAnswerAlternateGreeting03(\CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingRead16 $noAnswerAlternateGreeting03)
    {
        $this->noAnswerAlternateGreeting03 = $noAnswerAlternateGreeting03;
        return $this;
    }

    /**
     * Getter for noAnswerNumberOfRings
     *
     * @ElementName noAnswerNumberOfRings
     * @return \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingNumberOfRings|null
     */
    public function getNoAnswerNumberOfRings()
    {
        return $this->noAnswerNumberOfRings;
    }

    /**
     * Setter for noAnswerNumberOfRings
     *
     * @ElementName noAnswerNumberOfRings
     * @param \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingNumberOfRings|null $noAnswerNumberOfRings
     * @return $this
     */
    public function setNoAnswerNumberOfRings(\CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingNumberOfRings $noAnswerNumberOfRings)
    {
        $this->noAnswerNumberOfRings = $noAnswerNumberOfRings;
        return $this;
    }


}

