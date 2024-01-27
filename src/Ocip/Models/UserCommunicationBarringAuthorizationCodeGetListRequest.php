<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCommunicationBarringAuthorizationCodeGetListRequest
 *
 * Get a list of Communication Barring Authorization Code for a user.
 *         The response is either a UserCommunicationBarringAuthorizationCodeGetListResponse 
 *         or an ErorResponse.
 *
 * @see UserCommunicationBarringAuthorizationCodeGetListResponse
 * @see ErorResponse
 * @Groups [{"id":"fb73488c2ef4ac4400ab213b637d79a9:1182","type":"sequence"}]
 */
class UserCommunicationBarringAuthorizationCodeGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1182
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

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

