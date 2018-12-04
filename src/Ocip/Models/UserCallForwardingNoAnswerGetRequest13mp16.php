<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallForwardingNoAnswerGetRequest13mp16
 *
 * Request the user level data associated with Call Forwarding No Answer.
 *         The response is either a UserCallForwardingNoAnswerGetResponse13mp16 or an
 *         ErrorResponse.
 *
 * @see UserCallForwardingNoAnswerGetResponse13mp16
 * @see ErrorResponse
 * @Groups [{"id":"5736afcda3c4910ba5a628d12b43abcb:44","type":"sequence"}]
 */
class UserCallForwardingNoAnswerGetRequest13mp16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 5736afcda3c4910ba5a628d12b43abcb:44
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

