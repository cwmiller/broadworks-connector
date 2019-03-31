<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAdminGetPolicyRequest16sp1
 *
 * Requests the service provider administrator's policy settings.
 *                 The response is either ServiceProviderAdminGetPolicyResponse16sp1 or ErrorResponse.
 *                 Replaced by: ServiceProviderAdminGetPolicyRequest17
 *
 * @see ServiceProviderAdminGetPolicyResponse16sp1
 * @see ErrorResponse
 * @see ServiceProviderAdminGetPolicyRequest17
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:14424","type":"sequence"}]
 */
class ServiceProviderAdminGetPolicyRequest16sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:14424
     * @MinLength 1
     * @MaxLength 161
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

