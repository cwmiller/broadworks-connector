<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServicePackMigrationTaskStatus
 *
 * Possible status values of a service pack migration task.
 *
 * @method static ServicePackMigrationTaskStatus AWAITING_EDITS()
 * @method static ServicePackMigrationTaskStatus PENDING()
 * @method static ServicePackMigrationTaskStatus PROCESSING()
 * @method static ServicePackMigrationTaskStatus TERMINATING()
 * @method static ServicePackMigrationTaskStatus TERMINATED()
 * @method static ServicePackMigrationTaskStatus STOPPED_BY_SYSTEM()
 * @method static ServicePackMigrationTaskStatus COMPLETED()
 * @EnumValueType string
 */
class ServicePackMigrationTaskStatus extends \MyCLabs\Enum\Enum
{

    const AWAITING_EDITS = 'Awaiting Edits';

    const PENDING = 'Pending';

    const PROCESSING = 'Processing';

    const TERMINATING = 'Terminating';

    const TERMINATED = 'Terminated';

    const STOPPED_BY_SYSTEM = 'Stopped By System';

    const COMPLETED = 'Completed';


}

