<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserInterceptUserGetRequest16
 *
 * Get the user's intercept user service settings.
 *         The response is either a UserInterceptUserGetResponse16 or an
 * ErrorResponse.
 *         Replaced By: UserInterceptUserGetRequest16sp1
 *
 * @see UserInterceptUserGetResponse16
 * @see ErrorResponse
 * @see UserInterceptUserGetRequest16sp1
 */
class UserInterceptUserGetRequest16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

