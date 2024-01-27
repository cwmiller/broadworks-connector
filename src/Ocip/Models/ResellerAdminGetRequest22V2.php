<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerAdminGetRequest22V2
 *
 * Get a reseller administrators profile.
 *         The response is either a ResellerAdminGetResponse22V2 or an ErrorResponse.
 *
 * @see ResellerAdminGetResponse22V2
 * @see ErrorResponse
 * @Groups [{"id":"d45e381d6dbac771631649063122a42e:254","type":"sequence"}]
 */
class ResellerAdminGetRequest22V2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group d45e381d6dbac771631649063122a42e:254
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

