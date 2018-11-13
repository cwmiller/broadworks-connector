<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserOutgoingCallingPlanPinholeDigitPlanRedirectingGetRequest
 *
 * Request the redirecting permissions for Pinhole digit patterns for a user.
 *         The response is either a
 * UserOutgoingCallingPlanPinholeDigitPlanRedirectingGetResponse or an
 * ErrorResponse.
 *
 * @see UserOutgoingCallingPlanPinholeDigitPlanRedirectingGetResponse
 * @see ErrorResponse
 */
class UserOutgoingCallingPlanPinholeDigitPlanRedirectingGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @var string|null
     */
    private $userId = null;

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

