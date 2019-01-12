<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterMediaOnHoldSourceRead16
 *
 * Contains the call center media on hold source configuration.
 *
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:42188","type":"sequence"}]
 */
class CallCenterMediaOnHoldSourceRead16
{

    /**
     * @ElementName audioMessageSourceSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldMessageSelection
     * @Group ab0042aa512abc10edb3c55e4b416b0b:42188
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldMessageSelection|null
     */
    private $audioMessageSourceSelection = null;

    /**
     * @ElementName audioFileUrl
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:42188
     * @var string|null
     */
    private $audioFileUrl = null;

    /**
     * @ElementName audioFileDescription
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:42188
     * @var string|null
     */
    private $audioFileDescription = null;

    /**
     * @ElementName audioFileMediaType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MediaFileType
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:42188
     * @var \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    private $audioFileMediaType = null;

    /**
     * @ElementName externalAudioSource
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointRead14
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:42188
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointRead14|null
     */
    private $externalAudioSource = null;

    /**
     * @ElementName videoMessageSourceSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldMessageSelection
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:42188
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldMessageSelection|null
     */
    private $videoMessageSourceSelection = null;

    /**
     * @ElementName videoFileUrl
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:42188
     * @var string|null
     */
    private $videoFileUrl = null;

    /**
     * @ElementName videoFileDescription
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:42188
     * @var string|null
     */
    private $videoFileDescription = null;

    /**
     * @ElementName videoFileMediaType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MediaFileType
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:42188
     * @var \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    private $videoFileMediaType = null;

    /**
     * @ElementName externalVideoSource
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointRead14
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:42188
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointRead14|null
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
     * Getter for audioFileUrl
     *
     * @return string
     */
    public function getAudioFileUrl()
    {
        return $this->audioFileUrl instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->audioFileUrl;
    }

    /**
     * Setter for audioFileUrl
     *
     * @param string $audioFileUrl
     * @return $this
     */
    public function setAudioFileUrl($audioFileUrl)
    {
        $this->audioFileUrl = $audioFileUrl;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAudioFileUrl()
    {
        $this->audioFileUrl = null;
        return $this;
    }

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
     * Getter for audioFileMediaType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MediaFileType
     */
    public function getAudioFileMediaType()
    {
        return $this->audioFileMediaType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->audioFileMediaType;
    }

    /**
     * Setter for audioFileMediaType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MediaFileType $audioFileMediaType
     * @return $this
     */
    public function setAudioFileMediaType(\CWM\BroadWorksConnector\Ocip\Models\MediaFileType $audioFileMediaType)
    {
        $this->audioFileMediaType = $audioFileMediaType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAudioFileMediaType()
    {
        $this->audioFileMediaType = null;
        return $this;
    }

    /**
     * Getter for externalAudioSource
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointRead14
     */
    public function getExternalAudioSource()
    {
        return $this->externalAudioSource instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->externalAudioSource;
    }

    /**
     * Setter for externalAudioSource
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointRead14 $externalAudioSource
     * @return $this
     */
    public function setExternalAudioSource(\CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointRead14 $externalAudioSource)
    {
        $this->externalAudioSource = $externalAudioSource;
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
     * Getter for videoFileUrl
     *
     * @return string
     */
    public function getVideoFileUrl()
    {
        return $this->videoFileUrl instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->videoFileUrl;
    }

    /**
     * Setter for videoFileUrl
     *
     * @param string $videoFileUrl
     * @return $this
     */
    public function setVideoFileUrl($videoFileUrl)
    {
        $this->videoFileUrl = $videoFileUrl;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVideoFileUrl()
    {
        $this->videoFileUrl = null;
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

    /**
     * Getter for videoFileMediaType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MediaFileType
     */
    public function getVideoFileMediaType()
    {
        return $this->videoFileMediaType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->videoFileMediaType;
    }

    /**
     * Setter for videoFileMediaType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MediaFileType $videoFileMediaType
     * @return $this
     */
    public function setVideoFileMediaType(\CWM\BroadWorksConnector\Ocip\Models\MediaFileType $videoFileMediaType)
    {
        $this->videoFileMediaType = $videoFileMediaType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVideoFileMediaType()
    {
        $this->videoFileMediaType = null;
        return $this;
    }

    /**
     * Getter for externalVideoSource
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointRead14
     */
    public function getExternalVideoSource()
    {
        return $this->externalVideoSource instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->externalVideoSource;
    }

    /**
     * Setter for externalVideoSource
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointRead14 $externalVideoSource
     * @return $this
     */
    public function setExternalVideoSource(\CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointRead14 $externalVideoSource)
    {
        $this->externalVideoSource = $externalVideoSource;
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

