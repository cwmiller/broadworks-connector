<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * MusicOnHoldSourceAddRIV2LabeledCustomSourceMediaFiles
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:3979","type":"sequence"}]
 */
class MusicOnHoldSourceAddRIV2LabeledCustomSourceMediaFiles
{
    /**
     * @ElementName audioFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResourceRI
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:3979
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResourceRI|null
     */
    protected $audioFile = null;

    /**
     * @ElementName videoFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:3979
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource|null
     */
    protected $videoFile = null;

    /**
     * Getter for audioFile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResourceRI
     */
    public function getAudioFile()
    {
        return $this->audioFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->audioFile;
    }

    /**
     * Setter for audioFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResourceRI $audioFile
     * @return $this
     */
    public function setAudioFile(\CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResourceRI $audioFile)
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

