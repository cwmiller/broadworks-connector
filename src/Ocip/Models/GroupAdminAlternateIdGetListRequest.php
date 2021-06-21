<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAdminAlternateIdGetListRequest
 *
 * Request to get the admin id and the list of alternate admin ids of an admin.
 *         The response is either GroupAdminAlternateIdGetListResponse or ErrorResponse.
 *         The "userId" can be either the admin user Id or an alternate admin user Id.
 *
 * @see GroupAdminAlternateIdGetListResponse
 * @see ErrorResponse
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:1451","type":"sequence"}]
 */
class GroupAdminAlternateIdGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:1451
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

