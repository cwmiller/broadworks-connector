<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBroadWorksAnywhereGetRequest
 *
 * Get the list of all the BroadWorks Anywhere phone numbers for the user.
 *         The response is either a UserBroadWorksAnywhereGetResponse or an
 * ErrorResponse.
 *         Replaced by: UserBroadWorksAnywhereGetRequest16sp2
 *
 * @see UserBroadWorksAnywhereGetResponse
 * @see ErrorResponse
 * @see UserBroadWorksAnywhereGetRequest16sp2
 */
class UserBroadWorksAnywhereGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

