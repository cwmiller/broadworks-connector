<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAdminGetPolicyRequest14sp1
 *
 * Requests the Group administrator's policy settings.
 *         The response is either GroupAdminGetPolicyResponse14sp1 or
 * ErrorResponse.
 *
 * @see GroupAdminGetPolicyResponse14sp1
 * @see ErrorResponse
 */
class GroupAdminGetPolicyRequest14sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

