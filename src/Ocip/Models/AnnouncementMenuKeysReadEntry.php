<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AnnouncementMenuKeysReadEntry
 *
 * The voice portal announcement menu keys.
 */
class AnnouncementMenuKeysReadEntry
{

    /**
     * @ElementName recordAudio
     * @var string|null
     */
    private $recordAudio = null;

    /**
     * @ElementName recordAudioVideo
     * @var string|null
     */
    private $recordAudioVideo = null;

    /**
     * @ElementName returnToPreviousMenu
     * @var string|null
     */
    private $returnToPreviousMenu = null;

    /**
     * @ElementName repeatMenu
     * @var string|null
     */
    private $repeatMenu = null;

    /**
     * Getter for recordAudio
     *
     * @ElementName recordAudio
     * @return string|null
     */
    public function getRecordAudio()
    {
        return $this->recordAudio;
    }

    /**
     * Setter for recordAudio
     *
     * @ElementName recordAudio
     * @param string|null $recordAudio
     * @return $this
     */
    public function setRecordAudio($recordAudio)
    {
        $this->recordAudio = $recordAudio;
        return $this;
    }

    /**
     * Getter for recordAudioVideo
     *
     * @ElementName recordAudioVideo
     * @return string|null
     */
    public function getRecordAudioVideo()
    {
        return $this->recordAudioVideo;
    }

    /**
     * Setter for recordAudioVideo
     *
     * @ElementName recordAudioVideo
     * @param string|null $recordAudioVideo
     * @return $this
     */
    public function setRecordAudioVideo($recordAudioVideo)
    {
        $this->recordAudioVideo = $recordAudioVideo;
        return $this;
    }

    /**
     * Getter for returnToPreviousMenu
     *
     * @ElementName returnToPreviousMenu
     * @return string|null
     */
    public function getReturnToPreviousMenu()
    {
        return $this->returnToPreviousMenu;
    }

    /**
     * Setter for returnToPreviousMenu
     *
     * @ElementName returnToPreviousMenu
     * @param string|null $returnToPreviousMenu
     * @return $this
     */
    public function setReturnToPreviousMenu($returnToPreviousMenu)
    {
        $this->returnToPreviousMenu = $returnToPreviousMenu;
        return $this;
    }

    /**
     * Getter for repeatMenu
     *
     * @ElementName repeatMenu
     * @return string|null
     */
    public function getRepeatMenu()
    {
        return $this->repeatMenu;
    }

    /**
     * Setter for repeatMenu
     *
     * @ElementName repeatMenu
     * @param string|null $repeatMenu
     * @return $this
     */
    public function setRepeatMenu($repeatMenu)
    {
        $this->repeatMenu = $repeatMenu;
        return $this;
    }


}

