<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserType
 *
 * Types of users in BroadWorks.
 *
 * @method static UserType NORMAL()
 * @method static UserType AUTO_ATTENDANT()
 * @method static UserType BROADWORKS_ANYWHERE()
 * @method static UserType CALL_CENTER()
 * @method static UserType COLLABORATE_BRIDGE()
 * @method static UserType FIND_ME_FOLLOW_ME()
 * @method static UserType FLEXIBLE_SEATING_HOST()
 * @method static UserType GROUP_PAGING()
 * @method static UserType HUNT_GROUP()
 * @method static UserType INSTANT_GROUP_CALL()
 * @method static UserType MEET_ME_CONFERENCING()
 * @method static UserType MUSIC_ON_HOLD()
 * @method static UserType ROUTE_POINT()
 * @method static UserType VOICE_MESSAGING()
 * @method static UserType VOICEXML()
 * @ValueType string
 */
class UserType extends \MyCLabs\Enum\Enum
{

    const NORMAL = 'Normal';

    const AUTO_ATTENDANT = 'Auto Attendant';

    const BROADWORKS_ANYWHERE = 'BroadWorks Anywhere';

    const CALL_CENTER = 'Call Center';

    const COLLABORATE_BRIDGE = 'Collaborate Bridge';

    const FIND_ME_FOLLOW_ME = 'Find-me/Follow-me';

    const FLEXIBLE_SEATING_HOST = 'Flexible Seating Host';

    const GROUP_PAGING = 'Group Paging';

    const HUNT_GROUP = 'Hunt Group';

    const INSTANT_GROUP_CALL = 'Instant Group Call';

    const MEET_ME_CONFERENCING = 'Meet-Me Conferencing';

    const MUSIC_ON_HOLD = 'Music On Hold';

    const ROUTE_POINT = 'Route Point';

    const VOICE_MESSAGING = 'Voice Messaging';

    const VOICEXML = 'VoiceXML';


}

