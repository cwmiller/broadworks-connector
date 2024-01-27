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
 * @Groups [{"id":"b4095e83c8aa84e850615ffe7d48b0d6:89","type":"sequence"}]
 */
class UserBroadWorksCommunicatorGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group b4095e83c8aa84e850615ffe7d48b0d6:89
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

