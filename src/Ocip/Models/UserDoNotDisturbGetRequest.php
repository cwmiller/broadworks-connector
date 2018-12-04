<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserDoNotDisturbGetRequest
 *
 * Request the user level data associated with Do Not Disturb.
 *         The response is either a UserDoNotDisturbGetResponse or an
 *         ErrorResponse.
 *
 * @see UserDoNotDisturbGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"fd1c00f3c251856c83a28820f45fb91d:42","type":"sequence"}]
 */
class UserDoNotDisturbGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group fd1c00f3c251856c83a28820f45fb91d:42
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

