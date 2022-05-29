<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerAdminGetRequest
 *
 * Get a reseller administrators profile.
 *         The response is either a ResellerAdminGetResponse or an ErrorResponse.
 *         Replaced by ResellerAdminGetRequest22
 *
 * @see ResellerAdminGetResponse
 * @see ErrorResponse
 * @see ResellerAdminGetRequest22
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:4427","type":"sequence"}]
 */
class ResellerAdminGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group de4d76f01f337fe4694212ec9f771753:4427
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

