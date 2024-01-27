<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * FlexibleSeatingHostAccessLevel
 *
 * Access level of a flexible seating host
 *
 * @method static FlexibleSeatingHostAccessLevel ENTERPRISE()
 * @method static FlexibleSeatingHostAccessLevel GROUP()
 * @EnumValueType string
 */
class FlexibleSeatingHostAccessLevel extends \MyCLabs\Enum\Enum
{
    public const ENTERPRISE = 'Enterprise';

    public const GROUP = 'Group';
}

