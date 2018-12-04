<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAdminGetPolicyRequest19sp1
 *
 * Requests the Group administrator's policy settings.
 *         The response is either GroupAdminGetPolicyResponse19sp1 or ErrorResponse.
 *
 * @see GroupAdminGetPolicyResponse19sp1
 * @see ErrorResponse
 * @Groups [{"id":"499b56264fbe226bfef3c338c8d4750d:278","type":"sequence"}]
 */
class GroupAdminGetPolicyRequest19sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 499b56264fbe226bfef3c338c8d4750d:278
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

