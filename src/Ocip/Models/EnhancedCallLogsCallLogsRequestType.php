<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnhancedCallLogsCallLogsRequestType
 *
 * Call Log type used by enhanced call logs requests
 *
 * @method static EnhancedCallLogsCallLogsRequestType PLACED()
 * @method static EnhancedCallLogsCallLogsRequestType RECEIVED()
 * @method static EnhancedCallLogsCallLogsRequestType MISSED()
 * @method static EnhancedCallLogsCallLogsRequestType RECEIVEDORMISSED()
 * @EnumValueType string
 */
class EnhancedCallLogsCallLogsRequestType extends \MyCLabs\Enum\Enum
{
    public const PLACED = 'Placed';

    public const RECEIVED = 'Received';

    public const MISSED = 'Missed';

    public const RECEIVEDORMISSED = 'ReceivedOrMissed';
}

