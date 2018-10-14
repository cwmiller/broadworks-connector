<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * RecordingPauseResumeNotificationType
 *
 * Recording Service Play Resume Notidication Type.
 *
 * @method static RecordingPauseResumeNotificationType NONE()
 * @method static RecordingPauseResumeNotificationType BEEP()
 * @method static RecordingPauseResumeNotificationType PLAY_ANNOUNCEMENT()
 * @ValueType string
 */
class RecordingPauseResumeNotificationType extends \MyCLabs\Enum\Enum
{

    const NONE = 'None';

    const BEEP = 'Beep';

    const PLAY_ANNOUNCEMENT = 'Play Announcement';


}

