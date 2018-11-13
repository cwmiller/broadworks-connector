<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserIncomingCallingPlanGetRequest
 *
 * Request the user's incoming calling plan settings.
 *         The response is either a UserIncomingCallingPlanGetResponse or an
 * ErrorResponse.
 *
 * @see UserIncomingCallingPlanGetResponse
 * @see ErrorResponse
 */
class UserIncomingCallingPlanGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

