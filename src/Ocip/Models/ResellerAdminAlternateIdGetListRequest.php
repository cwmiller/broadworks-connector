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
 * @Groups [{"id":"d45e381d6dbac771631649063122a42e:152","type":"sequence"}]
 */
class ResellerAdminAlternateIdGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group d45e381d6dbac771631649063122a42e:152
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

