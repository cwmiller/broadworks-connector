<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * MaliciousCallTraceCallTypeSelection
 *
 * Call Types that are traced for malicious calls
 *
 * @method static MaliciousCallTraceCallTypeSelection ALL_INCOMING()
 * @method static MaliciousCallTraceCallTypeSelection ANSWERED_INCOMING()
 * @method static MaliciousCallTraceCallTypeSelection ALL_INCOMING_AND_OUTGOING()
 * @EnumValueType string
 */
class MaliciousCallTraceCallTypeSelection extends \MyCLabs\Enum\Enum
{
    public const ALL_INCOMING = 'All Incoming';

    public const ANSWERED_INCOMING = 'Answered Incoming';

    public const ALL_INCOMING_AND_OUTGOING = 'All Incoming And Outgoing';
}

