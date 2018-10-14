<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceInvocationDisposition
 *
 * Indicates the type of service invocation that caused the call to be detached.
 *
 * @method static ServiceInvocationDisposition AUTOMATIC_HOLD_RETRIEVE()
 * @method static ServiceInvocationDisposition CALL_FORWARD_ALWAYS()
 * @method static ServiceInvocationDisposition CALL_FORWARD_BUSY()
 * @method static ServiceInvocationDisposition CALL_FORWARD_NO_ANSWER()
 * @method static ServiceInvocationDisposition CALL_FORWARD_NOT_REACHABLE()
 * @method static ServiceInvocationDisposition CALL_FORWARD_SELECTIVE()
 * @method static ServiceInvocationDisposition CALL_PARK()
 * @method static ServiceInvocationDisposition CALL_PICKUP()
 * @method static ServiceInvocationDisposition DEFLECTION()
 * @method static ServiceInvocationDisposition DIRECTED_CALL_PICKUP()
 * @method static ServiceInvocationDisposition DISTRIBUTION_FROM_CALL_CENTER()
 * @method static ServiceInvocationDisposition DISTRIBUTION_FROM_HUNT_GROUP()
 * @method static ServiceInvocationDisposition DISTRIBUTION_FROM_ROUTE_POINT()
 * @method static ServiceInvocationDisposition DO_NOT_DISTURB()
 * @method static ServiceInvocationDisposition FAX_DEPOSIT()
 * @method static ServiceInvocationDisposition GROUP_NIGHT_FORWARDING()
 * @method static ServiceInvocationDisposition SEQUENTIAL_RING()
 * @method static ServiceInvocationDisposition SERIES_COMPLETION()
 * @method static ServiceInvocationDisposition SIMULTANEOUS_RING()
 * @method static ServiceInvocationDisposition THIRD_PARTY_DEFLECTION()
 * @method static ServiceInvocationDisposition THIRD_PARTY_VOICE_MAIL_SUPPORT()
 * @method static ServiceInvocationDisposition TRANSFER_CONSULT()
 * @method static ServiceInvocationDisposition
 * TRUNK_GROUP_FORWARD_CAPACITY_EXCEEDED()
 * @method static ServiceInvocationDisposition TRUNK_GROUP_FORWARD_UNREACHABLE()
 * @method static ServiceInvocationDisposition TRUNK_GROUP_FORWARD_UNCONDITIONAL()
 * @method static ServiceInvocationDisposition VOICE_MAIL_TRANSFER()
 * @method static ServiceInvocationDisposition VOICE_MESSAGING()
 * @method static ServiceInvocationDisposition FIND_ME_FOLLOW_ME()
 * @ValueType string
 */
class ServiceInvocationDisposition extends \MyCLabs\Enum\Enum
{

    const AUTOMATIC_HOLD_RETRIEVE = 'Automatic Hold/Retrieve';

    const CALL_FORWARD_ALWAYS = 'Call Forward Always';

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


}

