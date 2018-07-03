<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAdminGetRequest14
 *
 * Get a service provider administrators profile.
 *         The response is either a ServiceProviderAdminGetResponse14 or an
 * ErrorResponse.
 *         Replaced by ServiceProviderAdminGetRequest21sp1.
 *
 * @see ServiceProviderAdminGetResponse14
 * @see ErrorResponse
 * @see ServiceProviderAdminGetRequest21sp1
 */
class ServiceProviderAdminGetRequest14 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * Getter for userId
     *
     * @ElementName userId
     * @return string|null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Setter for userId
     *
     * @ElementName userId
     * @param string|null $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }


}

