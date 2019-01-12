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
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:2274","type":"sequence"}]
 */
class UserVoiceMessagingUserGetGreetingRequest18 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group de4d76f01f337fe4694212ec9f771753:2274
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

