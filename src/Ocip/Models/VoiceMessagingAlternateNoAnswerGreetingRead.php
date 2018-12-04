<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * VoiceMessagingAlternateNoAnswerGreetingRead
 *
 * The configuration of a alternate no answer greeting.
 *         It is used when geting a user's voice messaging greeting.
 *
 * @Groups [{"id":"1a79c7896cb04feac6eff47a5321756e:39629","type":"sequence"}]
 */
class VoiceMessagingAlternateNoAnswerGreetingRead
{

    /**
     * @ElementName name
     * @Type string
     * @Group 1a79c7896cb04feac6eff47a5321756e:39629
     * @var string|null
     */
    private $name = null;

    /**
     * @ElementName audioFile
     * @Type string
     * @Optional
     * @Group 1a79c7896cb04feac6eff47a5321756e:39629
     * @var string|null
     */
    private $audioFile = null;

    /**
     * @ElementName videoFile
     * @Type string
     * @Optional
     * @Group 1a79c7896cb04feac6eff47a5321756e:39629
     * @var string|null
     */
    private $videoFile = null;

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

