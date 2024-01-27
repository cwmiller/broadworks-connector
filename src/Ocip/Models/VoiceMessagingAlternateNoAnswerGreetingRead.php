<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * VoiceMessagingAlternateNoAnswerGreetingRead
 *
 * The configuration of a alternate no answer greeting.
 *         It is used when geting a user's voice messaging greeting.
 *
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:50448","type":"sequence"}]
 */
class VoiceMessagingAlternateNoAnswerGreetingRead
{
    /**
     * @ElementName name
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:50448
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $name = null;

    /**
     * @ElementName audioFile
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:50448
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $audioFile = null;

    /**
     * @ElementName videoFile
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:50448
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $videoFile = null;

    /**
     * Getter for name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->name;
    }

    /**
     * Setter for name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetName()
    {
        $this->name = null;
        return $this;
    }

    /**
     * Getter for audioFile
     *
     * @return string
     */
    public function getAudioFile()
    {
        return $this->audioFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->audioFile;
    }

    /**
     * Setter for audioFile
     *
     * @param string $audioFile
     * @return $this
     */
    public function setAudioFile($audioFile)
    {
        $this->audioFile = $audioFile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAudioFile()
    {
        $this->audioFile = null;
        return $this;
    }

    /**
     * Getter for videoFile
     *
     * @return string
     */
    public function getVideoFile()
    {
        return $this->videoFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->videoFile;
    }

    /**
     * Setter for videoFile
     *
     * @param string $videoFile
     * @return $this
     */
    public function setVideoFile($videoFile)
    {
        $this->videoFile = $videoFile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVideoFile()
    {
        $this->videoFile = null;
        return $this;
    }
}

