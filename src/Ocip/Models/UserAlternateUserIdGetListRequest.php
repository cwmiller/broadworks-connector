<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserAlternateUserIdGetListRequest
 *
 * Request to get the user id and the list of alternate user ids of an user.
 *         The response is either UserAlternateUserIdGetListResponse or
 * ErrorResponse.
 *         The "userId" can be either the user Id or an alternate user Id.
 *
 * @see UserAlternateUserIdGetListResponse
 * @see ErrorResponse
 */
class UserAlternateUserIdGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
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

