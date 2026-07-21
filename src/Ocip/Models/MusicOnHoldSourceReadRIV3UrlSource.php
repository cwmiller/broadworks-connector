<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * MusicOnHoldSourceReadRIV3UrlSource
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:4626","type":"sequence"}]
 */
class MusicOnHoldSourceReadRIV3UrlSource
{
    /**
     * @ElementName audioUrl
     * @Type string
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4626
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $audioUrl = null;

    /**
     * @ElementName videoUrl
     * @Type string
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4626
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

