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
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:5629","type":"sequence"}]
 */
class ServiceProviderAdminGetRequest14 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group de4d76f01f337fe4694212ec9f771753:5629
     * @var string|null
     */
    private $userId = null;

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

