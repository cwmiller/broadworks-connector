<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserVoiceMessagingUserGetVoicePortalRequest20
 *
 * Get the user's voice messaging voice portal settings.
 *         The response is either a UserVoiceMessagingUserGetVoicePortalResponse20 or an ErrorResponse.
 *
 * @see UserVoiceMessagingUserGetVoicePortalResponse20
 * @see ErrorResponse
 * @Groups [{"id":"1fea1222b6a78aa7b98fd5c41bdae113:1939","type":"sequence"}]
 */
class UserVoiceMessagingUserGetVoicePortalRequest20 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:1939
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

