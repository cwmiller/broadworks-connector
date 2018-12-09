<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserVoiceMessagingUserGetVoicePortalPasswordInfoRequest
 *
 * Request the user's voice portal password information.
 *         The response is either a UserVoiceMessagingUserGetVoicePortalPasswordInfoResponse or an ErrorResponse.
 *         Replaced By: UserPortalPasscodeGetInfoRequest
 *
 * @see UserVoiceMessagingUserGetVoicePortalPasswordInfoResponse
 * @see ErrorResponse
 * @see UserPortalPasscodeGetInfoRequest
 * @Groups [{"id":"4f0fb68b4d4b3ac50a70eeb01a628dce:38003","type":"sequence"}]
 */
class UserVoiceMessagingUserGetVoicePortalPasswordInfoRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:38003
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

