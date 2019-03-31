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
 * @Groups [{"id":"6abb48a2d0672804f15670b4afa7ec02:43","type":"sequence"}]
 */
class UserNumberPortabilityAnnouncementGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 6abb48a2d0672804f15670b4afa7ec02:43
     * @MinLength 1
     * @MaxLength 161
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

