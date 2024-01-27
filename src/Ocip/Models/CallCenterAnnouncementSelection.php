<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterAnnouncementSelection
 *
 * Call Center Announcement Selection.
 *
 * @method static CallCenterAnnouncementSelection SYSTEM()
 * @method static CallCenterAnnouncementSelection CUSTOM()
 * @EnumValueType string
 */
class CallCenterAnnouncementSelection extends \MyCLabs\Enum\Enum
{
    public const SYSTEM = 'System';

    public const CUSTOM = 'Custom';
}

