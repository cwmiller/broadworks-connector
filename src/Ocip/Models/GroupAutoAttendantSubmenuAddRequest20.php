<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAutoAttendantSubmenuAddRequest20
 *
 * Request to add an Auto Attendant submenu instance.
 *         The response is either SuccessResponse or ErrorResponse. 
 *         This request is only valid for Standard auto attendants.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"ec63a55bc41262b2dd33a1f4e8e84674:464","type":"sequence"}]
 */
class GroupAutoAttendantSubmenuAddRequest20 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group ec63a55bc41262b2dd33a1f4e8e84674:464
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $serviceUserId = null;

    /**
     * @ElementName submenuId
     * @Type string
     * @Group ec63a55bc41262b2dd33a1f4e8e84674:464
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $submenuId = null;

    /**
     * @ElementName announcementSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AnnouncementSelection
     * @Group ec63a55bc41262b2dd33a1f4e8e84674:464
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementSelection|null
     */
    protected $announcementSelection = null;

    /**
     * @ElementName audioFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey
     * @Optional
     * @Group ec63a55bc41262b2dd33a1f4e8e84674:464
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey|null
     */
    protected $audioFile = null;

    /**
     * @ElementName videoFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey
     * @Optional
     * @Group ec63a55bc41262b2dd33a1f4e8e84674:464
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey|null
     */
    protected $videoFile = null;

    /**
     * @ElementName enableLevelExtensionDialing
     * @Type bool
     * @Group ec63a55bc41262b2dd33a1f4e8e84674:464
     * @var bool|null
     */
    protected $enableLevelExtensionDialing = null;

    /**
     * @ElementName keyConfiguration
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantKeyConfiguration20
     * @Array
     * @Optional
     * @Group ec63a55bc41262b2dd33a1f4e8e84674:464
     * @var \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantKeyConfiguration20[]
     */
    protected $keyConfiguration = [
        
    ];

    /**
     * Getter for serviceUserId
     *
     * @return string
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @param string $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceUserId()
    {
        $this->serviceUserId = null;
        return $this;
    }

    /**
     * Getter for submenuId
     *
     * @return string
     */
    public function getSubmenuId()
    {
        return $this->submenuId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->submenuId;
    }

    /**
     * Setter for submenuId
     *
     * @param string $submenuId
     * @return $this
     */
    public function setSubmenuId($submenuId)
    {
        $this->submenuId = $submenuId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSubmenuId()
    {
        $this->submenuId = null;
        return $this;
    }

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
     * Getter for enableLevelExtensionDialing
     *
     * @return bool
     */
    public function getEnableLevelExtensionDialing()
    {
        return $this->enableLevelExtensionDialing instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableLevelExtensionDialing;
    }

    /**
     * Setter for enableLevelExtensionDialing
     *
     * @param bool $enableLevelExtensionDialing
     * @return $this
     */
    public function setEnableLevelExtensionDialing($enableLevelExtensionDialing)
    {
        $this->enableLevelExtensionDialing = $enableLevelExtensionDialing;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableLevelExtensionDialing()
    {
        $this->enableLevelExtensionDialing = null;
        return $this;
    }

    /**
     * Getter for keyConfiguration
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantKeyConfiguration20[]
     */
    public function getKeyConfiguration()
    {
        return $this->keyConfiguration instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->keyConfiguration;
    }

    /**
     * Setter for keyConfiguration
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantKeyConfiguration20[] $keyConfiguration
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantKeyConfiguration20 $keyConfiguration
     * @return $this
     */
    public function addKeyConfiguration($keyConfiguration)
    {
        $this->keyConfiguration[] = $keyConfiguration;
        return $this;
    }
}

