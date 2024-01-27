<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterMediaOnHoldSourceModify17
 *
 * Contains the call center media on hold source
 *         configuration.
 *
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:19131","type":"sequence"}]
 */
class CallCenterMediaOnHoldSourceModify17
{
    /**
     * @ElementName audioMessageSourceSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldMessageSelection
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:19131
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldMessageSelection|null
     */
    protected $audioMessageSourceSelection = null;

    /**
     * @ElementName audioUrlList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:19131
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify|null
     */
    protected $audioUrlList = null;

    /**
     * @ElementName audioFileList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:19131
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify|null
     */
    protected $audioFileList = null;

    /**
     * @ElementName externalAudioSource
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointModify
     * @Nillable
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:19131
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointModify|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $externalAudioSource = null;

    /**
     * @ElementName videoMessageSourceSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldMessageSelection
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:19131
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldMessageSelection|null
     */
    protected $videoMessageSourceSelection = null;

    /**
     * @ElementName videoUrlList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:19131
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify|null
     */
    protected $videoUrlList = null;

    /**
     * @ElementName videoFileList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:19131
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify|null
     */
    protected $videoFileList = null;

    /**
     * @ElementName externalVideoSource
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointModify
     * @Nillable
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:19131
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointModify|null|\CWM\BroadWorksConnector\Ocip\Nil
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify
     */
    public function getAudioUrlList()
    {
        return $this->audioUrlList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->audioUrlList;
    }

    /**
     * Setter for audioUrlList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify $audioUrlList
     * @return $this
     */
    public function setAudioUrlList(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify $audioUrlList)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify
     */
    public function getAudioFileList()
    {
        return $this->audioFileList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->audioFileList;
    }

    /**
     * Setter for audioFileList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify $audioFileList
     * @return $this
     */
    public function setAudioFileList(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify $audioFileList)
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
     * Getter for videoUrlList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify
     */
    public function getVideoUrlList()
    {
        return $this->videoUrlList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->videoUrlList;
    }

    /**
     * Setter for videoUrlList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify $videoUrlList
     * @return $this
     */
    public function setVideoUrlList(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify $videoUrlList)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify
     */
    public function getVideoFileList()
    {
        return $this->videoFileList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->videoFileList;
    }

    /**
     * Setter for videoFileList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify $videoFileList
     * @return $this
     */
    public function setVideoFileList(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify $videoFileList)
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

