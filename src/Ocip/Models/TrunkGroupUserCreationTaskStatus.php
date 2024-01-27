<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * TrunkGroupUserCreationTaskStatus
 *
 * Trunk Group user creation task status.
 *
 * @method static TrunkGroupUserCreationTaskStatus PENDING()
 * @method static TrunkGroupUserCreationTaskStatus PROCESSING()
 * @method static TrunkGroupUserCreationTaskStatus COMPLETED()
 * @method static TrunkGroupUserCreationTaskStatus FAILED()
 * @EnumValueType string
 */
class TrunkGroupUserCreationTaskStatus extends \MyCLabs\Enum\Enum
{
    public const PENDING = 'Pending';

    public const PROCESSING = 'Processing';

    public const COMPLETED = 'Completed';

    public const FAILED = 'Failed';
}

