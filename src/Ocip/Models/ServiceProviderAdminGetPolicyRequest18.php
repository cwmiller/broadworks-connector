<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAdminGetPolicyRequest18
 *
 * Requests the service provider administrator's policy settings.
 *         The response is either ServiceProviderAdminGetPolicyResponse18 or
 * ErrorResponse.
 */
class ServiceProviderAdminGetPolicyRequest18 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

