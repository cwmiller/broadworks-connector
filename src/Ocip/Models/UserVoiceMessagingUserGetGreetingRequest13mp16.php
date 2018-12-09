<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserVoiceMessagingUserGetGreetingRequest13mp16
 *
 * Get the user's voice messaging greeting information.
 *         The response is either a UserVoiceMessagingUserGetGreetingResponse13mp16 or an ErrorResponse.
 *         Replaced By: UserVoiceMessagingUserGetGreetingRequest16
 *
 * @see UserVoiceMessagingUserGetGreetingResponse13mp16
 * @see ErrorResponse
 * @see UserVoiceMessagingUserGetGreetingRequest16
 * @Groups [{"id":"4f0fb68b4d4b3ac50a70eeb01a628dce:37866","type":"sequence"}]
 */
class UserVoiceMessagingUserGetGreetingRequest13mp16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:37866
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

