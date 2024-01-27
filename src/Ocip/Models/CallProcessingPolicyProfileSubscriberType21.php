<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallProcessingPolicyProfileSubscriberType21
 *
 * Different type of user and virtual subscriber which could have a set of call processing policy profile defined in BroadWorks.
 *
 * @method static CallProcessingPolicyProfileSubscriberType21 USER()
 * @method static CallProcessingPolicyProfileSubscriberType21 TRUNK_GROUP_PILOT_USER()
 * @method static CallProcessingPolicyProfileSubscriberType21 AUTO_ATTENDANT()
 * @method static CallProcessingPolicyProfileSubscriberType21 BROADWORKS_ANYWHERE()
 * @method static CallProcessingPolicyProfileSubscriberType21 CALL_CENTER()
 * @method static CallProcessingPolicyProfileSubscriberType21 COLLABORATE()
 * @method static CallProcessingPolicyProfileSubscriberType21 FIND_ME_FOLLOW_ME()
 * @method static CallProcessingPolicyProfileSubscriberType21 GROUP_PAGING()
 * @method static CallProcessingPolicyProfileSubscriberType21 FLEXIBLE_SEATING_HOST()
 * @method static CallProcessingPolicyProfileSubscriberType21 HUNT_GROUP()
 * @method static CallProcessingPolicyProfileSubscriberType21 INSTANT_GROUP_CALL()
 * @method static CallProcessingPolicyProfileSubscriberType21 MEET_ME_CONFERENCING()
 * @method static CallProcessingPolicyProfileSubscriberType21 ROUTE_POINT()
 * @method static CallProcessingPolicyProfileSubscriberType21 VOICE_PORTAL()
 * @method static CallProcessingPolicyProfileSubscriberType21 VOICEXML()
 * @EnumValueType string
 */
class CallProcessingPolicyProfileSubscriberType21 extends \MyCLabs\Enum\Enum
{
    public const USER = 'User';

    public const TRUNK_GROUP_PILOT_USER = 'Trunk Group Pilot User';

    public const AUTO_ATTENDANT = 'Auto Attendant';

    public const BROADWORKS_ANYWHERE = 'BroadWorks Anywhere';

    public const CALL_CENTER = 'Call Center';

    public const COLLABORATE = 'Collaborate';

    public const FIND_ME_FOLLOW_ME = 'Find-me/Follow-me';

    public const GROUP_PAGING = 'Group Paging';

    public const FLEXIBLE_SEATING_HOST = 'Flexible Seating Host';

    public const HUNT_GROUP = 'Hunt Group';

    public const INSTANT_GROUP_CALL = 'Instant Group Call';

    public const MEET_ME_CONFERENCING = 'Meet-Me Conferencing';

    public const ROUTE_POINT = 'Route Point';

    public const VOICE_PORTAL = 'Voice Portal';

    public const VOICEXML = 'VoiceXML';
}

