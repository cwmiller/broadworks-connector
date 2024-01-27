<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserVoiceMessagingUserGetAdvancedVoiceManagementRequest14sp3
 *
 * Get the user's voice messaging advanced voice management service setting.
 *         The response is either a UserVoiceMessagingUserGetAdvancedVoiceManagementResponse14sp3 or an ErrorResponse.
 *
 * @see UserVoiceMessagingUserGetAdvancedVoiceManagementResponse14sp3
 * @see ErrorResponse
 * @Groups [{"id":"1fea1222b6a78aa7b98fd5c41bdae113:1699","type":"sequence"}]
 */
class UserVoiceMessagingUserGetAdvancedVoiceManagementRequest14sp3 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:1699
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

