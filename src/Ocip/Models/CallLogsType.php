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
 * @ValueType string
 */
class CallLogsType extends \MyCLabs\Enum\Enum
{

    const PLACED = 'Placed';

    const RECEIVED = 'Received';

    const MISSED = 'Missed';


}

