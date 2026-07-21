<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallRecordingGetRequestRI
 *
 * Get the Call Recording attributes for a user.
 *         The response is either a UserCallRecordingGetResponseRI or an ErrorResponse.
 *
 *         The following parameters are not returned for service instance:
 *           - pauseResumeNotification
 *           - enableCallRecordingAnnouncement
 *           - enableRecordCallRepeatWarningTone
 *           - recordCallRepeatWarningToneTimerSeconds
 *
 * @see ErrorResponse
 * @Groups [{"id":"0731150ec7515df8cd710f04d8f62f66:340","type":"sequence"}]
 */
class UserCallRecordingGetRequestRI extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 0731150ec7515df8cd710f04d8f62f66:340
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

