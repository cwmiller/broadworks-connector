<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * MusicOnHoldUserSourceReadRIUrlSource
 *
 * @Groups [{"id":"3a0309eb8d406fefc891f554ef114669:444","type":"sequence"}]
 */
class MusicOnHoldUserSourceReadRIUrlSource
{
    /**
     * @ElementName audioUrl
     * @Type string
     * @Optional
     * @Group 3a0309eb8d406fefc891f554ef114669:444
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $audioUrl = null;

    /**
     * @ElementName videoUrl
     * @Type string
     * @Optional
     * @Group 3a0309eb8d406fefc891f554ef114669:444
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $videoUrl = null;

    /**
     * Getter for audioUrl
     *
     * @return string
     */
    public function getAudioUrl()
    {
        return $this->audioUrl instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->audioUrl;
    }

    /**
     * Setter for audioUrl
     *
     * @param string $audioUrl
     * @return $this
     */
    public function setAudioUrl($audioUrl)
    {
        $this->audioUrl = $audioUrl;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAudioUrl()
    {
        $this->audioUrl = null;
        return $this;
    }

    /**
     * Getter for videoUrl
     *
     * @return string
     */
    public function getVideoUrl()
    {
        return $this->videoUrl instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->videoUrl;
    }

    /**
     * Setter for videoUrl
     *
     * @param string $videoUrl
     * @return $this
     */
    public function setVideoUrl($videoUrl)
    {
        $this->videoUrl = $videoUrl;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVideoUrl()
    {
        $this->videoUrl = null;
        return $this;
    }
}

