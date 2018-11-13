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

    const NOTSTARTED = 'NotStarted';

    const PENDING = 'Pending';

    const PROCESSING = 'Processing';


}

