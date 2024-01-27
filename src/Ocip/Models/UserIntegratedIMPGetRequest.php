<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserIntegratedIMPGetRequest
 *
 * Get the Integrated IMP specific service attribute for the user.
 *         The response is either UserIntegratedIMPGetResponse or ErrorResponse.
 *         
 *         Replaced by: UserIntegratedIMPGetRequest21sp1
 *
 * @see UserIntegratedIMPGetResponse
 * @see ErrorResponse
 * @see UserIntegratedIMPGetRequest21sp1
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:18249","type":"sequence"}]
 */
class UserIntegratedIMPGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:18249
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

