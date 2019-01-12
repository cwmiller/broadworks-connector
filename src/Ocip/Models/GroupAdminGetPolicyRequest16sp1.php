<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAdminGetPolicyRequest16sp1
 *
 * Requests the Group administrator's policy settings.
 *         The response is either GroupAdminGetPolicyResponse16sp1 or ErrorResponse.
 *         Replaced by: GroupAdminGetPolicyRequest17
 *
 * @see GroupAdminGetPolicyResponse16sp1
 * @see ErrorResponse
 * @see GroupAdminGetPolicyRequest17
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:12057","type":"sequence"}]
 */
class GroupAdminGetPolicyRequest16sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:12057
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

