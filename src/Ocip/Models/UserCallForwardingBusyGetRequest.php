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
 * @Groups [{"id":"e7d595471b9d1aa19c8306be64e2a10a:42","type":"sequence"}]
 */
class UserCallForwardingBusyGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group e7d595471b9d1aa19c8306be64e2a10a:42
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

