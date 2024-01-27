<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * LineOrderingTaskStatus
 *
 * Line ordering task status value.
 *
 * @method static LineOrderingTaskStatus NOTSTARTED()
 * @method static LineOrderingTaskStatus PENDING()
 * @method static LineOrderingTaskStatus PROCESSING()
 * @EnumValueType string
 */
class LineOrderingTaskStatus extends \MyCLabs\Enum\Enum
{
    public const NOTSTARTED = 'NotStarted';

    public const PENDING = 'Pending';

    public const PROCESSING = 'Processing';
}

