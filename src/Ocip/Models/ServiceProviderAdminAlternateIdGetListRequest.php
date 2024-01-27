<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAdminAlternateIdGetListRequest
 *
 * Request to get the admin id and the list of alternate admin ids of an admin.
 *         The response is either ServiceProviderAdminAlternateIdGetListResponse or ErrorResponse.
 *         The "userId" can be either the admin user Id or an alternate admin user Id.
 *
 * @see ServiceProviderAdminAlternateIdGetListResponse
 * @see ErrorResponse
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:1334","type":"sequence"}]
 */
class ServiceProviderAdminAlternateIdGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group e19a9072c2dad499e9f28837da5768db:1334
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

