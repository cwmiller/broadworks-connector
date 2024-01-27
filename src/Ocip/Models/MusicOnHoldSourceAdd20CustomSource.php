<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * MusicOnHoldSourceAdd20CustomSource
 *
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:19464","type":"sequence"}]
 */
class MusicOnHoldSourceAdd20CustomSource
{
    /**
     * @ElementName audioFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:19464
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey|null
     */
    protected $audioFile = null;

    /**
     * @ElementName videoFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:19464
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey|null
     */
    protected $videoFile = null;

    /**
     * Getter for audioFile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey
     */
    public function getAudioFile()
    {
        return $this->audioFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->audioFile;
    }

    /**
     * Setter for audioFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey $audioFile
     * @return $this
     */
    public function setAudioFile(\CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey $audioFile)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey
     */
    public function getVideoFile()
    {
        return $this->videoFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->videoFile;
    }

    /**
     * Setter for videoFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey $videoFile
     * @return $this
     */
    public function setVideoFile(\CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey $videoFile)
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

