<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallForwardingNoAnswerGetRequest13mp16
 *
 * Request the user level data associated with Call Forwarding No Answer.
 *         The response is either a UserCallForwardingNoAnswerGetResponse13mp16 or
 * an
 *         ErrorResponse.
 *
 * @see UserCallForwardingNoAnswerGetResponse13
 * @see ErrorResponse
 */
class UserCallForwardingNoAnswerGetRequest13mp16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * Getter for userId
     *
     * @ElementName userId
     * @return string|null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Setter for userId
     *
     * @ElementName userId
     * @param string|null $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }


}

