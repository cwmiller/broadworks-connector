<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AutoAttendantReadMenu
 *
 * The configuration of the automated receptionist greeting
 *         prompt and dialing menu to be used during after business hours.
 */
class AutoAttendantReadMenu
{

    /**
     * @ElementName announcementSelection
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementSelection|null
     */
    private $announcementSelection = null;

    /**
     * @ElementName audioFileDescription
     * @var string|null
     */
    private $audioFileDescription = null;

    /**
     * @ElementName videoFileDescription
     * @var string|null
     */
    private $videoFileDescription = null;

    /**
     * @ElementName enableFirstMenuLevelExtensionDialing
     * @var bool|null
     */
    private $enableFirstMenuLevelExtensionDialing = null;

    /**
     * @ElementName keyConfiguration
     * @var \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantKeyConfiguration[]
     */
    private $keyConfiguration = array(
        
    );

    /**
     * Getter for announcementSelection
     *
     * @ElementName announcementSelection
     * @return \CWM\BroadWorksConnector\Ocip\Models\AnnouncementSelection|null
     */
    public function getAnnouncementSelection()
    {
        return $this->announcementSelection;
    }

    /**
     * Setter for announcementSelection
     *
     * @ElementName announcementSelection
     * @param \CWM\BroadWorksConnector\Ocip\Models\AnnouncementSelection|null $announcementSelection
     * @return $this
     */
    public function setAnnouncementSelection(\CWM\BroadWorksConnector\Ocip\Models\AnnouncementSelection $announcementSelection)
    {
        $this->announcementSelection = $announcementSelection;
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
     * Getter for enableFirstMenuLevelExtensionDialing
     *
     * @ElementName enableFirstMenuLevelExtensionDialing
     * @return bool|null
     */
    public function getEnableFirstMenuLevelExtensionDialing()
    {
        return $this->enableFirstMenuLevelExtensionDialing;
    }

    /**
     * Setter for enableFirstMenuLevelExtensionDialing
     *
     * @ElementName enableFirstMenuLevelExtensionDialing
     * @param bool|null $enableFirstMenuLevelExtensionDialing
     * @return $this
     */
    public function setEnableFirstMenuLevelExtensionDialing($enableFirstMenuLevelExtensionDialing)
    {
        $this->enableFirstMenuLevelExtensionDialing = $enableFirstMenuLevelExtensionDialing;
        return $this;
    }

    /**
     * Getter for keyConfiguration
     *
     * @ElementName keyConfiguration
     * @return \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantKeyConfiguration[]
     */
    public function getKeyConfiguration()
    {
        return $this->keyConfiguration;
    }

    /**
     * Setter for keyConfiguration
     *
     * @ElementName keyConfiguration
     * @param \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantKeyConfiguration[] $keyConfiguration
     * @return $this
     */
    public function setKeyConfiguration(array $keyConfiguration)
    {
        $this->keyConfiguration = $keyConfiguration;
        return $this;
    }

    /**
     * Adder for keyConfiguration
     *
     * @ElementName keyConfiguration
     * @param \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantKeyConfiguration $keyConfiguration
     * @return $this
     */
    public function addKeyConfiguration($keyConfiguration)
    {
        $this->keyConfiguration []= $keyConfiguration;
        return $this;
    }


}

