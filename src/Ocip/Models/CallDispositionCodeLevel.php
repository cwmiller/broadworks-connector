<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallDispositionCodeLevel
 *
 * Identifies at which level in the system an call center call disposition code is created.
 *
 * @method static CallDispositionCodeLevel ENTERPRISE()
 * @method static CallDispositionCodeLevel GROUP()
 * @method static CallDispositionCodeLevel QUEUE()
 * @EnumValueType string
 */
class CallDispositionCodeLevel extends \MyCLabs\Enum\Enum
{
    public const ENTERPRISE = 'Enterprise';

    public const GROUP = 'Group';

    public const QUEUE = 'Queue';
}

