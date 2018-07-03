<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserVoiceMessagingUserGetOutgoingSMDIMWIRequest
 *
 * Get the user's voice messaging outgoing SMDI message waiting indicator service
 * setting.
 *         The response is either a
 * UserVoiceMessagingUserGetOutgoingSMDIMWIResponse or an ErrorResponse.
 *
 * @see UserVoiceMessagingUserGetOutgoingSMDIMWIResponse
 * @see ErrorResponse
 */
class UserVoiceMessagingUserGetOutgoingSMDIMWIRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

