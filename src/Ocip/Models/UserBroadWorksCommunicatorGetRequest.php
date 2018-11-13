<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBroadWorksCommunicatorGetRequest
 *
 * Request to get the Configuration Server for a specified user.
 *         The response is either a UserBroadWorksCommunicatorGetResponse or an
 * ErrorResponse.
 *
 * @see UserBroadWorksCommunicatorGetResponse
 * @see ErrorResponse
 */
class UserBroadWorksCommunicatorGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

