<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserVoiceMessagingUserGetOutgoingSMDIMWIRequest
 *
 * Get the user's voice messaging outgoing SMDI message waiting indicator service
 * setting.
 *         The response is either a
 * UserVoiceMessagingUserGetOutgoingSMDIMWIResponse or an ErrorResponse.
 *
 * @see UserVoiceMessagingUserGetOutgoingSMDIMWIResponse
 * @see ErrorResponse
 */
class UserVoiceMessagingUserGetOutgoingSMDIMWIRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

