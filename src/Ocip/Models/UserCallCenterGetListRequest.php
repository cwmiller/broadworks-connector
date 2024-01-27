<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallCenterGetListRequest
 *
 * Get the list of call centers the specified user belongs to.
 *         The response is either a UserCallCenterGetListResponse or an ErrorResponse.
 *         Replaced By: UserCallCenterGetRequest
 *
 * @see UserCallCenterGetListResponse
 * @see ErrorResponse
 * @see UserCallCenterGetRequest
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:41029","type":"sequence"}]
 */
class UserCallCenterGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:41029
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

