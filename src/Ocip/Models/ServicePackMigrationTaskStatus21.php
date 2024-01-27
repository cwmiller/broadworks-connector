<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServicePackMigrationTaskStatus21
 *
 * Possible status values of a service pack migration task.
 *
 * @method static ServicePackMigrationTaskStatus21 AWAITING_EDITS()
 * @method static ServicePackMigrationTaskStatus21 PENDING()
 * @method static ServicePackMigrationTaskStatus21 PROCESSING()
 * @method static ServicePackMigrationTaskStatus21 TERMINATING()
 * @method static ServicePackMigrationTaskStatus21 TERMINATED()
 * @method static ServicePackMigrationTaskStatus21 STOPPED_BY_SYSTEM()
 * @method static ServicePackMigrationTaskStatus21 COMPLETED()
 * @method static ServicePackMigrationTaskStatus21 EXPIRED()
 * @EnumValueType string
 */
class ServicePackMigrationTaskStatus21 extends \MyCLabs\Enum\Enum
{
    public const AWAITING_EDITS = 'Awaiting Edits';

    public const PENDING = 'Pending';

    public const PROCESSING = 'Processing';

    public const TERMINATING = 'Terminating';

    public const TERMINATED = 'Terminated';

    public const STOPPED_BY_SYSTEM = 'Stopped By System';

    public const COMPLETED = 'Completed';

    public const EXPIRED = 'Expired';
}

