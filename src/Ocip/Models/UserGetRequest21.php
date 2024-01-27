<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserGetRequest21
 *
 * Request to get the user information.  
 *         The response is either a UserGetResponse21 or ErrorResponse.
 *         
 *         Replaced by UserGetRequest21sp1
 *
 * @see UserGetResponse21
 * @see ErrorResponse
 * @see UserGetRequest21sp1
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:44138","type":"sequence"}]
 */
class UserGetRequest21 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:44138
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

