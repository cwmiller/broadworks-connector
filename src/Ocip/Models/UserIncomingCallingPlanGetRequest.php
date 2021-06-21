<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserIncomingCallingPlanGetRequest
 *
 * Request the user's incoming calling plan settings.
 *         The response is either a UserIncomingCallingPlanGetListResponse or an ErrorResponse.
 *
 * @see UserIncomingCallingPlanGetListResponse
 * @see ErrorResponse
 * @Groups [{"id":"3dd296d55b56269ae23d86a934b8b35c:98","type":"sequence"}]
 */
class UserIncomingCallingPlanGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 3dd296d55b56269ae23d86a934b8b35c:98
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

