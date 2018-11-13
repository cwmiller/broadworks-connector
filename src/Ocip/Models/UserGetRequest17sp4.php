<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserGetRequest17sp4
 *
 * Replaced by: UserGetRequest18
 *         
 *         Request to get the user information.  The response is either 
 *         UserGetResponse17sp4 or ErrorResponse.
 *
 * @see UserGetRequest18
 * @see UserGetResponse17sp4
 * @see ErrorResponse
 */
class UserGetRequest17sp4 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

