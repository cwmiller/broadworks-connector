<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserNumberPortabilityAnnouncementGetRequest
 *
 * Get the Number Portability Announcement attributes for the user.
 *         The response is either UserNumberPortabilityAnnouncementGetResponse or ErrorResponse.
 *
 * @see UserNumberPortabilityAnnouncementGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"522c098907e72f4cd4af52b0c730f9c6:43","type":"sequence"}]
 */
class UserNumberPortabilityAnnouncementGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 522c098907e72f4cd4af52b0c730f9c6:43
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

