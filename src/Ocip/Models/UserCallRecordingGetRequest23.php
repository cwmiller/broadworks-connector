<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallRecordingGetRequest23
 *
 * Get the Call Recording attributes for a user.
 *         The response is either a UserCallRecordingGetResponse23 or an ErrorResponse.
 *         The following parameters are not returned for service instance:
 *           - pauseResumeNotification
 *           - enableCallRecordingAnnouncement
 *           - enableRecordCallRepeatWarningTone
 *           - recordCallRepeatWarningToneTimerSeconds
 *           
 *           Replaced by: UserCallRecordingGetRequestRI.
 *
 * @see UserCallRecordingGetResponse23
 * @see ErrorResponse
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:19644","type":"sequence"}]
 */
class UserCallRecordingGetRequest23 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:19644
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

