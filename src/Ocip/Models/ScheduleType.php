<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ScheduleType
 *
 * Schedule type.
 *
 * @method static ScheduleType HOLIDAY()
 * @method static ScheduleType TIME()
 * @ValueType string
 */
class ScheduleType extends \MyCLabs\Enum\Enum
{

    const HOLIDAY = 'Holiday';

    const TIME = 'Time';


}

