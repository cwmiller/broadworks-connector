<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserGetRequest23
 *
 * Request to get the user information.  The response is either 
 *         UserGetResponse23 or ErrorResponse.
 *         Replaced by UserGetRequest23v2.
 *
 * @see UserGetResponse23
 * @see ErrorResponse
 * @see UserGetRequest23v2
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:20398","type":"sequence"}]
 */
class UserGetRequest23 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:20398
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

