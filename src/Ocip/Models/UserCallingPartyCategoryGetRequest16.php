<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallingPartyCategoryGetRequest16
 *
 * Request the user level data associated with Calling Party Category.
 *         The response is either a UserCallingPartyCategoryGetResponse16 or an
 *         ErrorResponse.
 */
class UserCallingPartyCategoryGetRequest16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

