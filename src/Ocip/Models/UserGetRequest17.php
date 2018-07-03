<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserGetRequest17
 *
 * Replaced by: UserGetRequest17sp4
 *       
 *         Request to get the user information.  The response is either 
 *         UserGetResponse17 or ErrorResponse.
 *
 * @see UserGetRequest17sp4
 * @see UserGetResponse17
 * @see ErrorResponse
 */
class UserGetRequest17 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

