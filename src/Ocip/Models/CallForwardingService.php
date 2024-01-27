<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallForwardingService
 *
 * Choices for Call Forwarding Service type
 *
 * @method static CallForwardingService CALL_FORWARDING_ALWAYS()
 * @method static CallForwardingService CALL_FORWARDING_ALWAYS_SECONDARY()
 * @method static CallForwardingService CALL_FORWARDING_BUSY()
 * @method static CallForwardingService CALL_FORWARDING_NO_ANSWER()
 * @method static CallForwardingService CALL_FORWARDING_NOT_REACHABLE()
 * @method static CallForwardingService CALL_FORWARDING_SELECTIVE()
 * @EnumValueType string
 */
class CallForwardingService extends \MyCLabs\Enum\Enum
{
    public const CALL_FORWARDING_ALWAYS = 'Call Forwarding Always';

    public const CALL_FORWARDING_ALWAYS_SECONDARY = 'Call Forwarding Always Secondary';

    public const CALL_FORWARDING_BUSY = 'Call Forwarding Busy';

    public const CALL_FORWARDING_NO_ANSWER = 'Call Forwarding No Answer';

    public const CALL_FORWARDING_NOT_REACHABLE = 'Call Forwarding Not Reachable';

    public const CALL_FORWARDING_SELECTIVE = 'Call Forwarding Selective';
}

