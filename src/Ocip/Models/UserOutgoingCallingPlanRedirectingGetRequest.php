<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserOutgoingCallingPlanRedirectingGetRequest
 *
 * Request the initiating call forwards/transfer permissions for a user.
 *         The response is either a UserOutgoingCallingPlanRedirectingGetResponse
 * or an ErrorResponse.
 *
 * @see UserOutgoingCallingPlanRedirectingGetResponse
 * @see ErrorResponse
 */
class UserOutgoingCallingPlanRedirectingGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

