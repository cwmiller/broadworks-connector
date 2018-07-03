<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallParkGetRequest
 *
 * Identifies which Call Park group the user belongs to if any and the list of
 * users in the group.
 *         The response is either UserCallParkGetResponse or ErrorResponse.
 *
 * @see UserCallParkGetResponse
 * @see ErrorResponse
 */
class UserCallParkGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

