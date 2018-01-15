<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserAlternateNumbersGetRequest
 *
 * Request the user level data associated with Alternate Numbers.
 *         The response is either a UserAlternateNumbersGetResponse or an
 * ErrorResponse.
 */
class UserAlternateNumbersGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

