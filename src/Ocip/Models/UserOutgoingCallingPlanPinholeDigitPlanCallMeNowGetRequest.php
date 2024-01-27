<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserOutgoingCallingPlanPinholeDigitPlanCallMeNowGetRequest
 *
 * Request the Call Me Now permissions for Pinhole digit patterns for a user.
 *         The response is either a UserOutgoingCallingPlanPinholeDigitPlanCallMeNowGetResponse or an ErrorResponse.
 *
 * @see UserOutgoingCallingPlanPinholeDigitPlanCallMeNowGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"a63afa661ee5c74f4700e562e88c66d0:1381","type":"sequence"}]
 */
class UserOutgoingCallingPlanPinholeDigitPlanCallMeNowGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group a63afa661ee5c74f4700e562e88c66d0:1381
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

