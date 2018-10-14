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
 * @ValueType string
 */
class TrunkGroupUserCreationTaskStatus extends \MyCLabs\Enum\Enum
{

    const PENDING = 'Pending';

    const PROCESSING = 'Processing';

    const COMPLETED = 'Completed';

    const FAILED = 'Failed';


}

