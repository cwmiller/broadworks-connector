<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAutoAttendantSubmenuGetResponse
 *
 * Response to GroupAutoAttendantSubmenuGetRequest.
 *         Contains AutoAttendant submenu information.
 *         
 *         Replaced by: GroupAutoAttendantSubmenuGetResponse20 in AS data mode
 *
 * @see GroupAutoAttendantSubmenuGetRequest
 * @see GroupAutoAttendantSubmenuGetResponse20
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:1396","type":"sequence"}]
 */
class GroupAutoAttendantSubmenuGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName announcementSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AnnouncementSelection
     * @Group de4d76f01f337fe4694212ec9f771753:1396
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementSelection|null
     */
    private $announcementSelection = null;

    /**
     * @ElementName audioFileDescription
     * @Type string
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:1396
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    private $audioFileDescription = null;

    /**
     * @ElementName audioMediaType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MediaFileType
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:1396
     * @var \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    private $audioMediaType = null;

    /**
     * @ElementName videoFileDescription
     * @Type string
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:1396
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    private $videoFileDescription = null;

    /**
     * @ElementName videoMediaType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MediaFileType
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:1396
     * @var \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    private $videoMediaType = null;

    /**
     * @ElementName enableLevelExtensionDialing
     * @Type bool
     * @Group de4d76f01f337fe4694212ec9f771753:1396
     * @var bool|null
     */
    private $enableLevelExtensionDialing = null;

    /**
     * @ElementName keyConfiguration
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantKeyReadConfiguration19
     * @Array
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:1396
     * @var \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantKeyReadConfiguration19[]
     */
    private $keyConfiguration = array(
        
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
     * Getter for audioMediaType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MediaFileType
     */
    public function getAudioMediaType()
    {
        return $this->audioMediaType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->audioMediaType;
    }

    /**
     * Setter for audioMediaType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MediaFileType $audioMediaType
     * @return $this
     */
    public function setAudioMediaType(\CWM\BroadWorksConnector\Ocip\Models\MediaFileType $audioMediaType)
    {
        $this->audioMediaType = $audioMediaType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAudioMediaType()
    {
        $this->audioMediaType = null;
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
     * Getter for videoMediaType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MediaFileType
     */
    public function getVideoMediaType()
    {
        return $this->videoMediaType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->videoMediaType;
    }

    /**
     * Setter for videoMediaType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MediaFileType $videoMediaType
     * @return $this
     */
    public function setVideoMediaType(\CWM\BroadWorksConnector\Ocip\Models\MediaFileType $videoMediaType)
    {
        $this->videoMediaType = $videoMediaType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVideoMediaType()
    {
        $this->videoMediaType = null;
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantKeyReadConfiguration19[]
     */
    public function getKeyConfiguration()
    {
        return $this->keyConfiguration instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->keyConfiguration;
    }

    /**
     * Setter for keyConfiguration
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantKeyReadConfiguration19[] $keyConfiguration
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantKeyReadConfiguration19 $keyConfiguration
     * @return $this
     */
    public function addKeyConfiguration($keyConfiguration)
    {
        $this->keyConfiguration[] = $keyConfiguration;
        return $this;
    }


}

