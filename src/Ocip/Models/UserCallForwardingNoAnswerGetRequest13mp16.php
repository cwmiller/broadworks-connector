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
 * @Groups [{"id":"9bba36247a6338c8a1cff754a22a6c6b:44","type":"sequence"}]
 */
class UserCallForwardingNoAnswerGetRequest13mp16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 9bba36247a6338c8a1cff754a22a6c6b:44
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

