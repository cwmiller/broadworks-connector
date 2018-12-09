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
 * @Groups [{"id":"4f0fb68b4d4b3ac50a70eeb01a628dce:37958","type":"sequence"}]
 */
class UserVoiceMessagingUserGetVoiceManagementRequest13mp8 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:37958
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

