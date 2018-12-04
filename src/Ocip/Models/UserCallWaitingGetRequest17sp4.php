<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallWaitingGetRequest17sp4
 *
 * Request the user level data associated with Call Waiting.
 *         The response is either a UserCallWaitingGetResponse17sp4 or an
 *         ErrorResponse.
 *
 * @see UserCallWaitingGetResponse17sp4
 * @see ErrorResponse
 * @Groups [{"id":"2ac069c193b2fa3e8e56b9a8c28151b7:90","type":"sequence"}]
 */
class UserCallWaitingGetRequest17sp4 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 2ac069c193b2fa3e8e56b9a8c28151b7:90
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

