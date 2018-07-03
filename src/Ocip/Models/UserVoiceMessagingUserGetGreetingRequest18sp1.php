<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserVoiceMessagingUserGetGreetingRequest18sp1
 *
 * Get the user's voice messaging greeting information.
 *         The response is either a UserVoiceMessagingUserGetGreetingResponse18sp1
 * or an ErrorResponse.
 *         
 *         Replaced by: UserVoiceMessagingUserGetGreetingRequest20 in AS data mode
 *
 * @see UserVoiceMessagingUserGetGreetingResponse18sp1
 * @see ErrorResponse
 * @see UserVoiceMessagingUserGetGreetingRequest20
 */
class UserVoiceMessagingUserGetGreetingRequest18sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

