<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * BasicCallLogsType
 *
 * Call Log type.
 *                 Replaced By: CallLogsType
 *
 * @method static BasicCallLogsType PLACED()
 * @method static BasicCallLogsType RECEIVED()
 * @method static BasicCallLogsType MISSED()
 * @EnumValueType string
 */
class BasicCallLogsType extends \MyCLabs\Enum\Enum
{

    const PLACED = 'Placed';

    const RECEIVED = 'Received';

    const MISSED = 'Missed';


}

