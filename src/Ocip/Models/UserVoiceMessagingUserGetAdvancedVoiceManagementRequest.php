<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserVoiceMessagingUserGetAdvancedVoiceManagementRequest
 *
 * Get the user's voice messaging advanced voice management service setting.
 *         The response is either a UserVoiceMessagingUserGetAdvancedVoiceManagementResponse or an ErrorResponse.
 *         Replaced By: UserVoiceMessagingUserGetAdvancedVoiceManagementRequest14sp3
 *
 * @see UserVoiceMessagingUserGetAdvancedVoiceManagementResponse
 * @see ErrorResponse
 * @see UserVoiceMessagingUserGetAdvancedVoiceManagementRequest14sp3
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:46954","type":"sequence"}]
 */
class UserVoiceMessagingUserGetAdvancedVoiceManagementRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:46954
     * @MinLength 1
     * @MaxLength 161
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

