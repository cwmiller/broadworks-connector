<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SubscriberType
 *
 * Types of subscribers in BroadWorks.
 *
 * @method static SubscriberType USER()
 * @method static SubscriberType GROUP()
 * @method static SubscriberType ENTERPRISE()
 * @method static SubscriberType SERVICE_PROVIDER()
 * @method static SubscriberType AUTO_ATTENDANT()
 * @method static SubscriberType BROADWORKS_ANYWHERE()
 * @method static SubscriberType CALL_CENTER()
 * @method static SubscriberType COLLABORATE_BRIDGE()
 * @method static SubscriberType FIND_ME_FOLLOW_ME()
 * @method static SubscriberType FLEXIBLE_SEATING_HOST()
 * @method static SubscriberType GROUP_PAGING()
 * @method static SubscriberType HUNT_GROUP()
 * @method static SubscriberType INSTANT_GROUP_CALL()
 * @method static SubscriberType MEET_ME_CONFERENCING()
 * @method static SubscriberType MUSIC_ON_HOLD()
 * @method static SubscriberType ROUTE_POINT()
 * @method static SubscriberType VOICE_MESSAGING()
 * @method static SubscriberType VOICEXML()
 * @EnumValueType string
 */
class SubscriberType extends \MyCLabs\Enum\Enum
{
    public const USER = 'User';

    public const GROUP = 'Group';

    public const ENTERPRISE = 'Enterprise';

    public const SERVICE_PROVIDER = 'Service Provider';

    public const AUTO_ATTENDANT = 'Auto Attendant';

    public const BROADWORKS_ANYWHERE = 'BroadWorks Anywhere';

    public const CALL_CENTER = 'Call Center';

    public const COLLABORATE_BRIDGE = 'Collaborate Bridge';

    public const FIND_ME_FOLLOW_ME = 'Find-me/Follow-me';

    public const FLEXIBLE_SEATING_HOST = 'Flexible Seating Host';

    public const GROUP_PAGING = 'Group Paging';

    public const HUNT_GROUP = 'Hunt Group';

    public const INSTANT_GROUP_CALL = 'Instant Group Call';

    public const MEET_ME_CONFERENCING = 'Meet-Me Conferencing';

    public const MUSIC_ON_HOLD = 'Music On Hold';

    public const ROUTE_POINT = 'Route Point';

    public const VOICE_MESSAGING = 'Voice Messaging';

    public const VOICEXML = 'VoiceXML';
}

