<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserAnnouncementFileGetAvailableListRequest
 *
 * Get the list of available announcement files for a User from the Announcement
 * Repository,
 *         for Virtual subscribers the list will also include the announcements for
 * it's group.
 */
class UserAnnouncementFileGetAvailableListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName announcementFileType
     * @var string|null
     */
    private $announcementFileType = null;

    /**
     * Getter for userId
     *
     * @ElementName userId
     * @return string|null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Setter for userId
     *
     * @ElementName userId
     * @param string|null $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * Getter for announcementFileType
     *
     * @ElementName announcementFileType
     * @return string|null
     */
    public function getAnnouncementFileType()
    {
        return $this->announcementFileType;
    }

    /**
     * Setter for announcementFileType
     *
     * @ElementName announcementFileType
     * @param string|null $announcementFileType
     * @return $this
     */
    public function setAnnouncementFileType($announcementFileType)
    {
        $this->announcementFileType = $announcementFileType;
        return $this;
    }


}

