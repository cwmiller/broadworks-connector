<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * VoiceMessagingAlternateNoAnswerGreetingModify16
 *
 * The configuration of a alternate no answer
 *         greeting.
 *         It is used when modifying a user's voice
 *         messaging
 *         greeting.
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:5813","type":"sequence"}]
 */
class VoiceMessagingAlternateNoAnswerGreetingModify16
{
    /**
     * @ElementName name
     * @Type string
     * @Nillable
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5813
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $name = null;

    /**
     * @ElementName audioFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5813
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource|null
     */
    protected $audioFile = null;

    /**
     * @ElementName videoFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5813
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource|null
     */
    protected $videoFile = null;

    /**
     * Getter for name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->name;
    }

    /**
     * Setter for name
     *
     * @param string|null $name
     * @return $this
     */
    public function setName($name = null)
    {
        if ($name === null) {
            $this->name = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->name = $name;
        }
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource
     */
    public function getAudioFile()
    {
        return $this->audioFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->audioFile;
    }

    /**
     * Setter for audioFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource $audioFile
     * @return $this
     */
    public function setAudioFile(\CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource $audioFile)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource
     */
    public function getVideoFile()
    {
        return $this->videoFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->videoFile;
    }

    /**
     * Setter for videoFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource $videoFile
     * @return $this
     */
    public function setVideoFile(\CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource $videoFile)
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

