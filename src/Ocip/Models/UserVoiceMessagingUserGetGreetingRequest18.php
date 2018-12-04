<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserVoiceMessagingUserGetGreetingRequest18
 *
 * Get the user's voice messaging greeting information.
 *         The response is either a UserVoiceMessagingUserGetGreetingResponse18 or an ErrorResponse.
 *         
 *         Replaced by UserVoiceMessagingUserGetGreetingRequest18sp1 in AS data mode
 *
 * @see UserVoiceMessagingUserGetGreetingResponse18
 * @see ErrorResponse
 * @see UserVoiceMessagingUserGetGreetingRequest18sp1
 * @Groups [{"id":"499b56264fbe226bfef3c338c8d4750d:5711","type":"sequence"}]
 */
class UserVoiceMessagingUserGetGreetingRequest18 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 499b56264fbe226bfef3c338c8d4750d:5711
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

