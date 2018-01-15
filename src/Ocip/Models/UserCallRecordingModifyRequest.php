<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallRecordingModifyRequest
 *
 * Modify the Call Recording attributes for a user. The recording options 
 *         "Always with Pause/Resume", "On Demand", and "On Demand with User 
 *         Initiated Start" are not accepted for service instances.
 *
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         
 *         The following parameters are not accepted for service
 *         instance:
 *           - pauseResumeNotification
 *           - enableCallRecordingAnnouncement
 *           - enableRecordCallRepeatWarningTone
 *           - recordCallRepeatWarningToneTimerSeconds
 *           
 *         The enableVoiceMailRecording parameter is only applicable 
 *         if the Voice Messaging User service is assigned to the user.
 *         This applies to both users and service instances.
 */
class UserCallRecordingModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName recordingOption
     * @var string|null
     */
    private $recordingOption = null;

    /**
     * @ElementName pauseResumeNotification
     * @var string|null
     */
    private $pauseResumeNotification = null;

    /**
     * @ElementName enableCallRecordingAnnouncement
     * @var bool|null
     */
    private $enableCallRecordingAnnouncement = null;

    /**
     * @ElementName enableRecordCallRepeatWarningTone
     * @var bool|null
     */
    private $enableRecordCallRepeatWarningTone = null;

    /**
     * @ElementName recordCallRepeatWarningToneTimerSeconds
     * @var int|null
     */
    private $recordCallRepeatWarningToneTimerSeconds = null;

    /**
     * @ElementName enableVoiceMailRecording
     * @var bool|null
     */
    private $enableVoiceMailRecording = null;

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

    /**
     * Getter for recordingOption
     *
     * @ElementName recordingOption
     * @return string|null
     */
    public function getRecordingOption()
    {
        return $this->recordingOption;
    }

    /**
     * Setter for recordingOption
     *
     * @ElementName recordingOption
     * @param string|null $recordingOption
     * @return $this
     */
    public function setRecordingOption($recordingOption)
    {
        $this->recordingOption = $recordingOption;
        return $this;
    }

    /**
     * Getter for pauseResumeNotification
     *
     * @ElementName pauseResumeNotification
     * @return string|null
     */
    public function getPauseResumeNotification()
    {
        return $this->pauseResumeNotification;
    }

    /**
     * Setter for pauseResumeNotification
     *
     * @ElementName pauseResumeNotification
     * @param string|null $pauseResumeNotification
     * @return $this
     */
    public function setPauseResumeNotification($pauseResumeNotification)
    {
        $this->pauseResumeNotification = $pauseResumeNotification;
        return $this;
    }

    /**
     * Getter for enableCallRecordingAnnouncement
     *
     * @ElementName enableCallRecordingAnnouncement
     * @return bool|null
     */
    public function getEnableCallRecordingAnnouncement()
    {
        return $this->enableCallRecordingAnnouncement;
    }

    /**
     * Setter for enableCallRecordingAnnouncement
     *
     * @ElementName enableCallRecordingAnnouncement
     * @param bool|null $enableCallRecordingAnnouncement
     * @return $this
     */
    public function setEnableCallRecordingAnnouncement($enableCallRecordingAnnouncement)
    {
        $this->enableCallRecordingAnnouncement = $enableCallRecordingAnnouncement;
        return $this;
    }

    /**
     * Getter for enableRecordCallRepeatWarningTone
     *
     * @ElementName enableRecordCallRepeatWarningTone
     * @return bool|null
     */
    public function getEnableRecordCallRepeatWarningTone()
    {
        return $this->enableRecordCallRepeatWarningTone;
    }

    /**
     * Setter for enableRecordCallRepeatWarningTone
     *
     * @ElementName enableRecordCallRepeatWarningTone
     * @param bool|null $enableRecordCallRepeatWarningTone
     * @return $this
     */
    public function setEnableRecordCallRepeatWarningTone($enableRecordCallRepeatWarningTone)
    {
        $this->enableRecordCallRepeatWarningTone = $enableRecordCallRepeatWarningTone;
        return $this;
    }

    /**
     * Getter for recordCallRepeatWarningToneTimerSeconds
     *
     * @ElementName recordCallRepeatWarningToneTimerSeconds
     * @return int|null
     */
    public function getRecordCallRepeatWarningToneTimerSeconds()
    {
        return $this->recordCallRepeatWarningToneTimerSeconds;
    }

    /**
     * Setter for recordCallRepeatWarningToneTimerSeconds
     *
     * @ElementName recordCallRepeatWarningToneTimerSeconds
     * @param int|null $recordCallRepeatWarningToneTimerSeconds
     * @return $this
     */
    public function setRecordCallRepeatWarningToneTimerSeconds($recordCallRepeatWarningToneTimerSeconds)
    {
        $this->recordCallRepeatWarningToneTimerSeconds = $recordCallRepeatWarningToneTimerSeconds;
        return $this;
    }

    /**
     * Getter for enableVoiceMailRecording
     *
     * @ElementName enableVoiceMailRecording
     * @return bool|null
     */
    public function getEnableVoiceMailRecording()
    {
        return $this->enableVoiceMailRecording;
    }

    /**
     * Setter for enableVoiceMailRecording
     *
     * @ElementName enableVoiceMailRecording
     * @param bool|null $enableVoiceMailRecording
     * @return $this
     */
    public function setEnableVoiceMailRecording($enableVoiceMailRecording)
    {
        $this->enableVoiceMailRecording = $enableVoiceMailRecording;
        return $this;
    }


}

