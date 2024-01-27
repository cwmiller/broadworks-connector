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
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:47834","type":"sequence"}]
 */
class UserVoiceMessagingUserGetAdvancedVoiceManagementRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:47834
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

