<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ScheduleCombinationType
 *
 * Schedule Combination.
 *
 * @method static ScheduleCombinationType UNION()
 * @method static ScheduleCombinationType INTERSECTION()
 * @EnumValueType string
 */
class ScheduleCombinationType extends \MyCLabs\Enum\Enum
{

    const UNION = 'UNION';

    const INTERSECTION = 'INTERSECTION';


}

