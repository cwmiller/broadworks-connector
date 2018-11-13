<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCommunicationBarringAuthorizationCodeGetListRequest
 *
 * Get a list of Communication Barring Authorization Code for a user.
 *         The response is either a
 * UserCommunicationBarringAuthorizationCodeGetListResponse 
 *         or an ErorResponse.
 *
 * @see UserCommunicationBarringAuthorizationCodeGetListResponse
 * @see ErorResponse
 */
class UserCommunicationBarringAuthorizationCodeGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

