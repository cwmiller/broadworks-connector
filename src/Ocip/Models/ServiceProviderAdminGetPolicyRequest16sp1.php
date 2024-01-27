<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAdminGetPolicyRequest16sp1
 *
 * Requests the service provider administrator's policy settings.
 *         The response is either ServiceProviderAdminGetPolicyResponse16sp1 or ErrorResponse.
 *         Replaced by: ServiceProviderAdminGetPolicyRequest17
 *
 * @see ServiceProviderAdminGetPolicyResponse16sp1
 * @see ErrorResponse
 * @see ServiceProviderAdminGetPolicyRequest17
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:17496","type":"sequence"}]
 */
class ServiceProviderAdminGetPolicyRequest16sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:17496
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

