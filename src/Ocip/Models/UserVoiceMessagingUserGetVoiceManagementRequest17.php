<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserVoiceMessagingUserGetVoiceManagementRequest17
 *
 * Get the user's voice messaging voice management service settings.
 *         The response is either a
 * UserVoiceMessagingUserGetVoiceManagementResponse17 or an ErrorResponse.
 *
 * @see UserVoiceMessagingUserGetVoiceManagementResponse17
 * @see ErrorResponse
 */
class UserVoiceMessagingUserGetVoiceManagementRequest17 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
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

