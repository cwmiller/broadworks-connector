<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserModifyUserIdRequest
 *
 * Modify the user id of a real or virtual user.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class UserModifyUserIdRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName newUserId
     * @var string|null
     */
    private $newUserId = null;

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
     * Getter for newUserId
     *
     * @ElementName newUserId
     * @return string|null
     */
    public function getNewUserId()
    {
        return $this->newUserId;
    }

    /**
     * Setter for newUserId
     *
     * @ElementName newUserId
     * @param string|null $newUserId
     * @return $this
     */
    public function setNewUserId($newUserId)
    {
        $this->newUserId = $newUserId;
        return $this;
    }


}

