<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserGetRequest22V5
 *
 * Request to get the user information.  The response is either a UserGetResponse22V5 or ErrorResponse.
 *         
 *         Replaced by: UserGetRequest22V6
 *
 * @see UserGetResponse22V5
 * @see ErrorResponse
 * @see UserGetRequest22V6
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:17642","type":"sequence"}]
 */
class UserGetRequest22V5 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:17642
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

