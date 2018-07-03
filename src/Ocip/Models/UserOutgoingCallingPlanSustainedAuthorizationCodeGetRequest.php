<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserOutgoingCallingPlanSustainedAuthorizationCodeGetRequest
 *
 * Request the sustained authorization code setting for a user.
 *         The response is either a
 * UserOutgoingCallingPlanSustainedAuthorizationCodeGetResponse or an
 * ErrorResponse.
 *         Engineering Note: This command is used internally by Call Processing.
 *
 * @see UserOutgoingCallingPlanSustainedAuthorizationCodeGetResponse
 * @see ErrorResponse
 */
class UserOutgoingCallingPlanSustainedAuthorizationCodeGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

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


}

