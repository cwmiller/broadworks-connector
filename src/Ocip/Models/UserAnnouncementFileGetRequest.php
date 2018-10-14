<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserAnnouncementFileGetRequest
 *
 * Request to get the announcement repository file information.  
 *         The response is either UserAnnouncementFileGetResponse or ErrorResponse.
 *
 * @see UserAnnouncementFileGetResponse
 * @see ErrorResponse
 */
class UserAnnouncementFileGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName announcementFileKey
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey|null
     */
    private $announcementFileKey = null;

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
     * Getter for announcementFileKey
     *
     * @ElementName announcementFileKey
     * @return \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey|null
     */
    public function getAnnouncementFileKey()
    {
        return $this->announcementFileKey;
    }

    /**
     * Setter for announcementFileKey
     *
     * @ElementName announcementFileKey
     * @param \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey|null $announcementFileKey
     * @return $this
     */
    public function setAnnouncementFileKey(\CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey $announcementFileKey)
    {
        $this->announcementFileKey = $announcementFileKey;
        return $this;
    }


}

