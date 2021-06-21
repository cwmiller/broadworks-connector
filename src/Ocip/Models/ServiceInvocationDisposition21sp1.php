<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceInvocationDisposition21sp1
 *
 * Indicates the type of service invocation that caused the call to be detached.
 *         Deprecated by ServiceInvocationDisposition23
 *
 * @method static ServiceInvocationDisposition21sp1 AUTOMATIC_HOLD_RETRIEVE()
 * @method static ServiceInvocationDisposition21sp1 CALL_FORWARD_ALWAYS()
 * @method static ServiceInvocationDisposition21sp1 CALL_FORWARD_ALWAYS_SECONDARY()
 * @method static ServiceInvocationDisposition21sp1 CALL_FORWARD_BUSY()
 * @method static ServiceInvocationDisposition21sp1 CALL_FORWARD_NO_ANSWER()
 * @method static ServiceInvocationDisposition21sp1 CALL_FORWARD_NOT_REACHABLE()
 * @method static ServiceInvocationDisposition21sp1 CALL_FORWARD_SELECTIVE()
 * @method static ServiceInvocationDisposition21sp1 CALL_PARK()
 * @method static ServiceInvocationDisposition21sp1 CALL_PICKUP()
 * @method static ServiceInvocationDisposition21sp1 DEFLECTION()
 * @method static ServiceInvocationDisposition21sp1 DIRECTED_CALL_PICKUP()
 * @method static ServiceInvocationDisposition21sp1 DISTRIBUTION_FROM_CALL_CENTER()
 * @method static ServiceInvocationDisposition21sp1 DISTRIBUTION_FROM_HUNT_GROUP()
 * @method static ServiceInvocationDisposition21sp1 DISTRIBUTION_FROM_ROUTE_POINT()
 * @method static ServiceInvocationDisposition21sp1 DO_NOT_DISTURB()
 * @method static ServiceInvocationDisposition21sp1 FAX_DEPOSIT()
 * @method static ServiceInvocationDisposition21sp1 GROUP_NIGHT_FORWARDING()
 * @method static ServiceInvocationDisposition21sp1 SEQUENTIAL_RING()
 * @method static ServiceInvocationDisposition21sp1 SERIES_COMPLETION()
 * @method static ServiceInvocationDisposition21sp1 SIMULTANEOUS_RING()
 * @method static ServiceInvocationDisposition21sp1 THIRD_PARTY_DEFLECTION()
 * @method static ServiceInvocationDisposition21sp1 THIRD_PARTY_VOICE_MAIL_SUPPORT()
 * @method static ServiceInvocationDisposition21sp1 TRANSFER_CONSULT()
 * @method static ServiceInvocationDisposition21sp1 TRUNK_GROUP_FORWARD_CAPACITY_EXCEEDED()
 * @method static ServiceInvocationDisposition21sp1 TRUNK_GROUP_FORWARD_UNREACHABLE()
 * @method static ServiceInvocationDisposition21sp1 TRUNK_GROUP_FORWARD_UNCONDITIONAL()
 * @method static ServiceInvocationDisposition21sp1 VOICE_MAIL_TRANSFER()
 * @method static ServiceInvocationDisposition21sp1 VOICE_MESSAGING()
 * @method static ServiceInvocationDisposition21sp1 FIND_ME_FOLLOW_ME()
 * @method static ServiceInvocationDisposition21sp1 PERSONAL_ASSISTANT()
 * @EnumValueType string
 */
class ServiceInvocationDisposition21sp1 extends \MyCLabs\Enum\Enum
{

    const AUTOMATIC_HOLD_RETRIEVE = 'Automatic Hold/Retrieve';

    const CALL_FORWARD_ALWAYS = 'Call Forward Always';

    const CALL_FORWARD_ALWAYS_SECONDARY = 'Call Forward Always Secondary';

    const CALL_FORWARD_BUSY = 'Call Forward Busy';

    const CALL_FORWARD_NO_ANSWER = 'Call Forward No Answer';

    const CALL_FORWARD_NOT_REACHABLE = 'Call Forward Not Reachable';

    const CALL_FORWARD_SELECTIVE = 'Call Forward Selective';

    const CALL_PARK = 'Call Park';

    const CALL_PICKUP = 'Call Pickup';

    const DEFLECTION = 'Deflection';

    const DIRECTED_CALL_PICKUP = 'Directed Call Pickup';

    const DISTRIBUTION_FROM_CALL_CENTER = 'Distribution from Call Center';

    const DISTRIBUTION_FROM_HUNT_GROUP = 'Distribution from Hunt Group';

    const DISTRIBUTION_FROM_ROUTE_POINT = 'Distribution from Route Point';

    const DO_NOT_DISTURB = 'Do Not Disturb';

    const FAX_DEPOSIT = 'Fax Deposit';

    const GROUP_NIGHT_FORWARDING = 'Group Night Forwarding';

    const SEQUENTIAL_RING = 'Sequential Ring';

    const SERIES_COMPLETION = 'Series Completion';

    const SIMULTANEOUS_RING = 'Simultaneous Ring';

    const THIRD_PARTY_DEFLECTION = 'Third Party Deflection';

    const THIRD_PARTY_VOICE_MAIL_SUPPORT = 'Third Party Voice Mail Support';

    const TRANSFER_CONSULT = 'Transfer Consult';

    const TRUNK_GROUP_FORWARD_CAPACITY_EXCEEDED = 'Trunk Group Forward Capacity Exceeded';

    const TRUNK_GROUP_FORWARD_UNREACHABLE = 'Trunk Group Forward Unreachable';

    const TRUNK_GROUP_FORWARD_UNCONDITIONAL = 'Trunk Group Forward Unconditional';

    const VOICE_MAIL_TRANSFER = 'Voice Mail Transfer';

    const VOICE_MESSAGING = 'Voice Messaging';

    const FIND_ME_FOLLOW_ME = 'Find-me/Follow-me';

    const PERSONAL_ASSISTANT = 'Personal Assistant';


}

