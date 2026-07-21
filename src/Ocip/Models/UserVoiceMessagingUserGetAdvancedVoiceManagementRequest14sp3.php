<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserVoiceMessagingUserGetAdvancedVoiceManagementRequest14sp3
 *
 * Get the user's voice messaging advanced voice management service setting.
 *         The response is either a UserVoiceMessagingUserGetAdvancedVoiceManagementResponse14sp3 or an ErrorResponse.
 *
 *         Replaced by: UserVoiceMessagingUserGetAdvancedVoiceManagementRequestRI in AS data mode.
 *
 * @see UserVoiceMessagingUserGetAdvancedVoiceManagementResponse14sp3
 * @see ErrorResponse
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:22230","type":"sequence"}]
 */
class UserVoiceMessagingUserGetAdvancedVoiceManagementRequest14sp3 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:22230
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

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

