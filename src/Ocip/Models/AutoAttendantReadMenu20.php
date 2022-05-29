<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AutoAttendantReadMenu20
 *
 * The configuration of the automated receptionist greeting
 *         prompt and dialing menu to be used during after business hours.
 *
 * @Groups [{"id":"ed0640d8ef49eb8b4eaa14d7c6f6c033:658","type":"sequence"}]
 */
class AutoAttendantReadMenu20
{

    /**
     * @ElementName announcementSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AnnouncementSelection
     * @Group ed0640d8ef49eb8b4eaa14d7c6f6c033:658
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementSelection|null
     */
    protected $announcementSelection = null;

    /**
     * @ElementName audioFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey
     * @Optional
     * @Group ed0640d8ef49eb8b4eaa14d7c6f6c033:658
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey|null
     */
    protected $audioFile = null;

    /**
     * @ElementName videoFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey
     * @Optional
     * @Group ed0640d8ef49eb8b4eaa14d7c6f6c033:658
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey|null
     */
    protected $videoFile = null;

    /**
     * @ElementName enableFirstMenuLevelExtensionDialing
     * @Type bool
     * @Group ed0640d8ef49eb8b4eaa14d7c6f6c033:658
     * @var bool|null
     */
    protected $enableFirstMenuLevelExtensionDialing = null;

    /**
     * @ElementName keyConfiguration
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantKeyReadConfiguration20
     * @Array
     * @Optional
     * @Group ed0640d8ef49eb8b4eaa14d7c6f6c033:658
     * @var \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantKeyReadConfiguration20[]
     */
    protected $keyConfiguration = array(
        
    );

    /**
     * Getter for announcementSelection
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AnnouncementSelection
     */
    public function getAnnouncementSelection()
    {
        return $this->announcementSelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->announcementSelection;
    }

    /**
     * Setter for announcementSelection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AnnouncementSelection $announcementSelection
     * @return $this
     */
    public function setAnnouncementSelection(\CWM\BroadWorksConnector\Ocip\Models\AnnouncementSelection $announcementSelection)
    {
        $this->announcementSelection = $announcementSelection;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAnnouncementSelection()
    {
        $this->announcementSelection = null;
        return $this;
    }

    /**
     * Getter for audioFile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey
     */
    public function getAudioFile()
    {
        return $this->audioFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->audioFile;
    }

    /**
     * Setter for audioFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey $audioFile
     * @return $this
     */
    public function setAudioFile(\CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey $audioFile)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey
     */
    public function getVideoFile()
    {
        return $this->videoFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->videoFile;
    }

    /**
     * Setter for videoFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey $videoFile
     * @return $this
     */
    public function setVideoFile(\CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey $videoFile)
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
     * Getter for enableFirstMenuLevelExtensionDialing
     *
     * @return bool
     */
    public function getEnableFirstMenuLevelExtensionDialing()
    {
        return $this->enableFirstMenuLevelExtensionDialing instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableFirstMenuLevelExtensionDialing;
    }

    /**
     * Setter for enableFirstMenuLevelExtensionDialing
     *
     * @param bool $enableFirstMenuLevelExtensionDialing
     * @return $this
     */
    public function setEnableFirstMenuLevelExtensionDialing($enableFirstMenuLevelExtensionDialing)
    {
        $this->enableFirstMenuLevelExtensionDialing = $enableFirstMenuLevelExtensionDialing;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableFirstMenuLevelExtensionDialing()
    {
        $this->enableFirstMenuLevelExtensionDialing = null;
        return $this;
    }

    /**
     * Getter for keyConfiguration
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantKeyReadConfiguration20[]
     */
    public function getKeyConfiguration()
    {
        return $this->keyConfiguration instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->keyConfiguration;
    }

    /**
     * Setter for keyConfiguration
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantKeyReadConfiguration20[] $keyConfiguration
     * @return $this
     */
    public function setKeyConfiguration(array $keyConfiguration)
    {
        $this->keyConfiguration = $keyConfiguration;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetKeyConfiguration()
    {
        $this->keyConfiguration = null;
        return $this;
    }

    /**
     * Adder for keyConfiguration
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantKeyReadConfiguration20 $keyConfiguration
     * @return $this
     */
    public function addKeyConfiguration($keyConfiguration)
    {
        $this->keyConfiguration[] = $keyConfiguration;
        return $this;
    }


}

