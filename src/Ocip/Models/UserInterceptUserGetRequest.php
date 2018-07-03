<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserInterceptUserGetRequest
 *
 * Get the user's intercept user service settings.
 *         The response is either a UserInterceptUserGetResponse or an
 * ErrorResponse.
 *         Replaced By: UserInterceptUserGetRequest16
 *
 * @see UserInterceptUserGetResponse
 * @see ErrorResponse
 * @see UserInterceptUserGetRequest16
 */
class UserInterceptUserGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

