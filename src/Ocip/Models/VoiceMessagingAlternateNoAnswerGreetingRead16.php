<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * VoiceMessagingAlternateNoAnswerGreetingRead16
 *
 * The configuration of a alternate no answer greeting.
 *         It is used when geting a user's voice messaging greeting.
 */
class VoiceMessagingAlternateNoAnswerGreetingRead16
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
     * @ElementName audioMediaType
     * @var string|null
     */
    private $audioMediaType = null;

    /**
     * @ElementName videoFile
     * @var string|null
     */
    private $videoFile = null;

    /**
     * @ElementName videoMediaType
     * @var string|null
     */
    private $videoMediaType = null;

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
     * Getter for audioMediaType
     *
     * @ElementName audioMediaType
     * @return string|null
     */
    public function getAudioMediaType()
    {
        return $this->audioMediaType;
    }

    /**
     * Setter for audioMediaType
     *
     * @ElementName audioMediaType
     * @param string|null $audioMediaType
     * @return $this
     */
    public function setAudioMediaType($audioMediaType)
    {
        $this->audioMediaType = $audioMediaType;
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

    /**
     * Getter for videoMediaType
     *
     * @ElementName videoMediaType
     * @return string|null
     */
    public function getVideoMediaType()
    {
        return $this->videoMediaType;
    }

    /**
     * Setter for videoMediaType
     *
     * @ElementName videoMediaType
     * @param string|null $videoMediaType
     * @return $this
     */
    public function setVideoMediaType($videoMediaType)
    {
        $this->videoMediaType = $videoMediaType;
        return $this;
    }


}

