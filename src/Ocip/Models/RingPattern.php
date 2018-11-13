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

    const NORMAL = 'Normal';

    const LONG_LONG = 'Long-Long';

    const SHORT_SHORT_LONG = 'Short-Short-Long';

    const SHORT_LONG_SHORT = 'Short-Long-Short';


}

