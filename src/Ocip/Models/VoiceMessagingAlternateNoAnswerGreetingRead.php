<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * VoiceMessagingAlternateNoAnswerGreetingRead
 *
 * The configuration of a alternate no answer greeting.
 *         It is used when geting a user's voice messaging greeting.
 */
class VoiceMessagingAlternateNoAnswerGreetingRead
{

    /**
     * @ElementName name
     * @var string|null
     */
    private $name = null;

    /**
     * @ElementName audioFile
     * @var string|null
     */
    private $audioFile = null;

    /**
     * @ElementName videoFile
     * @var string|null
     */
    private $videoFile = null;

    /**
     * Getter for name
     *
     * @ElementName name
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Setter for name
     *
     * @ElementName name
     * @param string|null $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Getter for audioFile
     *
     * @ElementName audioFile
     * @return string|null
     */
    public function getAudioFile()
    {
        return $this->audioFile;
    }

    /**
     * Setter for audioFile
     *
     * @ElementName audioFile
     * @param string|null $audioFile
     * @return $this
     */
    public function setAudioFile($audioFile)
    {
        $this->audioFile = $audioFile;
        return $this;
    }

    /**
     * Getter for videoFile
     *
     * @ElementName videoFile
     * @return string|null
     */
    public function getVideoFile()
    {
        return $this->videoFile;
    }

    /**
     * Setter for videoFile
     *
     * @ElementName videoFile
     * @param string|null $videoFile
     * @return $this
     */
    public function setVideoFile($videoFile)
    {
        $this->videoFile = $videoFile;
        return $this;
    }


}

