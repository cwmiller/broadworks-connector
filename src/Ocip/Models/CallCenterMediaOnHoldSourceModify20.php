<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterMediaOnHoldSourceModify20
 *
 * Contains the call center media on hold source configuration.
 */
class CallCenterMediaOnHoldSourceModify20
{

    /**
     * @ElementName audioMessageSourceSelection
     * @var string|null
     */
    private $audioMessageSourceSelection = null;

    /**
     * @ElementName audioUrlList
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify|null
     */
    private $audioUrlList = null;

    /**
     * @ElementName audioFileList
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify20|null
     */
    private $audioFileList = null;

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
     * @ElementName videoUrlList
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify|null
     */
    private $videoUrlList = null;

    /**
     * @ElementName videoFileList
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify20|null
     */
    private $videoFileList = null;

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
     * Getter for audioUrlList
     *
     * @ElementName audioUrlList
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify|null
     */
    public function getAudioUrlList()
    {
        return $this->audioUrlList;
    }

    /**
     * Setter for audioUrlList
     *
     * @ElementName audioUrlList
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify|null $audioUrlList
     * @return $this
     */
    public function setAudioUrlList($audioUrlList)
    {
        $this->audioUrlList = $audioUrlList;
        return $this;
    }

    /**
     * Getter for audioFileList
     *
     * @ElementName audioFileList
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify20|null
     */
    public function getAudioFileList()
    {
        return $this->audioFileList;
    }

    /**
     * Setter for audioFileList
     *
     * @ElementName audioFileList
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify20|null $audioFileList
     * @return $this
     */
    public function setAudioFileList($audioFileList)
    {
        $this->audioFileList = $audioFileList;
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
     * Getter for videoUrlList
     *
     * @ElementName videoUrlList
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify|null
     */
    public function getVideoUrlList()
    {
        return $this->videoUrlList;
    }

    /**
     * Setter for videoUrlList
     *
     * @ElementName videoUrlList
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify|null $videoUrlList
     * @return $this
     */
    public function setVideoUrlList($videoUrlList)
    {
        $this->videoUrlList = $videoUrlList;
        return $this;
    }

    /**
     * Getter for videoFileList
     *
     * @ElementName videoFileList
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify20|null
     */
    public function getVideoFileList()
    {
        return $this->videoFileList;
    }

    /**
     * Setter for videoFileList
     *
     * @ElementName videoFileList
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify20|null $videoFileList
     * @return $this
     */
    public function setVideoFileList($videoFileList)
    {
        $this->videoFileList = $videoFileList;
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

