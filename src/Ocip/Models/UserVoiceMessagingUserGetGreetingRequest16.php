<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserVoiceMessagingUserGetGreetingRequest16
 *
 * Get the user's voice messaging greeting information.
 *         The response is either a UserVoiceMessagingUserGetGreetingResponse16 or
 * an ErrorResponse.
 *         This request is replaced by: UserVoiceMessagingUserGetGreetingRequest18
 */
class UserVoiceMessagingUserGetGreetingRequest16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

