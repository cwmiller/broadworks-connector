<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAdminGetPolicyRequest18
 *
 * Requests the service provider administrator's policy settings.
 *         The response is either ServiceProviderAdminGetPolicyResponse18 or ErrorResponse.
 *         
 *         Replaced by: ServiceProviderAdminGetPolicyRequest20 in AS data mode
 *
 * @see ServiceProviderAdminGetPolicyResponse18
 * @see ErrorResponse
 * @see ServiceProviderAdminGetPolicyRequest20
 * @Groups [{"id":"bb12a3589ab4748963f28f7ac9310f70:2362","type":"sequence"}]
 */
class ServiceProviderAdminGetPolicyRequest18 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group bb12a3589ab4748963f28f7ac9310f70:2362
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

