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

