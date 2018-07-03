<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserVoiceMessagingUserGetVoiceManagementRequest13mp8
 *
 * Get the user's voice messaging voice management service settings.
 *         The response is either a
 * UserVoiceMessagingUserGetVoiceManagementResponse13mp8 or an ErrorResponse.
 *         Replaced by: UserVoiceMessagingUserGetVoiceManagementRequest17
 *
 * @see UserVoiceMessagingUserGetVoiceManagementResponse13mp8
 * @see ErrorResponse
 * @see UserVoiceMessagingUserGetVoiceManagementRequest17
 */
class UserVoiceMessagingUserGetVoiceManagementRequest13mp8 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

