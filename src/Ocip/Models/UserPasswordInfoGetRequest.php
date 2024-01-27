<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPasswordInfoGetRequest
 *
 * Request the user's Web password information.
 *         The response is either a UserPasswordInfoGetResponse or an ErrorResponse.
 *           Replaced by: UserPasswordInfoGetRequest22
 *
 * @see UserPasswordInfoGetResponse
 * @see ErrorResponse
 * @see UserPasswordInfoGetRequest22
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:18498","type":"sequence"}]
 */
class UserPasswordInfoGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:18498
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

