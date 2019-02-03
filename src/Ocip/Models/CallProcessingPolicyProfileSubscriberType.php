<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallProcessingPolicyProfileSubscriberType
 *
 * Different type of user and virtual subscriber which could have a set of call
 * processing policy profile
 *                 defined in BroadWorks.
 *
 * @method static CallProcessingPolicyProfileSubscriberType USER()
 * @method static CallProcessingPolicyProfileSubscriberType
 * TRUNK_GROUP_PILOT_USER()
 * @method static CallProcessingPolicyProfileSubscriberType AUTO_ATTENDANT()
 * @method static CallProcessingPolicyProfileSubscriberType BROADWORKS_ANYWHERE()
 * @method static CallProcessingPolicyProfileSubscriberType CALL_CENTER()
 * @method static CallProcessingPolicyProfileSubscriberType FIND_ME_FOLLOW_ME()
 * @method static CallProcessingPolicyProfileSubscriberType GROUP_PAGING()
 * @method static CallProcessingPolicyProfileSubscriberType HUNT_GROUP()
 * @method static CallProcessingPolicyProfileSubscriberType INSTANT_GROUP_CALL()
 * @method static CallProcessingPolicyProfileSubscriberType MEET_ME_CONFERENCING()
 * @method static CallProcessingPolicyProfileSubscriberType ROUTE_POINT()
 * @method static CallProcessingPolicyProfileSubscriberType VOICE_PORTAL()
 * @method static CallProcessingPolicyProfileSubscriberType VOICEXML()
 * @EnumValueType string
 */
class CallProcessingPolicyProfileSubscriberType extends \MyCLabs\Enum\Enum
{

    const USER = 'User';

    const TRUNK_GROUP_PILOT_USER = 'Trunk Group Pilot User';

    const AUTO_ATTENDANT = 'Auto Attendant';

    const BROADWORKS_ANYWHERE = 'BroadWorks Anywhere';

    const CALL_CENTER = 'Call Center';

    const FIND_ME_FOLLOW_ME = 'Find-me/Follow-me';

    const GROUP_PAGING = 'Group Paging';

    const HUNT_GROUP = 'Hunt Group';

    const INSTANT_GROUP_CALL = 'Instant Group Call';

    const MEET_ME_CONFERENCING = 'Meet-Me Conferencing';

    const ROUTE_POINT = 'Route Point';

    const VOICE_PORTAL = 'Voice Portal';

    const VOICEXML = 'VoiceXML';


}

