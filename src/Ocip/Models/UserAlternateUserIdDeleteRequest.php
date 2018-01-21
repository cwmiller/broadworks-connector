<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserAlternateUserIdDeleteRequest
 *
 * Request to delete an alternate user id of a user.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class UserAlternateUserIdDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName alternateUserId
     * @var string|null
     */
    private $alternateUserId = null;

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
     * Getter for alternateUserId
     *
     * @ElementName alternateUserId
     * @return string|null
     */
    public function getAlternateUserId()
    {
        return $this->alternateUserId;
    }

    /**
     * Setter for alternateUserId
     *
     * @ElementName alternateUserId
     * @param string|null $alternateUserId
     * @return $this
     */
    public function setAlternateUserId($alternateUserId)
    {
        $this->alternateUserId = $alternateUserId;
        return $this;
    }


}

