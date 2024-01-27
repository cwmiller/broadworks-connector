<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAdminGetRequest
 *
 * Get a system or provisioning administrators profile.
 *         The response is either a SystemAdminGetResponse or an ErrorResponse.
 *         Replaced by: SystemAdminGetRequest22
 *
 * @see SystemAdminGetResponse
 * @see ErrorResponse
 * @see SystemAdminGetRequest22
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:8222","type":"sequence"}]
 */
class SystemAdminGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:8222
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

