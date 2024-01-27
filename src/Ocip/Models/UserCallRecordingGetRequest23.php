<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallRecordingGetRequest23
 *
 * Get the Call Recording attributes for a user.
 *         The response is either a UserCallRecordingGetResponse23 or an ErrorResponse.
 *
 *         The following parameters are not returned for service instance:
 *           - pauseResumeNotification
 *           - enableCallRecordingAnnouncement
 *           - enableRecordCallRepeatWarningTone
 *           - recordCallRepeatWarningToneTimerSeconds
 *
 * @see UserCallRecordingGetResponse23
 * @see ErrorResponse
 * @Groups [{"id":"0731150ec7515df8cd710f04d8f62f66:443","type":"sequence"}]
 */
class UserCallRecordingGetRequest23 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 0731150ec7515df8cd710f04d8f62f66:443
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

