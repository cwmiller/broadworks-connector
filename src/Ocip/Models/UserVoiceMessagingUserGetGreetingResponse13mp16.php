<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserVoiceMessagingUserGetGreetingResponse13mp16
 *
 * Response to UserVoiceMessagingUserGetGreetingRequest13mp16.
 *                 Contains the greeting configuration for a user's voice messaging.
 *                 Replaced By: UserVoiceMessagingUserGetGreetingResponse16
 *
 * @see UserVoiceMessagingUserGetGreetingRequest13mp16
 * @see UserVoiceMessagingUserGetGreetingResponse16
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:11867","type":"sequence"}]
 */
class UserVoiceMessagingUserGetGreetingResponse13mp16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName busyAnnouncementSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AnnouncementSelection
     * @Group ab0042aa512abc10edb3c55e4b416b0b:11867
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementSelection|null
     */
    private $busyAnnouncementSelection = null;

    /**
     * @ElementName busyPersonalAudioFile
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:11867
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    private $busyPersonalAudioFile = null;

    /**
     * @ElementName busyPersonalVideoFile
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:11867
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    private $busyPersonalVideoFile = null;

    /**
     * @ElementName noAnswerAnnouncementSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingNoAnswerGreetingSelection
     * @Group ab0042aa512abc10edb3c55e4b416b0b:11867
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingNoAnswerGreetingSelection|null
     */
    private $noAnswerAnnouncementSelection = null;

    /**
     * @ElementName noAnswerPersonalAudioFile
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:11867
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    private $noAnswerPersonalAudioFile = null;

    /**
     * @ElementName noAnswerPersonalVideoFile
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:11867
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    private $noAnswerPersonalVideoFile = null;

    /**
     * @ElementName noAnswerAlternateGreeting01
     * @Type \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingRead
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:11867
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingRead|null
     */
    private $noAnswerAlternateGreeting01 = null;

    /**
     * @ElementName noAnswerAlternateGreeting02
     * @Type \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingRead
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:11867
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingRead|null
     */
    private $noAnswerAlternateGreeting02 = null;

    /**
     * @ElementName noAnswerAlternateGreeting03
     * @Type \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingRead
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:11867
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingRead|null
     */
    private $noAnswerAlternateGreeting03 = null;

    /**
     * @ElementName noAnswerNumberOfRings
     * @Type \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingNumberOfRings
     * @Group ab0042aa512abc10edb3c55e4b416b0b:11867
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
     * Getter for noAnswerAlternateGreeting01
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingRead
     */
    public function getNoAnswerAlternateGreeting01()
    {
        return $this->noAnswerAlternateGreeting01 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->noAnswerAlternateGreeting01;
    }

    /**
     * Setter for noAnswerAlternateGreeting01
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingRead $noAnswerAlternateGreeting01
     * @return $this
     */
    public function setNoAnswerAlternateGreeting01(\CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingRead $noAnswerAlternateGreeting01)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingRead
     */
    public function getNoAnswerAlternateGreeting02()
    {
        return $this->noAnswerAlternateGreeting02 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->noAnswerAlternateGreeting02;
    }

    /**
     * Setter for noAnswerAlternateGreeting02
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingRead $noAnswerAlternateGreeting02
     * @return $this
     */
    public function setNoAnswerAlternateGreeting02(\CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingRead $noAnswerAlternateGreeting02)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingRead
     */
    public function getNoAnswerAlternateGreeting03()
    {
        return $this->noAnswerAlternateGreeting03 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->noAnswerAlternateGreeting03;
    }

    /**
     * Setter for noAnswerAlternateGreeting03
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingRead $noAnswerAlternateGreeting03
     * @return $this
     */
    public function setNoAnswerAlternateGreeting03(\CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingRead $noAnswerAlternateGreeting03)
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

