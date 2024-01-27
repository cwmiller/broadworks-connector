<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * RingPattern
 *
 * The supported ring patterns.
 *
 * @method static RingPattern NORMAL()
 * @method static RingPattern LONG_LONG()
 * @method static RingPattern SHORT_SHORT_LONG()
 * @method static RingPattern SHORT_LONG_SHORT()
 * @EnumValueType string
 */
class RingPattern extends \MyCLabs\Enum\Enum
{
    public const NORMAL = 'Normal';

    public const LONG_LONG = 'Long-Long';

    public const SHORT_SHORT_LONG = 'Short-Short-Long';

    public const SHORT_LONG_SHORT = 'Short-Long-Short';
}

