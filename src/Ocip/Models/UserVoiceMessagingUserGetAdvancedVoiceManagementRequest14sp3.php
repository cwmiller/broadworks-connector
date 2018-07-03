<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserVoiceMessagingUserGetAdvancedVoiceManagementRequest14sp3
 *
 * Get the user's voice messaging advanced voice management service setting.
 *         The response is either a
 * UserVoiceMessagingUserGetAdvancedVoiceManagementResponse14sp3 or an
 * ErrorResponse.
 *
 * @see UserVoiceMessagingUserGetAdvancedVoiceManagementResponse14sp3
 * @see ErrorResponse
 */
class UserVoiceMessagingUserGetAdvancedVoiceManagementRequest14sp3 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

