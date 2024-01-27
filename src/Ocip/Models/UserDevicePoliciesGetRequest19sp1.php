<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserDevicePoliciesGetRequest19sp1
 *
 * Request the user level data associated with Device Policy.
 *           The response is either a UserDevicePoliciesGetResponse19sp1 or an
 *           ErrorResponse.
 *
 * @see UserDevicePoliciesGetResponse19sp1
 * @see ErrorResponse
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:42832","type":"sequence"}]
 */
class UserDevicePoliciesGetRequest19sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:42832
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

