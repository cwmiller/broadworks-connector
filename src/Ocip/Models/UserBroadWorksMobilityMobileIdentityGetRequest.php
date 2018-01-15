<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBroadWorksMobilityMobileIdentityGetRequest
 *
 * Get the settings for a user's specified mobile identity.
 *         The response is either a UserBroadWorksMobilityMobileIdentityGetResponse
 * or an ErrorResponse.
 */
class UserBroadWorksMobilityMobileIdentityGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName mobileNumber
     * @var string|null
     */
    private $mobileNumber = null;

    /**
     * Getter for userId
     *
     * @ElementName userId
     * @return string|null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Setter for userId
     *
     * @ElementName userId
     * @param string|null $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * Getter for mobileNumber
     *
     * @ElementName mobileNumber
     * @return string|null
     */
    public function getMobileNumber()
    {
        return $this->mobileNumber;
    }

    /**
     * Setter for mobileNumber
     *
     * @ElementName mobileNumber
     * @param string|null $mobileNumber
     * @return $this
     */
    public function setMobileNumber($mobileNumber)
    {
        $this->mobileNumber = $mobileNumber;
        return $this;
    }


}

