<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserShInterfaceGetUserIdDataRequest
 *
 * Returns the Sh non-transparent data stored against a userId.
 *         The response is either a UserShInterfaceGetUserIdDataResponse or an ErrorResponse.
 *         
 *         Replaced by: UserShInterfaceGetUserIdDataRequest21sp1 in AS data mode.
 *
 * @see UserShInterfaceGetUserIdDataResponse
 * @see ErrorResponse
 * @see UserShInterfaceGetUserIdDataRequest21sp1
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:18874","type":"sequence"}]
 */
class UserShInterfaceGetUserIdDataRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:18874
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

