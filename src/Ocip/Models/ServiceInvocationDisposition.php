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
 * @method static ServiceInvocationDisposition TRUNK_GROUP_FORWARD_CAPACITY_EXCEEDED()
 * @method static ServiceInvocationDisposition TRUNK_GROUP_FORWARD_UNREACHABLE()
 * @method static ServiceInvocationDisposition TRUNK_GROUP_FORWARD_UNCONDITIONAL()
 * @method static ServiceInvocationDisposition VOICE_MAIL_TRANSFER()
 * @method static ServiceInvocationDisposition VOICE_MESSAGING()
 * @method static ServiceInvocationDisposition FIND_ME_FOLLOW_ME()
 * @EnumValueType string
 */
class ServiceInvocationDisposition extends \MyCLabs\Enum\Enum
{
    public const AUTOMATIC_HOLD_RETRIEVE = 'Automatic Hold/Retrieve';

    public const CALL_FORWARD_ALWAYS = 'Call Forward Always';

    public const CALL_FORWARD_BUSY = 'Call Forward Busy';

    public const CALL_FORWARD_NO_ANSWER = 'Call Forward No Answer';

    public const CALL_FORWARD_NOT_REACHABLE = 'Call Forward Not Reachable';

    public const CALL_FORWARD_SELECTIVE = 'Call Forward Selective';

    public const CALL_PARK = 'Call Park';

    public const CALL_PICKUP = 'Call Pickup';

    public const DEFLECTION = 'Deflection';

    public const DIRECTED_CALL_PICKUP = 'Directed Call Pickup';

    public const DISTRIBUTION_FROM_CALL_CENTER = 'Distribution from Call Center';

    public const DISTRIBUTION_FROM_HUNT_GROUP = 'Distribution from Hunt Group';

    public const DISTRIBUTION_FROM_ROUTE_POINT = 'Distribution from Route Point';

    public const DO_NOT_DISTURB = 'Do Not Disturb';

    public const FAX_DEPOSIT = 'Fax Deposit';

    public const GROUP_NIGHT_FORWARDING = 'Group Night Forwarding';

    public const SEQUENTIAL_RING = 'Sequential Ring';

    public const SERIES_COMPLETION = 'Series Completion';

    public const SIMULTANEOUS_RING = 'Simultaneous Ring';

    public const THIRD_PARTY_DEFLECTION = 'Third Party Deflection';

    public const THIRD_PARTY_VOICE_MAIL_SUPPORT = 'Third Party Voice Mail Support';

    public const TRANSFER_CONSULT = 'Transfer Consult';

    public const TRUNK_GROUP_FORWARD_CAPACITY_EXCEEDED = 'Trunk Group Forward Capacity Exceeded';

    public const TRUNK_GROUP_FORWARD_UNREACHABLE = 'Trunk Group Forward Unreachable';

    public const TRUNK_GROUP_FORWARD_UNCONDITIONAL = 'Trunk Group Forward Unconditional';

    public const VOICE_MAIL_TRANSFER = 'Voice Mail Transfer';

    public const VOICE_MESSAGING = 'Voice Messaging';

    public const FIND_ME_FOLLOW_ME = 'Find-me/Follow-me';
}

