<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnhancedCallLogsSubscriberType
 *
 * Subscriber type       
 *         Replaced by EnhancedCallLogsSubscriberType19sp1.
 *
 * @method static EnhancedCallLogsSubscriberType AUTO_ATTENDANT()
 * @method static EnhancedCallLogsSubscriberType BROADWORKS_ANYWHERE_PORTAL()
 * @method static EnhancedCallLogsSubscriberType CALL_CENTER()
 * @method static EnhancedCallLogsSubscriberType HUNT_GROUP()
 * @method static EnhancedCallLogsSubscriberType ROUTE_POINT()
 * @method static EnhancedCallLogsSubscriberType USER()
 * @method static EnhancedCallLogsSubscriberType FIND_ME_FOLLOW_ME()
 * @ValueType string
 */
class EnhancedCallLogsSubscriberType extends \MyCLabs\Enum\Enum
{

    const AUTO_ATTENDANT = 'Auto Attendant';

    const BROADWORKS_ANYWHERE_PORTAL = 'BroadWorks Anywhere Portal';

    const CALL_CENTER = 'Call Center';

    const HUNT_GROUP = 'Hunt Group';

    const ROUTE_POINT = 'Route Point';

    const USER = 'User';

    const FIND_ME_FOLLOW_ME = 'Find-me/Follow-me';


}

