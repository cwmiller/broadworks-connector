<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterManualNightServiceAnnouncementMode
 *
 * Call center manual night service announcement mode.
 *
 * @method static CallCenterManualNightServiceAnnouncementMode NORMAL_ANNOUNCEMENT()
 * @method static CallCenterManualNightServiceAnnouncementMode MANUAL_ANNOUNCEMENT()
 * @EnumValueType string
 */
class CallCenterManualNightServiceAnnouncementMode extends \MyCLabs\Enum\Enum
{
    public const NORMAL_ANNOUNCEMENT = 'Normal Announcement';

    public const MANUAL_ANNOUNCEMENT = 'Manual Announcement';
}

