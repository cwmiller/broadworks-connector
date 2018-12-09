<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCollaborateMyRoomGetRequest
 *
 * Request collaborate room settings for MyRoom.
 *         The response is either UserCollaborateMyRoomGetResponse or
 *         ErrorResponse.
 *
 * @see UserCollaborateMyRoomGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"1d655a4f2853eddf47018e01b685b65b:592","type":"sequence"}]
 */
class UserCollaborateMyRoomGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 1d655a4f2853eddf47018e01b685b65b:592
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

