<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCollaborateRoomListGetRequest
 *
 * Request the list of collaborate room instances for this specific user. 
 *         The response is either a UserCollaborateRoomListGetResponse or an
 *         ErrorResponse.
 *
 * @see UserCollaborateRoomListGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"bc805893b9cc7e3e01eec64e9ad62768:994","type":"sequence"}]
 */
class UserCollaborateRoomListGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group bc805893b9cc7e3e01eec64e9ad62768:994
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

