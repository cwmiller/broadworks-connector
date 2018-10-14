<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterMediaOnHoldSourceRead20
 *
 * Contains the call center media on hold source configuration.
 */
class CallCenterMediaOnHoldSourceRead20
{

    /**
     * @ElementName audioMessageSourceSelection
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldMessageSelection|null
     */
    private $audioMessageSourceSelection = null;

    /**
     * @ElementName audioUrlList
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLList|null
     */
    private $audioUrlList = null;

    /**
     * @ElementName audioFileList
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListRead20|null
     */
    private $audioFileList = null;

    /**
     * @ElementName externalAudioSource
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointWithPortNumberRead|null
     */
    private $externalAudioSource = null;

    /**
     * @ElementName videoMessageSourceSelection
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldMessageSelection|null
     */
    private $videoMessageSourceSelection = null;

    /**
     * @ElementName videoUrlList
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLList|null
     */
    private $videoUrlList = null;

    /**
     * @ElementName videoFileList
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListRead20|null
     */
    private $videoFileList = null;

    /**
     * @ElementName externalVideoSource
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointWithPortNumberRead|null
     */
    private $externalVideoSource = null;

    /**
     * Getter for audioMessageSourceSelection
     *
     * @ElementName audioMessageSourceSelection
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldMessageSelection|null
     */
    public function getAudioMessageSourceSelection()
    {
        return $this->audioMessageSourceSelection;
    }

    /**
     * Setter for audioMessageSourceSelection
     *
     * @ElementName audioMessageSourceSelection
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldMessageSelection|null $audioMessageSourceSelection
     * @return $this
     */
    public function setAudioMessageSourceSelection(\CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldMessageSelection $audioMessageSourceSelection)
    {
        $this->audioMessageSourceSelection = $audioMessageSourceSelection;
        return $this;
    }

    /**
     * Getter for audioUrlList
     *
     * @ElementName audioUrlList
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLList|null
     */
    public function getAudioUrlList()
    {
        return $this->audioUrlList;
    }

    /**
     * Setter for audioUrlList
     *
     * @ElementName audioUrlList
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLList|null $audioUrlList
     * @return $this
     */
    public function setAudioUrlList(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLList $audioUrlList)
    {
        $this->audioUrlList = $audioUrlList;
        return $this;
    }

    /**
     * Getter for audioFileList
     *
     * @ElementName audioFileList
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListRead20|null
     */
    public function getAudioFileList()
    {
        return $this->audioFileList;
    }

    /**
     * Setter for audioFileList
     *
     * @ElementName audioFileList
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListRead20|null $audioFileList
     * @return $this
     */
    public function setAudioFileList(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListRead20 $audioFileList)
    {
        $this->audioFileList = $audioFileList;
        return $this;
    }

    /**
     * Getter for externalAudioSource
     *
     * @ElementName externalAudioSource
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointWithPortNumberRead|null
     */
    public function getExternalAudioSource()
    {
        return $this->externalAudioSource;
    }

    /**
     * Setter for externalAudioSource
     *
     * @ElementName externalAudioSource
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointWithPortNumberRead|null $externalAudioSource
     * @return $this
     */
    public function setExternalAudioSource(\CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointWithPortNumberRead $externalAudioSource)
    {
        $this->externalAudioSource = $externalAudioSource;
        return $this;
    }

    /**
     * Getter for videoMessageSourceSelection
     *
     * @ElementName videoMessageSourceSelection
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldMessageSelection|null
     */
    public function getVideoMessageSourceSelection()
    {
        return $this->videoMessageSourceSelection;
    }

    /**
     * Setter for videoMessageSourceSelection
     *
     * @ElementName videoMessageSourceSelection
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldMessageSelection|null $videoMessageSourceSelection
     * @return $this
     */
    public function setVideoMessageSourceSelection(\CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldMessageSelection $videoMessageSourceSelection)
    {
        $this->videoMessageSourceSelection = $videoMessageSourceSelection;
        return $this;
    }

    /**
     * Getter for videoUrlList
     *
     * @ElementName videoUrlList
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLList|null
     */
    public function getVideoUrlList()
    {
        return $this->videoUrlList;
    }

    /**
     * Setter for videoUrlList
     *
     * @ElementName videoUrlList
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLList|null $videoUrlList
     * @return $this
     */
    public function setVideoUrlList(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLList $videoUrlList)
    {
        $this->videoUrlList = $videoUrlList;
        return $this;
    }

    /**
     * Getter for videoFileList
     *
     * @ElementName videoFileList
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListRead20|null
     */
    public function getVideoFileList()
    {
        return $this->videoFileList;
    }

    /**
     * Setter for videoFileList
     *
     * @ElementName videoFileList
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListRead20|null $videoFileList
     * @return $this
     */
    public function setVideoFileList(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListRead20 $videoFileList)
    {
        $this->videoFileList = $videoFileList;
        return $this;
    }

    /**
     * Getter for externalVideoSource
     *
     * @ElementName externalVideoSource
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointWithPortNumberRead|null
     */
    public function getExternalVideoSource()
    {
        return $this->externalVideoSource;
    }

    /**
     * Setter for externalVideoSource
     *
     * @ElementName externalVideoSource
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointWithPortNumberRead|null $externalVideoSource
     * @return $this
     */
    public function setExternalVideoSource(\CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointWithPortNumberRead $externalVideoSource)
    {
        $this->externalVideoSource = $externalVideoSource;
        return $this;
    }


}

