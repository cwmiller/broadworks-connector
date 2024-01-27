<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * MusicOnHoldSourceReadCustomSource
 *
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:50055","type":"sequence"}]
 */
class MusicOnHoldSourceReadCustomSource
{
    /**
     * @ElementName audioFileDescription
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:50055
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $audioFileDescription = null;

    /**
     * @ElementName videoFileDescription
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:50055
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $videoFileDescription = null;

    /**
     * Getter for audioFileDescription
     *
     * @return string
     */
    public function getAudioFileDescription()
    {
        return $this->audioFileDescription instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->audioFileDescription;
    }

    /**
     * Setter for audioFileDescription
     *
     * @param string $audioFileDescription
     * @return $this
     */
    public function setAudioFileDescription($audioFileDescription)
    {
        $this->audioFileDescription = $audioFileDescription;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAudioFileDescription()
    {
        $this->audioFileDescription = null;
        return $this;
    }

    /**
     * Getter for videoFileDescription
     *
     * @return string
     */
    public function getVideoFileDescription()
    {
        return $this->videoFileDescription instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->videoFileDescription;
    }

    /**
     * Setter for videoFileDescription
     *
     * @param string $videoFileDescription
     * @return $this
     */
    public function setVideoFileDescription($videoFileDescription)
    {
        $this->videoFileDescription = $videoFileDescription;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVideoFileDescription()
    {
        $this->videoFileDescription = null;
        return $this;
    }
}

