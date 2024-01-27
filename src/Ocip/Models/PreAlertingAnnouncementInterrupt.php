<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * PreAlertingAnnouncementInterrupt
 *
 * Pre-alerting Announcement interrupt type.
 *
 * @method static PreAlertingAnnouncementInterrupt NOT_ALLOWED()
 * @method static PreAlertingAnnouncementInterrupt ANY_DIGIT()
 * @method static PreAlertingAnnouncementInterrupt DIGIT_SEQUENCE()
 * @EnumValueType string
 */
class PreAlertingAnnouncementInterrupt extends \MyCLabs\Enum\Enum
{
    public const NOT_ALLOWED = 'Not Allowed';

    public const ANY_DIGIT = 'Any Digit';

    public const DIGIT_SEQUENCE = 'Digit Sequence';
}

