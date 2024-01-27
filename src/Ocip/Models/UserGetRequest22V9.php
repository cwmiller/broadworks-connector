<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserGetRequest22V9
 *
 * Request to get the user information.  The response is either a UserGetResponse22V9 or ErrorResponse.
 *
 * @see UserGetResponse22V9
 * @see ErrorResponse
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:17704","type":"sequence"}]
 */
class UserGetRequest22V9 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:17704
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

