<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserNumberPortabilityAnnouncementGetRequest
 *
 * Get the Number Portability Announcement attributes for the user.
 *         The response is either UserNumberPortabilityAnnouncementGetResponse or
 * ErrorResponse.
 *
 * @see UserNumberPortabilityAnnouncementGetResponse
 * @see ErrorResponse
 */
class UserNumberPortabilityAnnouncementGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

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


}

