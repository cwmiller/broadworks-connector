<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserVideoAddOnGetRequest19
 *
 * Get the user's Video Add-On service setting.
 *         The response is either a UserVideoAddOnGetResponse19 or an ErrorResponse.
 *         
 *         Replaced by: UserVideoAddOnGetRequest22.
 *
 * @see UserVideoAddOnGetResponse19
 * @see ErrorResponse
 * @see UserVideoAddOnGetRequest22
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:47783","type":"sequence"}]
 */
class UserVideoAddOnGetRequest19 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:47783
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

