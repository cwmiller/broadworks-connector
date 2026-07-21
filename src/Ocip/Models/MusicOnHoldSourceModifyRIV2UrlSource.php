<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * MusicOnHoldSourceModifyRIV2UrlSource
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:4206","type":"sequence"}]
 */
class MusicOnHoldSourceModifyRIV2UrlSource
{
    /**
     * @ElementName audioUrl
     * @Type string
     * @Nillable
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4206
     * @MinLength 1
     * @MaxLength 256
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $audioUrl = null;

    /**
     * @ElementName videoUrl
     * @Type string
     * @Nillable
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4206
     * @MinLength 1
     * @MaxLength 256
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $videoUrl = null;

    /**
     * Getter for audioUrl
     *
     * @return string|null
     */
    public function getAudioUrl()
    {
        return $this->audioUrl instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->audioUrl;
    }

    /**
     * Setter for audioUrl
     *
     * @param string|null $audioUrl
     * @return $this
     */
    public function setAudioUrl($audioUrl = null)
    {
        if ($audioUrl === null) {
            $this->audioUrl = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->audioUrl = $audioUrl;
        }
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
     * @return string|null
     */
    public function getVideoUrl()
    {
        return $this->videoUrl instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->videoUrl;
    }

    /**
     * Setter for videoUrl
     *
     * @param string|null $videoUrl
     * @return $this
     */
    public function setVideoUrl($videoUrl = null)
    {
        if ($videoUrl === null) {
            $this->videoUrl = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->videoUrl = $videoUrl;
        }
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

