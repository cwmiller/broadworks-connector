<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserVoiceMessagingUserGetVoicePortalPasswordInfoRequest
 *
 * Request the user's voice portal password information.
 *         The response is either a
 * UserVoiceMessagingUserGetVoicePortalPasswordInfoResponse or an ErrorResponse.
 *         Replaced By: UserPortalPasscodeGetInfoRequest
 *
 * @see UserVoiceMessagingUserGetVoicePortalPasswordInfoResponse
 * @see ErrorResponse
 * @see UserPortalPasscodeGetInfoRequest
 */
class UserVoiceMessagingUserGetVoicePortalPasswordInfoRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

