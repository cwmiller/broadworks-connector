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

    const CALL_FORWARDING_ALWAYS = 'Call Forwarding Always';

    const CALL_FORWARDING_ALWAYS_SECONDARY = 'Call Forwarding Always Secondary';

    const CALL_FORWARDING_BUSY = 'Call Forwarding Busy';

    const CALL_FORWARDING_NO_ANSWER = 'Call Forwarding No Answer';

    const CALL_FORWARDING_NOT_REACHABLE = 'Call Forwarding Not Reachable';

    const CALL_FORWARDING_SELECTIVE = 'Call Forwarding Selective';


}

