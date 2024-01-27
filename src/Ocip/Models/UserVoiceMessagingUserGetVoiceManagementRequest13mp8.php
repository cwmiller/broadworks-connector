<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserVoiceMessagingUserGetVoiceManagementRequest13mp8
 *
 * Get the user's voice messaging voice management service settings.
 *         The response is either a UserVoiceMessagingUserGetVoiceManagementResponse13mp8 or an ErrorResponse.
 *         Replaced by: UserVoiceMessagingUserGetVoiceManagementRequest17
 *
 * @see UserVoiceMessagingUserGetVoiceManagementResponse13mp8
 * @see ErrorResponse
 * @see UserVoiceMessagingUserGetVoiceManagementRequest17
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:47972","type":"sequence"}]
 */
class UserVoiceMessagingUserGetVoiceManagementRequest13mp8 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:47972
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

