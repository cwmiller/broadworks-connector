<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCommunicationBarringAuthorizationCodeGetListRequest
 *
 * Get a list of Communication Barring Authorization Code for a user.
 *         The response is either a
 * UserCommunicationBarringAuthorizationCodeGetListResponse 
 *         or an ErorResponse.
 */
class UserCommunicationBarringAuthorizationCodeGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

