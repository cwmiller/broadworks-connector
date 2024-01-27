<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserVoiceMessagingUserGetAliasListRequest
 *
 * Get the voice mail aliases for a users voice message.
 *         The response is either a UserVoiceMessagingUserGetAliasListResponse or an ErrorResponse.
 *
 * @see UserVoiceMessagingUserGetAliasListResponse
 * @see ErrorResponse
 * @Groups [{"id":"1fea1222b6a78aa7b98fd5c41bdae113:1741","type":"sequence"}]
 */
class UserVoiceMessagingUserGetAliasListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:1741
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

