<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserGetRequest14sp9
 *
 * Request to get the user information.  The response is either
 * UserGetResponse14sp4
 *             or ErrorResponse.
 *
 * @see UserGetResponse14sp4
 * @see ErrorResponse
 */
class UserGetRequest14sp9 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

