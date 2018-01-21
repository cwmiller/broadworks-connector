<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBroadWorksMobilityMobileIdentityDeleteRequest
 *
 * Delete a mobile identity from the user's list of mobile identities.
 *         The response is either a SuccessResponse or an ErrorResponse. If another
 * Mobile Identity is set to ring mobile only and only has this mobile identity 
 *         in the alerting list, the identity is deleted and ErrorResponse is
 * returned. The ErrorResponse is info type and  contains the affected mobile
 * numbers 
 *         in the summary. 
 *         When a delete request is attempted on the primary mobile identity, the
 * delete will fail unless it is the last mobile identity in the user's list.
 */
class UserBroadWorksMobilityMobileIdentityDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

