<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * MusicOnHoldSourceModify22AnnouncementCustomSourceMediaFiles
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:2585","type":"sequence"}]
 */
class MusicOnHoldSourceModify22AnnouncementCustomSourceMediaFiles
{

    /**
     * @ElementName audioFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey
     * @Nillable
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2585
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $audioFile = null;

    /**
     * @ElementName videoFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey
     * @Nillable
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2585
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $videoFile = null;

    /**
     * Getter for audioFile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey|null
     */
    public function getAudioFile()
    {
        return $this->audioFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->audioFile;
    }

    /**
     * Setter for audioFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey|null $audioFile
     * @return $this
     */
    public function setAudioFile(\CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey $audioFile)
    {
        if ($audioFile === null) {
            $this->audioFile = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->audioFile = $audioFile;
        }
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey|null
     */
    public function getVideoFile()
    {
        return $this->videoFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->videoFile;
    }

    /**
     * Setter for videoFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey|null $videoFile
     * @return $this
     */
    public function setVideoFile(\CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey $videoFile)
    {
        if ($videoFile === null) {
            $this->videoFile = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->videoFile = $videoFile;
        }
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

