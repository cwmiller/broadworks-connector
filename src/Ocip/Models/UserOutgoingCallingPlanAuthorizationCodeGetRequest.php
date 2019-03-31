<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserOutgoingCallingPlanAuthorizationCodeGetRequest
 *
 * Request the authorization code setting for a user.
 *         The response is either a UserOutgoingCallingPlanAuthorizationCodeGetResponse or an ErrorResponse.
 *
 * @see UserOutgoingCallingPlanAuthorizationCodeGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"6f793dfca9bd3d121bb35e0f9cf1cb2e:1083","type":"sequence"}]
 */
class UserOutgoingCallingPlanAuthorizationCodeGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 6f793dfca9bd3d121bb35e0f9cf1cb2e:1083
     * @MinLength 1
     * @MaxLength 161
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

