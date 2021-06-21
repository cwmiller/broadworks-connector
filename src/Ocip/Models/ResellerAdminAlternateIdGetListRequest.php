<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerAdminAlternateIdGetListRequest
 *
 * Request to get the admin id and the list of alternate admin ids of an admin.
 *         The response is either ResellerAdminAlternateIdGetListResponse or ErrorResponse.
 *         The "userId" can be either the admin user Id or an alternate admin user Id.
 *
 * @see ResellerAdminAlternateIdGetListResponse
 * @see ErrorResponse
 * @Groups [{"id":"b009175f2a2a9d38115e319a6ad64d7f:153","type":"sequence"}]
 */
class ResellerAdminAlternateIdGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group b009175f2a2a9d38115e319a6ad64d7f:153
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

