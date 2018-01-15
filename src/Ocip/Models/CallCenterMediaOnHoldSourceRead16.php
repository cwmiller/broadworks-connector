<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterMediaOnHoldSourceRead16
 *
 * Contains the call center media on hold source configuration.
 */
class CallCenterMediaOnHoldSourceRead16
{

    /**
     * @ElementName audioMessageSourceSelection
     * @var string|null
     */
    private $audioMessageSourceSelection = null;

    /**
     * @ElementName audioFileUrl
     * @var string|null
     */
    private $audioFileUrl = null;

    /**
     * @ElementName audioFileDescription
     * @var string|null
     */
    private $audioFileDescription = null;

    /**
     * @ElementName audioFileMediaType
     * @var string|null
     */
    private $audioFileMediaType = null;

    /**
     * @ElementName externalAudioSource
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointRead14|null
     */
    private $externalAudioSource = null;

    /**
     * @ElementName videoMessageSourceSelection
     * @var string|null
     */
    private $videoMessageSourceSelection = null;

    /**
     * @ElementName videoFileUrl
     * @var string|null
     */
    private $videoFileUrl = null;

    /**
     * @ElementName videoFileDescription
     * @var string|null
     */
    private $videoFileDescription = null;

    /**
     * @ElementName videoFileMediaType
     * @var string|null
     */
    private $videoFileMediaType = null;

    /**
     * @ElementName externalVideoSource
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointRead14|null
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
     * Getter for audioFileUrl
     *
     * @ElementName audioFileUrl
     * @return string|null
     */
    public function getAudioFileUrl()
    {
        return $this->audioFileUrl;
    }

    /**
     * Setter for audioFileUrl
     *
     * @ElementName audioFileUrl
     * @param string|null $audioFileUrl
     * @return $this
     */
    public function setAudioFileUrl($audioFileUrl)
    {
        $this->audioFileUrl = $audioFileUrl;
        return $this;
    }

    /**
     * Getter for audioFileDescription
     *
     * @ElementName audioFileDescription
     * @return string|null
     */
    public function getAudioFileDescription()
    {
        return $this->audioFileDescription;
    }

    /**
     * Setter for audioFileDescription
     *
     * @ElementName audioFileDescription
     * @param string|null $audioFileDescription
     * @return $this
     */
    public function setAudioFileDescription($audioFileDescription)
    {
        $this->audioFileDescription = $audioFileDescription;
        return $this;
    }

    /**
     * Getter for audioFileMediaType
     *
     * @ElementName audioFileMediaType
     * @return string|null
     */
    public function getAudioFileMediaType()
    {
        return $this->audioFileMediaType;
    }

    /**
     * Setter for audioFileMediaType
     *
     * @ElementName audioFileMediaType
     * @param string|null $audioFileMediaType
     * @return $this
     */
    public function setAudioFileMediaType($audioFileMediaType)
    {
        $this->audioFileMediaType = $audioFileMediaType;
        return $this;
    }

    /**
     * Getter for externalAudioSource
     *
     * @ElementName externalAudioSource
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointRead14|null
     */
    public function getExternalAudioSource()
    {
        return $this->externalAudioSource;
    }

    /**
     * Setter for externalAudioSource
     *
     * @ElementName externalAudioSource
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointRead14|null $externalAudioSource
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
     * Getter for videoFileUrl
     *
     * @ElementName videoFileUrl
     * @return string|null
     */
    public function getVideoFileUrl()
    {
        return $this->videoFileUrl;
    }

    /**
     * Setter for videoFileUrl
     *
     * @ElementName videoFileUrl
     * @param string|null $videoFileUrl
     * @return $this
     */
    public function setVideoFileUrl($videoFileUrl)
    {
        $this->videoFileUrl = $videoFileUrl;
        return $this;
    }

    /**
     * Getter for videoFileDescription
     *
     * @ElementName videoFileDescription
     * @return string|null
     */
    public function getVideoFileDescription()
    {
        return $this->videoFileDescription;
    }

    /**
     * Setter for videoFileDescription
     *
     * @ElementName videoFileDescription
     * @param string|null $videoFileDescription
     * @return $this
     */
    public function setVideoFileDescription($videoFileDescription)
    {
        $this->videoFileDescription = $videoFileDescription;
        return $this;
    }

    /**
     * Getter for videoFileMediaType
     *
     * @ElementName videoFileMediaType
     * @return string|null
     */
    public function getVideoFileMediaType()
    {
        return $this->videoFileMediaType;
    }

    /**
     * Setter for videoFileMediaType
     *
     * @ElementName videoFileMediaType
     * @param string|null $videoFileMediaType
     * @return $this
     */
    public function setVideoFileMediaType($videoFileMediaType)
    {
        $this->videoFileMediaType = $videoFileMediaType;
        return $this;
    }

    /**
     * Getter for externalVideoSource
     *
     * @ElementName externalVideoSource
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointRead14|null
     */
    public function getExternalVideoSource()
    {
        return $this->externalVideoSource;
    }

    /**
     * Setter for externalVideoSource
     *
     * @ElementName externalVideoSource
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointRead14|null $externalVideoSource
     * @return $this
     */
    public function setExternalVideoSource($externalVideoSource)
    {
        $this->externalVideoSource = $externalVideoSource;
        return $this;
    }


}

