<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterMediaOnHoldSourceModify16
 *
 * Contains the call center media on hold source configuration.
 */
class CallCenterMediaOnHoldSourceModify16
{

    /**
     * @ElementName audioMessageSourceSelection
     * @var string|null
     */
    private $audioMessageSourceSelection = null;

    /**
     * @ElementName audioFile
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource|null
     */
    private $audioFile = null;

    /**
     * @ElementName externalAudioSource
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointModify|null
     */
    private $externalAudioSource = null;

    /**
     * @ElementName videoMessageSourceSelection
     * @var string|null
     */
    private $videoMessageSourceSelection = null;

    /**
     * @ElementName videoFile
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource|null
     */
    private $videoFile = null;

    /**
     * @ElementName externalVideoSource
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointModify|null
     */
    private $externalVideoSource = null;

    /**
     * Getter for audioMessageSourceSelection
     *
     * @ElementName audioMessageSourceSelection
     * @return string|null
     */
    public function getAudioMessageSourceSelection()
    {
        return $this->audioMessageSourceSelection;
    }

    /**
     * Setter for audioMessageSourceSelection
     *
     * @ElementName audioMessageSourceSelection
     * @param string|null $audioMessageSourceSelection
     * @return $this
     */
    public function setAudioMessageSourceSelection($audioMessageSourceSelection)
    {
        $this->audioMessageSourceSelection = $audioMessageSourceSelection;
        return $this;
    }

    /**
     * Getter for audioFile
     *
     * @ElementName audioFile
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource|null
     */
    public function getAudioFile()
    {
        return $this->audioFile;
    }

    /**
     * Setter for audioFile
     *
     * @ElementName audioFile
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource|null $audioFile
     * @return $this
     */
    public function setAudioFile($audioFile)
    {
        $this->audioFile = $audioFile;
        return $this;
    }

    /**
     * Getter for externalAudioSource
     *
     * @ElementName externalAudioSource
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointModify|null
     */
    public function getExternalAudioSource()
    {
        return $this->externalAudioSource;
    }

    /**
     * Setter for externalAudioSource
     *
     * @ElementName externalAudioSource
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointModify|null $externalAudioSource
     * @return $this
     */
    public function setExternalAudioSource($externalAudioSource)
    {
        $this->externalAudioSource = $externalAudioSource;
        return $this;
    }

    /**
     * Getter for videoMessageSourceSelection
     *
     * @ElementName videoMessageSourceSelection
     * @return string|null
     */
    public function getVideoMessageSourceSelection()
    {
        return $this->videoMessageSourceSelection;
    }

    /**
     * Setter for videoMessageSourceSelection
     *
     * @ElementName videoMessageSourceSelection
     * @param string|null $videoMessageSourceSelection
     * @return $this
     */
    public function setVideoMessageSourceSelection($videoMessageSourceSelection)
    {
        $this->videoMessageSourceSelection = $videoMessageSourceSelection;
        return $this;
    }

    /**
     * Getter for videoFile
     *
     * @ElementName videoFile
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource|null
     */
    public function getVideoFile()
    {
        return $this->videoFile;
    }

    /**
     * Setter for videoFile
     *
     * @ElementName videoFile
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource|null $videoFile
     * @return $this
     */
    public function setVideoFile($videoFile)
    {
        $this->videoFile = $videoFile;
        return $this;
    }

    /**
     * Getter for externalVideoSource
     *
     * @ElementName externalVideoSource
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointModify|null
     */
    public function getExternalVideoSource()
    {
        return $this->externalVideoSource;
    }

    /**
     * Setter for externalVideoSource
     *
     * @ElementName externalVideoSource
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointModify|null $externalVideoSource
     * @return $this
     */
    public function setExternalVideoSource($externalVideoSource)
    {
        $this->externalVideoSource = $externalVideoSource;
        return $this;
    }


}

