<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserOutgoingCallingPlanDigitPlanRedirectingGetRequest
 *
 * Request the redirecting permissions for digit patterns for a user.
 *         The response is either a UserOutgoingCallingPlanDigitPlanRedirectingGetResponse or an ErrorResponse.
 *
 * @see UserOutgoingCallingPlanDigitPlanRedirectingGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"a63afa661ee5c74f4700e562e88c66d0:1281","type":"sequence"}]
 */
class UserOutgoingCallingPlanDigitPlanRedirectingGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group a63afa661ee5c74f4700e562e88c66d0:1281
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

