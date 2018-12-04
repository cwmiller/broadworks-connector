<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBroadWorksMobilityMobileIdentityDeleteRequest
 *
 * Delete a mobile identity from the user's list of mobile identities.
 *         The response is either a SuccessResponse or an ErrorResponse. If another Mobile Identity is set to ring mobile only and only has this mobile identity 
 *         in the alerting list, the identity is deleted and ErrorResponse is returned. The ErrorResponse is info type and  contains the affected mobile numbers 
 *         in the summary. 
 *         When a delete request is attempted on the primary mobile identity, the delete will fail unless it is the last mobile identity in the user's list.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see ErrorResponse
 * @see ErrorResponse
 * @Groups [{"id":"5d94cb4fd2bf88ffe6e6d2193917a6ff:1223","type":"sequence"}]
 */
class UserBroadWorksMobilityMobileIdentityDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 5d94cb4fd2bf88ffe6e6d2193917a6ff:1223
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName mobileNumber
     * @Type string
     * @Group 5d94cb4fd2bf88ffe6e6d2193917a6ff:1223
     * @var string|null
     */
    private $mobileNumber = null;

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

