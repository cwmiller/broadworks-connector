<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserGetRequest17sp4
 *
 * Replaced by: UserGetRequest18
 *         
 *         Request to get the user information.  
 *         The response is either UserGetResponse17sp4 or ErrorResponse.
 *
 * @see UserGetRequest18
 * @see UserGetResponse17sp4
 * @see ErrorResponse
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:44069","type":"sequence"}]
 */
class UserGetRequest17sp4 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:44069
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

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

