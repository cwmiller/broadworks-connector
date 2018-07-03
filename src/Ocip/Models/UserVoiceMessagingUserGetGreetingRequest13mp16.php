<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserVoiceMessagingUserGetGreetingRequest13mp16
 *
 * Get the user's voice messaging greeting information.
 *         The response is either a UserVoiceMessagingUserGetGreetingResponse13mp16
 * or an ErrorResponse.
 *         Replaced By: UserVoiceMessagingUserGetGreetingRequest16
 *
 * @see UserVoiceMessagingUserGetGreetingResponse13mp16
 * @see ErrorResponse
 * @see UserVoiceMessagingUserGetGreetingRequest16
 */
class UserVoiceMessagingUserGetGreetingRequest13mp16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

