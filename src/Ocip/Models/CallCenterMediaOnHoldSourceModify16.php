<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterMediaOnHoldSourceModify16
 *
 * Contains the call center media on hold source configuration.
 *
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:47655","type":"sequence"}]
 */
class CallCenterMediaOnHoldSourceModify16
{

    /**
     * @ElementName audioMessageSourceSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldMessageSelection
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:47655
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldMessageSelection|null
     */
    private $audioMessageSourceSelection = null;

    /**
     * @ElementName audioFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:47655
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource|null
     */
    private $audioFile = null;

    /**
     * @ElementName externalAudioSource
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointModify
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:47655
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointModify|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $externalAudioSource = null;

    /**
     * @ElementName videoMessageSourceSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldMessageSelection
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:47655
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldMessageSelection|null
     */
    private $videoMessageSourceSelection = null;

    /**
     * @ElementName videoFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:47655
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource|null
     */
    private $videoFile = null;

    /**
     * @ElementName externalVideoSource
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointModify
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:47655
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointModify|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $externalVideoSource = null;

    /**
     * Getter for audioMessageSourceSelection
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldMessageSelection
     */
    public function getAudioMessageSourceSelection()
    {
        return $this->audioMessageSourceSelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->audioMessageSourceSelection;
    }

    /**
     * Setter for audioMessageSourceSelection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldMessageSelection $audioMessageSourceSelection
     * @return $this
     */
    public function setAudioMessageSourceSelection(\CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldMessageSelection $audioMessageSourceSelection)
    {
        $this->audioMessageSourceSelection = $audioMessageSourceSelection;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAudioMessageSourceSelection()
    {
        $this->audioMessageSourceSelection = null;
        return $this;
    }

    /**
     * Getter for audioFile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource
     */
    public function getAudioFile()
    {
        return $this->audioFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->audioFile;
    }

    /**
     * Setter for audioFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource $audioFile
     * @return $this
     */
    public function setAudioFile(\CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource $audioFile)
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
     * Getter for externalAudioSource
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointModify|null
     */
    public function getExternalAudioSource()
    {
        return $this->externalAudioSource instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->externalAudioSource;
    }

    /**
     * Setter for externalAudioSource
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointModify|null $externalAudioSource
     * @return $this
     */
    public function setExternalAudioSource(\CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointModify $externalAudioSource = null)
    {
        if ($externalAudioSource === null) {
            $this->externalAudioSource = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->externalAudioSource = $externalAudioSource;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetExternalAudioSource()
    {
        $this->externalAudioSource = null;
        return $this;
    }

    /**
     * Getter for videoMessageSourceSelection
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldMessageSelection
     */
    public function getVideoMessageSourceSelection()
    {
        return $this->videoMessageSourceSelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->videoMessageSourceSelection;
    }

    /**
     * Setter for videoMessageSourceSelection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldMessageSelection $videoMessageSourceSelection
     * @return $this
     */
    public function setVideoMessageSourceSelection(\CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldMessageSelection $videoMessageSourceSelection)
    {
        $this->videoMessageSourceSelection = $videoMessageSourceSelection;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVideoMessageSourceSelection()
    {
        $this->videoMessageSourceSelection = null;
        return $this;
    }

    /**
     * Getter for videoFile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource
     */
    public function getVideoFile()
    {
        return $this->videoFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->videoFile;
    }

    /**
     * Setter for videoFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource $videoFile
     * @return $this
     */
    public function setVideoFile(\CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource $videoFile)
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

    /**
     * Getter for externalVideoSource
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointModify|null
     */
    public function getExternalVideoSource()
    {
        return $this->externalVideoSource instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->externalVideoSource;
    }

    /**
     * Setter for externalVideoSource
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointModify|null $externalVideoSource
     * @return $this
     */
    public function setExternalVideoSource(\CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointModify $externalVideoSource = null)
    {
        if ($externalVideoSource === null) {
            $this->externalVideoSource = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->externalVideoSource = $externalVideoSource;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetExternalVideoSource()
    {
        $this->externalVideoSource = null;
        return $this;
    }


}

