<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserAnnouncementFileGetAvailableListRequest
 *
 * Get the list of available announcement files for a User from the Announcement Repository,
 *         for Virtual subscribers the list will also include the announcements for it's group.
 *
 * @Groups [{"id":"53d18cc797d03d802cbc411ad821f1d4:460","type":"sequence"}]
 */
class UserAnnouncementFileGetAvailableListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 53d18cc797d03d802cbc411ad821f1d4:460
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName announcementFileType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileType
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:460
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileType|null
     */
    private $announcementFileType = null;

    /**
     * Getter for userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userId;
    }

    /**
     * Setter for userId
     *
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserId()
    {
        $this->userId = null;
        return $this;
    }

    /**
     * Getter for announcementFileType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileType
     */
    public function getAnnouncementFileType()
    {
        return $this->announcementFileType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->announcementFileType;
    }

    /**
     * Setter for announcementFileType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileType $announcementFileType
     * @return $this
     */
    public function setAnnouncementFileType(\CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileType $announcementFileType)
    {
        $this->announcementFileType = $announcementFileType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAnnouncementFileType()
    {
        $this->announcementFileType = null;
        return $this;
    }


}

