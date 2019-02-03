<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserAnnouncementRepositoryGetSettingsRequest
 *
 * Return the disk space being used.
 *         The response is either UserAnnouncementRepositoryGetSettingsResponse or ErrorResponse
 *
 * @see UserAnnouncementRepositoryGetSettingsResponse
 * @see ErrorResponse
 * @Groups [{"id":"53d18cc797d03d802cbc411ad821f1d4:725","type":"sequence"}]
 */
class UserAnnouncementRepositoryGetSettingsRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 53d18cc797d03d802cbc411ad821f1d4:725
     * @var string|null
     */
    private $userId = null;

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


}

