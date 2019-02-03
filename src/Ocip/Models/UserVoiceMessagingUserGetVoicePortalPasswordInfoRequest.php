<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserVoiceMessagingUserGetVoicePortalPasswordInfoRequest
 *
 * Request the user's voice portal password information.
 *                 The response is either a UserVoiceMessagingUserGetVoicePortalPasswordInfoResponse or an ErrorResponse.
 *                 Replaced By: UserPortalPasscodeGetInfoRequest
 *
 * @see UserVoiceMessagingUserGetVoicePortalPasswordInfoResponse
 * @see ErrorResponse
 * @see UserPortalPasscodeGetInfoRequest
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:7857","type":"sequence"}]
 */
class UserVoiceMessagingUserGetVoicePortalPasswordInfoRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:7857
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

