<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAdminGetPolicyRequest17sp3
 *
 * Requests the Group administrator's policy settings.
 *         The response is either GroupAdminGetPolicyResponse17sp3 or ErrorResponse.
 *
 * @see GroupAdminGetPolicyResponse17sp3
 * @see ErrorResponse
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:3403","type":"sequence"}]
 */
class GroupAdminGetPolicyRequest17sp3 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:3403
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

