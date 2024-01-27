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
    public const UNION = 'UNION';

    public const INTERSECTION = 'INTERSECTION';
}

