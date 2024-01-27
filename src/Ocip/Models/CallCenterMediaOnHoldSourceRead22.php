<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterMediaOnHoldSourceRead22
 *
 * Contains the call center media on hold source configuration.
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:1067","type":"sequence"}]
 */
class CallCenterMediaOnHoldSourceRead22
{
    /**
     * @ElementName audioMessageSourceSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldMessageSelection
     * @Group 6337d0cfba4de1c83587203c5b0bae54:1067
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldMessageSelection|null
     */
    protected $audioMessageSourceSelection = null;

    /**
     * @ElementName audioUrlList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLList
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:1067
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLList|null
     */
    protected $audioUrlList = null;

    /**
     * @ElementName audioFileList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListRead20
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:1067
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListRead20|null
     */
    protected $audioFileList = null;

    /**
     * @ElementName externalAudioSource
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointWithPortNumberRead22
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:1067
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointWithPortNumberRead22|null
     */
    protected $externalAudioSource = null;

    /**
     * @ElementName videoMessageSourceSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldMessageSelection
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:1067
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldMessageSelection|null
     */
    protected $videoMessageSourceSelection = null;

    /**
     * @ElementName videoUrlList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLList
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:1067
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLList|null
     */
    protected $videoUrlList = null;

    /**
     * @ElementName videoFileList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListRead20
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:1067
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListRead20|null
     */
    protected $videoFileList = null;

    /**
     * @ElementName externalVideoSource
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointWithPortNumberRead22
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:1067
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointWithPortNumberRead22|null
     */
    protected $externalVideoSource = null;

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
     * Getter for audioUrlList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLList
     */
    public function getAudioUrlList()
    {
        return $this->audioUrlList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->audioUrlList;
    }

    /**
     * Setter for audioUrlList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLList $audioUrlList
     * @return $this
     */
    public function setAudioUrlList(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLList $audioUrlList)
    {
        $this->audioUrlList = $audioUrlList;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAudioUrlList()
    {
        $this->audioUrlList = null;
        return $this;
    }

    /**
     * Getter for audioFileList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListRead20
     */
    public function getAudioFileList()
    {
        return $this->audioFileList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->audioFileList;
    }

    /**
     * Setter for audioFileList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListRead20 $audioFileList
     * @return $this
     */
    public function setAudioFileList(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListRead20 $audioFileList)
    {
        $this->audioFileList = $audioFileList;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAudioFileList()
    {
        $this->audioFileList = null;
        return $this;
    }

    /**
     * Getter for externalAudioSource
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointWithPortNumberRead22
     */
    public function getExternalAudioSource()
    {
        return $this->externalAudioSource instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->externalAudioSource;
    }

    /**
     * Setter for externalAudioSource
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointWithPortNumberRead22 $externalAudioSource
     * @return $this
     */
    public function setExternalAudioSource(\CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointWithPortNumberRead22 $externalAudioSource)
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
     * Getter for videoUrlList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLList
     */
    public function getVideoUrlList()
    {
        return $this->videoUrlList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->videoUrlList;
    }

    /**
     * Setter for videoUrlList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLList $videoUrlList
     * @return $this
     */
    public function setVideoUrlList(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLList $videoUrlList)
    {
        $this->videoUrlList = $videoUrlList;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVideoUrlList()
    {
        $this->videoUrlList = null;
        return $this;
    }

    /**
     * Getter for videoFileList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListRead20
     */
    public function getVideoFileList()
    {
        return $this->videoFileList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->videoFileList;
    }

    /**
     * Setter for videoFileList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListRead20 $videoFileList
     * @return $this
     */
    public function setVideoFileList(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListRead20 $videoFileList)
    {
        $this->videoFileList = $videoFileList;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVideoFileList()
    {
        $this->videoFileList = null;
        return $this;
    }

    /**
     * Getter for externalVideoSource
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointWithPortNumberRead22
     */
    public function getExternalVideoSource()
    {
        return $this->externalVideoSource instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->externalVideoSource;
    }

    /**
     * Setter for externalVideoSource
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointWithPortNumberRead22 $externalVideoSource
     * @return $this
     */
    public function setExternalVideoSource(\CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointWithPortNumberRead22 $externalVideoSource)
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

