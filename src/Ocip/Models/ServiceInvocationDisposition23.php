<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceInvocationDisposition23
 *
 * Indicates the type of service invocation that caused the call to be detached.
 *
 * @method static ServiceInvocationDisposition23 AUTOMATIC_HOLD_RETRIEVE()
 * @method static ServiceInvocationDisposition23 CALL_FORWARD_ALWAYS()
 * @method static ServiceInvocationDisposition23 CALL_FORWARD_ALWAYS_SECONDARY()
 * @method static ServiceInvocationDisposition23 CALL_FORWARD_BUSY()
 * @method static ServiceInvocationDisposition23 CALL_FORWARD_NO_ANSWER()
 * @method static ServiceInvocationDisposition23 CALL_FORWARD_NOT_REACHABLE()
 * @method static ServiceInvocationDisposition23 CALL_FORWARD_SELECTIVE()
 * @method static ServiceInvocationDisposition23 CALL_PARK()
 * @method static ServiceInvocationDisposition23 CALL_PICKUP()
 * @method static ServiceInvocationDisposition23 DEFLECTION()
 * @method static ServiceInvocationDisposition23 DIRECTED_CALL_PICKUP()
 * @method static ServiceInvocationDisposition23 DISTRIBUTION_FROM_CALL_CENTER()
 * @method static ServiceInvocationDisposition23 DISTRIBUTION_FROM_HUNT_GROUP()
 * @method static ServiceInvocationDisposition23 DISTRIBUTION_FROM_ROUTE_POINT()
 * @method static ServiceInvocationDisposition23 DO_NOT_DISTURB()
 * @method static ServiceInvocationDisposition23 FAX_DEPOSIT()
 * @method static ServiceInvocationDisposition23 GROUP_NIGHT_FORWARDING()
 * @method static ServiceInvocationDisposition23 SEQUENTIAL_RING()
 * @method static ServiceInvocationDisposition23 SERIES_COMPLETION()
 * @method static ServiceInvocationDisposition23 SIMULTANEOUS_RING()
 * @method static ServiceInvocationDisposition23 THIRD_PARTY_DEFLECTION()
 * @method static ServiceInvocationDisposition23 THIRD_PARTY_VOICE_MAIL_SUPPORT()
 * @method static ServiceInvocationDisposition23 TRANSFER_CONSULT()
 * @method static ServiceInvocationDisposition23 TRUNK_GROUP_FORWARD_CAPACITY_EXCEEDED()
 * @method static ServiceInvocationDisposition23 TRUNK_GROUP_FORWARD_UNREACHABLE()
 * @method static ServiceInvocationDisposition23 TRUNK_GROUP_FORWARD_UNCONDITIONAL()
 * @method static ServiceInvocationDisposition23 VOICE_MAIL_TRANSFER()
 * @method static ServiceInvocationDisposition23 VOICE_MESSAGING()
 * @method static ServiceInvocationDisposition23 FIND_ME_FOLLOW_ME()
 * @method static ServiceInvocationDisposition23 PERSONAL_ASSISTANT()
 * @method static ServiceInvocationDisposition23 VOICEXML_SCRIPT_TERMINATION()
 * @method static ServiceInvocationDisposition23 AGENT_WRAP_UP()
 * @EnumValueType string
 */
class ServiceInvocationDisposition23 extends \MyCLabs\Enum\Enum
{
    public const AUTOMATIC_HOLD_RETRIEVE = 'Automatic Hold/Retrieve';

    public const CALL_FORWARD_ALWAYS = 'Call Forward Always';

    public const CALL_FORWARD_ALWAYS_SECONDARY = 'Call Forward Always Secondary';

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

    public const PERSONAL_ASSISTANT = 'Personal Assistant';

    public const VOICEXML_SCRIPT_TERMINATION = 'VoiceXML Script Termination';

    public const AGENT_WRAP_UP = 'Agent Wrap-Up';
}

