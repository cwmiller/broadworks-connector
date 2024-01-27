<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnhancedCallLogsSubscriberType20
 *
 * Subscriber type
 *
 * @method static EnhancedCallLogsSubscriberType20 AUTO_ATTENDANT()
 * @method static EnhancedCallLogsSubscriberType20 BROADWORKS_ANYWHERE_PORTAL()
 * @method static EnhancedCallLogsSubscriberType20 CALL_CENTER()
 * @method static EnhancedCallLogsSubscriberType20 FIND_ME_FOLLOW_ME()
 * @method static EnhancedCallLogsSubscriberType20 FLEXIBLE_SEATING_HOST()
 * @method static EnhancedCallLogsSubscriberType20 HUNT_GROUP()
 * @method static EnhancedCallLogsSubscriberType20 ROUTE_POINT()
 * @method static EnhancedCallLogsSubscriberType20 USER()
 * @method static EnhancedCallLogsSubscriberType20 VOICEXML()
 * @EnumValueType string
 */
class EnhancedCallLogsSubscriberType20 extends \MyCLabs\Enum\Enum
{
    public const AUTO_ATTENDANT = 'Auto Attendant';

    public const BROADWORKS_ANYWHERE_PORTAL = 'BroadWorks Anywhere Portal';

    public const CALL_CENTER = 'Call Center';

    public const FIND_ME_FOLLOW_ME = 'Find-me/Follow-me';

    public const FLEXIBLE_SEATING_HOST = 'Flexible Seating Host';

    public const HUNT_GROUP = 'Hunt Group';

    public const ROUTE_POINT = 'Route Point';

    public const USER = 'User';

    public const VOICEXML = 'VoiceXML';
}

