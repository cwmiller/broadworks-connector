<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAdminGetRequest14
 *
 * Get a service provider administrators profile.
 *         The response is either a ServiceProviderAdminGetResponse14 or an ErrorResponse.
 *         Replaced by ServiceProviderAdminGetRequest21sp1.
 *
 * @see ServiceProviderAdminGetResponse14
 * @see ErrorResponse
 * @see ServiceProviderAdminGetRequest21sp1
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:6007","type":"sequence"}]
 */
class ServiceProviderAdminGetRequest14 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:6007
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

