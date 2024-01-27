<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupService
 *
 * Group level services.
 *
 * @method static GroupService ACCOUNT_AUTHORIZATION_CODES()
 * @method static GroupService AUTO_ATTENDANT()
 * @method static GroupService AUTO_ATTENDANT_VIDEO()
 * @method static GroupService AUTO_ATTENDANT_STANDARD()
 * @method static GroupService CALL_CAPACITY_MANAGEMENT()
 * @method static GroupService CALL_PARK()
 * @method static GroupService CALL_PICKUP()
 * @method static GroupService CITY_WIDE_CENTREX()
 * @method static GroupService CUSTOM_RINGBACK_GROUP()
 * @method static GroupService CUSTOM_RINGBACK_GROUP_VIDEO()
 * @method static GroupService EMERGENCY_ZONES()
 * @method static GroupService ENHANCED_OUTGOING_CALLING_PLAN()
 * @method static GroupService FIND_ME_FOLLOW_ME()
 * @method static GroupService GROUP_CALL_QUEUE()
 * @method static GroupService GROUP_PAGING()
 * @method static GroupService HUNT_GROUP()
 * @method static GroupService INCOMING_CALLING_PLAN()
 * @method static GroupService INSTANT_GROUP_CALL()
 * @method static GroupService INTERCEPT_GROUP()
 * @method static GroupService INVENTORY_REPORT()
 * @method static GroupService LDAP_INTEGRATION()
 * @method static GroupService MEET_ME_CONFERENCING()
 * @method static GroupService MUSIC_ON_HOLD()
 * @method static GroupService MUSIC_ON_HOLD_VIDEO()
 * @method static GroupService OUTGOING_CALLING_PLAN()
 * @method static GroupService PREFERRED_CARRIER_GROUP()
 * @method static GroupService ROUTE_POINT()
 * @method static GroupService SERIES_COMPLETION()
 * @method static GroupService SERVICE_SCRIPTS_GROUP()
 * @method static GroupService TRUNK_GROUP()
 * @method static GroupService VOICE_MESSAGING_GROUP()
 * @method static GroupService VOICEXML()
 * @EnumValueType string
 */
class GroupService extends \MyCLabs\Enum\Enum
{
    public const ACCOUNT_AUTHORIZATION_CODES = 'Account/Authorization Codes';

    public const AUTO_ATTENDANT = 'Auto Attendant';

    public const AUTO_ATTENDANT_VIDEO = 'Auto Attendant - Video';

    public const AUTO_ATTENDANT_STANDARD = 'Auto Attendant - Standard';

    public const CALL_CAPACITY_MANAGEMENT = 'Call Capacity Management';

    public const CALL_PARK = 'Call Park';

    public const CALL_PICKUP = 'Call Pickup';

    public const CITY_WIDE_CENTREX = 'City-Wide Centrex';

    public const CUSTOM_RINGBACK_GROUP = 'Custom Ringback Group';

    public const CUSTOM_RINGBACK_GROUP_VIDEO = 'Custom Ringback Group - Video';

    public const EMERGENCY_ZONES = 'Emergency Zones';

    public const ENHANCED_OUTGOING_CALLING_PLAN = 'Enhanced Outgoing Calling Plan';

    public const FIND_ME_FOLLOW_ME = 'Find-me/Follow-me';

    public const GROUP_CALL_QUEUE = 'Group Call Queue';

    public const GROUP_PAGING = 'Group Paging';

    public const HUNT_GROUP = 'Hunt Group';

    public const INCOMING_CALLING_PLAN = 'Incoming Calling Plan';

    public const INSTANT_GROUP_CALL = 'Instant Group Call';

    public const INTERCEPT_GROUP = 'Intercept Group';

    public const INVENTORY_REPORT = 'Inventory Report';

    public const LDAP_INTEGRATION = 'LDAP Integration';

    public const MEET_ME_CONFERENCING = 'Meet-Me Conferencing';

    public const MUSIC_ON_HOLD = 'Music On Hold';

    public const MUSIC_ON_HOLD_VIDEO = 'Music On Hold - Video';

    public const OUTGOING_CALLING_PLAN = 'Outgoing Calling Plan';

    public const PREFERRED_CARRIER_GROUP = 'Preferred Carrier Group';

    public const ROUTE_POINT = 'Route Point';

    public const SERIES_COMPLETION = 'Series Completion';

    public const SERVICE_SCRIPTS_GROUP = 'Service Scripts Group';

    public const TRUNK_GROUP = 'Trunk Group';

    public const VOICE_MESSAGING_GROUP = 'Voice Messaging Group';

    public const VOICEXML = 'VoiceXML';
}

