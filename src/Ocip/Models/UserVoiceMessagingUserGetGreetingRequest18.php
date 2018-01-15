<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserVoiceMessagingUserGetGreetingRequest18
 *
 * Get the user's voice messaging greeting information.
 *         The response is either a UserVoiceMessagingUserGetGreetingResponse18 or
 * an ErrorResponse.
 *         
 *         Replaced by UserVoiceMessagingUserGetGreetingRequest18sp1
 */
class UserVoiceMessagingUserGetGreetingRequest18 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

