<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserVoiceMessagingUserGetGreetingResponse13mp16
 *
 * Response to UserVoiceMessagingUserGetGreetingRequest13mp16.
 *         Contains the greeting configuration for a user's voice messaging.
 *         Replaced By: UserVoiceMessagingUserGetGreetingResponse16
 */
class UserVoiceMessagingUserGetGreetingResponse13mp16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName busyAnnouncementSelection
     * @var string|null
     */
    private $busyAnnouncementSelection = null;

    /**
     * @ElementName busyPersonalAudioFile
     * @var string|null
     */
    private $busyPersonalAudioFile = null;

    /**
     * @ElementName busyPersonalVideoFile
     * @var string|null
     */
    private $busyPersonalVideoFile = null;

    /**
     * @ElementName noAnswerAnnouncementSelection
     * @var string|null
     */
    private $noAnswerAnnouncementSelection = null;

    /**
     * @ElementName noAnswerPersonalAudioFile
     * @var string|null
     */
    private $noAnswerPersonalAudioFile = null;

    /**
     * @ElementName noAnswerPersonalVideoFile
     * @var string|null
     */
    private $noAnswerPersonalVideoFile = null;

    /**
     * @ElementName noAnswerAlternateGreeting01
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingRead|null
     */
    private $noAnswerAlternateGreeting01 = null;

    /**
     * @ElementName noAnswerAlternateGreeting02
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingRead|null
     */
    private $noAnswerAlternateGreeting02 = null;

    /**
     * @ElementName noAnswerAlternateGreeting03
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingRead|null
     */
    private $noAnswerAlternateGreeting03 = null;

    /**
     * @ElementName noAnswerNumberOfRings
     * @var int|null
     */
    private $noAnswerNumberOfRings = null;

    /**
     * Getter for busyAnnouncementSelection
     *
     * @ElementName busyAnnouncementSelection
     * @return string|null
     */
    public function getBusyAnnouncementSelection()
    {
        return $this->busyAnnouncementSelection;
    }

    /**
     * Setter for busyAnnouncementSelection
     *
     * @ElementName busyAnnouncementSelection
     * @param string|null $busyAnnouncementSelection
     * @return $this
     */
    public function setBusyAnnouncementSelection($busyAnnouncementSelection)
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
     * Getter for noAnswerAnnouncementSelection
     *
     * @ElementName noAnswerAnnouncementSelection
     * @return string|null
     */
    public function getNoAnswerAnnouncementSelection()
    {
        return $this->noAnswerAnnouncementSelection;
    }

    /**
     * Setter for noAnswerAnnouncementSelection
     *
     * @ElementName noAnswerAnnouncementSelection
     * @param string|null $noAnswerAnnouncementSelection
     * @return $this
     */
    public function setNoAnswerAnnouncementSelection($noAnswerAnnouncementSelection)
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
     * Getter for noAnswerAlternateGreeting01
     *
     * @ElementName noAnswerAlternateGreeting01
     * @return \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingRead|null
     */
    public function getNoAnswerAlternateGreeting01()
    {
        return $this->noAnswerAlternateGreeting01;
    }

    /**
     * Setter for noAnswerAlternateGreeting01
     *
     * @ElementName noAnswerAlternateGreeting01
     * @param \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingRead|null $noAnswerAlternateGreeting01
     * @return $this
     */
    public function setNoAnswerAlternateGreeting01($noAnswerAlternateGreeting01)
    {
        $this->noAnswerAlternateGreeting01 = $noAnswerAlternateGreeting01;
        return $this;
    }

    /**
     * Getter for noAnswerAlternateGreeting02
     *
     * @ElementName noAnswerAlternateGreeting02
     * @return \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingRead|null
     */
    public function getNoAnswerAlternateGreeting02()
    {
        return $this->noAnswerAlternateGreeting02;
    }

    /**
     * Setter for noAnswerAlternateGreeting02
     *
     * @ElementName noAnswerAlternateGreeting02
     * @param \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingRead|null $noAnswerAlternateGreeting02
     * @return $this
     */
    public function setNoAnswerAlternateGreeting02($noAnswerAlternateGreeting02)
    {
        $this->noAnswerAlternateGreeting02 = $noAnswerAlternateGreeting02;
        return $this;
    }

    /**
     * Getter for noAnswerAlternateGreeting03
     *
     * @ElementName noAnswerAlternateGreeting03
     * @return \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingRead|null
     */
    public function getNoAnswerAlternateGreeting03()
    {
        return $this->noAnswerAlternateGreeting03;
    }

    /**
     * Setter for noAnswerAlternateGreeting03
     *
     * @ElementName noAnswerAlternateGreeting03
     * @param \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingRead|null $noAnswerAlternateGreeting03
     * @return $this
     */
    public function setNoAnswerAlternateGreeting03($noAnswerAlternateGreeting03)
    {
        $this->noAnswerAlternateGreeting03 = $noAnswerAlternateGreeting03;
        return $this;
    }

    /**
     * Getter for noAnswerNumberOfRings
     *
     * @ElementName noAnswerNumberOfRings
     * @return int|null
     */
    public function getNoAnswerNumberOfRings()
    {
        return $this->noAnswerNumberOfRings;
    }

    /**
     * Setter for noAnswerNumberOfRings
     *
     * @ElementName noAnswerNumberOfRings
     * @param int|null $noAnswerNumberOfRings
     * @return $this
     */
    public function setNoAnswerNumberOfRings($noAnswerNumberOfRings)
    {
        $this->noAnswerNumberOfRings = $noAnswerNumberOfRings;
        return $this;
    }


}

