<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserGetRequest19
 *
 * Request to get the user information.  
 *         The response is either UserGetResponse19 or ErrorResponse.
 *
 * @see UserGetResponse19
 * @see ErrorResponse
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:44103","type":"sequence"}]
 */
class UserGetRequest19 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:44103
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

