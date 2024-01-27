<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallForwardingBusyGetRequest
 *
 * Request the user level data associated with Call Forwarding Busy.
 *         The response is either a UserCallForwardingBusyGetResponse or an
 *         ErrorResponse.
 *
 * @see UserCallForwardingBusyGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"70ba216055c15b56c5068151cee2a90b:42","type":"sequence"}]
 */
class UserCallForwardingBusyGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 70ba216055c15b56c5068151cee2a90b:42
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

