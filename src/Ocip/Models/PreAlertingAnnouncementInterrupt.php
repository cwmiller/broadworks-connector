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

    const NOT_ALLOWED = 'Not Allowed';

    const ANY_DIGIT = 'Any Digit';

    const DIGIT_SEQUENCE = 'Digit Sequence';


}

