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
    public const AWAITING_EDITS = 'Awaiting Edits';

    public const PENDING = 'Pending';

    public const PROCESSING = 'Processing';

    public const TERMINATING = 'Terminating';

    public const TERMINATED = 'Terminated';

    public const STOPPED_BY_SYSTEM = 'Stopped By System';

    public const COMPLETED = 'Completed';
}

