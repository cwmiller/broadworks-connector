<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * MemberType
 *
 * Types of owners/members in BroadWorks. 
 *         MemberType contains the same list as UserType with "Normal" being split into "Place" and "User".
 *
 * @method static MemberType PLACE()
 * @method static MemberType USER()
 * @method static MemberType AUTO_ATTENDANT()
 * @method static MemberType BROADWORKS_ANYWHERE()
 * @method static MemberType CALL_CENTER()
 * @method static MemberType COLLABORATE_BRIDGE()
 * @method static MemberType CONTACT_CENTER_ADAPTER()
 * @method static MemberType CONTACT_CENTER_LINKED()
 * @method static MemberType FIND_ME_FOLLOW_ME()
 * @method static MemberType FLEXIBLE_SEATING_HOST()
 * @method static MemberType GROUP_PAGING()
 * @method static MemberType HUNT_GROUP()
 * @method static MemberType INSTANT_GROUP_CALL()
 * @method static MemberType MEET_ME_CONFERENCING()
 * @method static MemberType MUSIC_ON_HOLD()
 * @method static MemberType ROUTE_POINT()
 * @method static MemberType VOICEMAIL_GROUP()
 * @method static MemberType VOICE_MESSAGING()
 * @method static MemberType VOICEXML()
 * @EnumValueType string
 */
class MemberType extends \MyCLabs\Enum\Enum
{
    public const PLACE = 'Place';

    public const USER = 'User';

    public const AUTO_ATTENDANT = 'Auto Attendant';

    public const BROADWORKS_ANYWHERE = 'BroadWorks Anywhere';

    public const CALL_CENTER = 'Call Center';

    public const COLLABORATE_BRIDGE = 'Collaborate Bridge';

    public const CONTACT_CENTER_ADAPTER = 'Contact Center Adapter';

    public const CONTACT_CENTER_LINKED = 'Contact Center Linked';

    public const FIND_ME_FOLLOW_ME = 'Find-me/Follow-me';

    public const FLEXIBLE_SEATING_HOST = 'Flexible Seating Host';

    public const GROUP_PAGING = 'Group Paging';

    public const HUNT_GROUP = 'Hunt Group';

    public const INSTANT_GROUP_CALL = 'Instant Group Call';

    public const MEET_ME_CONFERENCING = 'Meet-Me Conferencing';

    public const MUSIC_ON_HOLD = 'Music On Hold';

    public const ROUTE_POINT = 'Route Point';

    public const VOICEMAIL_GROUP = 'Voicemail Group';

    public const VOICE_MESSAGING = 'Voice Messaging';

    public const VOICEXML = 'VoiceXML';
}

