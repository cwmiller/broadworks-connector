<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBroadWorksMobilityMobileIdentityGetRequest22
 *
 * Get the settings for a user's specified mobile identity.
 *         The response is either a UserBroadWorksMobilityMobileIdentityGetResponse22 or an ErrorResponse.
 *         Replaced by UserBroadWorksMobilityMobileIdentityGetRequest22V2.
 *
 * @see UserBroadWorksMobilityMobileIdentityGetResponse22
 * @see ErrorResponse
 * @see UserBroadWorksMobilityMobileIdentityGetRequest22V2
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:40733","type":"sequence"}]
 */
class UserBroadWorksMobilityMobileIdentityGetRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:40733
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName mobileNumber
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:40733
     * @MinLength 1
     * @MaxLength 23
     * @var string|null
     */
    protected $mobileNumber = null;

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

    /**
     * Getter for mobileNumber
     *
     * @return string
     */
    public function getMobileNumber()
    {
        return $this->mobileNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mobileNumber;
    }

    /**
     * Setter for mobileNumber
     *
     * @param string $mobileNumber
     * @return $this
     */
    public function setMobileNumber($mobileNumber)
    {
        $this->mobileNumber = $mobileNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMobileNumber()
    {
        $this->mobileNumber = null;
        return $this;
    }
}

