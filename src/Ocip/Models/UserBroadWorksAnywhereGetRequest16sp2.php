<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBroadWorksAnywhereGetRequest16sp2
 *
 * Get the list of all the BroadWorks Anywhere phone numbers for the user.
 *         The response is either a UserBroadWorksAnywhereGetResponse16sp2 or an
 * ErrorResponse.
 */
class UserBroadWorksAnywhereGetRequest16sp2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

