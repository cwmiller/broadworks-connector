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
 * @Groups [{"id":"499b56264fbe226bfef3c338c8d4750d:2416","type":"sequence"}]
 */
class ServiceProviderAdminGetRequest14 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 499b56264fbe226bfef3c338c8d4750d:2416
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

