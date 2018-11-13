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

    const PLACED = 'Placed';

    const RECEIVED = 'Received';

    const MISSED = 'Missed';

    const RECEIVEDORMISSED = 'ReceivedOrMissed';


}

