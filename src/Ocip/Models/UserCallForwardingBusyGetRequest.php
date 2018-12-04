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
 * @Groups [{"id":"cae6d0030771dca635e76f4f2a530c69:42","type":"sequence"}]
 */
class UserCallForwardingBusyGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group cae6d0030771dca635e76f4f2a530c69:42
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

