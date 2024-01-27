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
 * @Groups [{"id":"fb73488c2ef4ac4400ab213b637d79a9:2608","type":"sequence"}]
 */
class UserModifyUserIdRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group fb73488c2ef4ac4400ab213b637d79a9:2608
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName newUserId
     * @Type string
     * @Group fb73488c2ef4ac4400ab213b637d79a9:2608
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $newUserId = null;

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

    /**
     * Getter for newUserId
     *
     * @return string
     */
    public function getNewUserId()
    {
        return $this->newUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->newUserId;
    }

    /**
     * Setter for newUserId
     *
     * @param string $newUserId
     * @return $this
     */
    public function setNewUserId($newUserId)
    {
        $this->newUserId = $newUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNewUserId()
    {
        $this->newUserId = null;
        return $this;
    }
}

