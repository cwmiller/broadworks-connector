<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnhancedCallLogsType
 *
 * Call Log type.
 *        Replaced By: CallLogsType
 *
 * @method static EnhancedCallLogsType PLACED()
 * @method static EnhancedCallLogsType RECEIVED()
 * @method static EnhancedCallLogsType MISSED()
 * @EnumValueType string
 */
class EnhancedCallLogsType extends \MyCLabs\Enum\Enum
{
    public const PLACED = 'Placed';

    public const RECEIVED = 'Received';

    public const MISSED = 'Missed';
}

