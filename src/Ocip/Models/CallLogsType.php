<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallLogsType
 *
 * Call Log type.
 *
 * @method static CallLogsType PLACED()
 * @method static CallLogsType RECEIVED()
 * @method static CallLogsType MISSED()
 * @EnumValueType string
 */
class CallLogsType extends \MyCLabs\Enum\Enum
{
    public const PLACED = 'Placed';

    public const RECEIVED = 'Received';

    public const MISSED = 'Missed';
}

