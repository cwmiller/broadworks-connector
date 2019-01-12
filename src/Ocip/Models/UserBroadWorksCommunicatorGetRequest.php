<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBroadWorksCommunicatorGetRequest
 *
 * Request to get the Configuration Server for a specified user.
 *         The response is either a UserBroadWorksCommunicatorGetResponse or an ErrorResponse.
 *
 * @see UserBroadWorksCommunicatorGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"ba512c9f02a5f24a24d49cc945f1524d:89","type":"sequence"}]
 */
class UserBroadWorksCommunicatorGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group ba512c9f02a5f24a24d49cc945f1524d:89
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

