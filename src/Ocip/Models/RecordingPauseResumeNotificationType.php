<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * RecordingPauseResumeNotificationType
 *
 * Recording Service Play Resume Notification Type.
 *
 * @method static RecordingPauseResumeNotificationType NONE()
 * @method static RecordingPauseResumeNotificationType BEEP()
 * @method static RecordingPauseResumeNotificationType PLAY_ANNOUNCEMENT()
 * @EnumValueType string
 */
class RecordingPauseResumeNotificationType extends \MyCLabs\Enum\Enum
{
    public const NONE = 'None';

    public const BEEP = 'Beep';

    public const PLAY_ANNOUNCEMENT = 'Play Announcement';
}

