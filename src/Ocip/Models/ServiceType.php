<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceType
 *
 * Choices for Service Type
 *
 * @method static ServiceType AUTO_ATTENDANT()
 * @method static ServiceType AUTO_ATTENDANT_STANDARD()
 * @method static ServiceType BROADWORKS_ANYWHERE_PORTAL()
 * @method static ServiceType CALL_CENTER()
 * @method static ServiceType COLLABORATE_BRIDGE()
 * @method static ServiceType FIND_ME_FOLLOW_ME()
 * @method static ServiceType FLEXIBLE_SEATING_HOST()
 * @method static ServiceType GROUP_PAGING()
 * @method static ServiceType HUNT_GROUP()
 * @method static ServiceType INSTANT_GROUP_CALL()
 * @method static ServiceType INSTANT_CONFERENCE_BRIDGE()
 * @method static ServiceType MEET_ME_CONFERENCE_BRIDGE()
 * @method static ServiceType ROUTE_POINT()
 * @method static ServiceType VOICEXML()
 * @EnumValueType string
 */
class ServiceType extends \MyCLabs\Enum\Enum
{
    public const AUTO_ATTENDANT = 'Auto Attendant';

    public const AUTO_ATTENDANT_STANDARD = 'Auto Attendant - Standard';

    public const BROADWORKS_ANYWHERE_PORTAL = 'BroadWorks Anywhere Portal';

    public const CALL_CENTER = 'Call Center';

    public const COLLABORATE_BRIDGE = 'Collaborate Bridge';

    public const FIND_ME_FOLLOW_ME = 'Find-me/Follow-me';

    public const FLEXIBLE_SEATING_HOST = 'Flexible Seating Host';

    public const GROUP_PAGING = 'Group Paging';

    public const HUNT_GROUP = 'Hunt Group';

    public const INSTANT_GROUP_CALL = 'Instant Group Call';

    public const INSTANT_CONFERENCE_BRIDGE = 'Instant Conference Bridge';

    public const MEET_ME_CONFERENCE_BRIDGE = 'Meet-Me Conference Bridge';

    public const ROUTE_POINT = 'Route Point';

    public const VOICEXML = 'VoiceXML';
}

