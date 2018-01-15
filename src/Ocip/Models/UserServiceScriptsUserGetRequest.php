<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserServiceScriptsUserGetRequest
 *
 * Request the user level data associated with Service Scripts User Configuration.
 *         The response is either a UserServiceScriptsUserGetResponse or an
 * ErrorResponse.
 */
class UserServiceScriptsUserGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

