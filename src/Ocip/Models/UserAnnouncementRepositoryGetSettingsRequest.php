<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserAnnouncementRepositoryGetSettingsRequest
 *
 * Return the disk space being used.
 *         The response is either a UserAnnouncementRepositoryGetSettingsResponse or ErrorResponse
 *
 * @see UserAnnouncementRepositoryGetSettingsResponse
 * @see ErrorResponse
 * @Groups [{"id":"fb73488c2ef4ac4400ab213b637d79a9:787","type":"sequence"}]
 */
class UserAnnouncementRepositoryGetSettingsRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group fb73488c2ef4ac4400ab213b637d79a9:787
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

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

