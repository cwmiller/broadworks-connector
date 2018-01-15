<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserMusicOnHoldUserGetRequest
 *
 * Request the user level data associated with Music On Hold User.
 *         The response is either a UserMusicOnHoldUserGetResponse or an
 *         ErrorResponse.
 *         Replaced By: UserMusicOnHoldUserGetRequest16
 */
class UserMusicOnHoldUserGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

