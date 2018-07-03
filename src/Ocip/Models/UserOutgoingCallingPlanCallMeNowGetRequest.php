<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserOutgoingCallingPlanCallMeNowGetRequest
 *
 * Request the Call Me Now call permissions for a user.
 *         The response is either a UserOutgoingCallingPlanCallMeNowGetResponse or
 * an ErrorResponse.
 *
 * @see UserOutgoingCallingPlanCallMeNowGetResponse
 * @see ErrorResponse
 */
class UserOutgoingCallingPlanCallMeNowGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

