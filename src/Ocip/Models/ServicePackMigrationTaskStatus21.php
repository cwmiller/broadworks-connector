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
 * @ValueType string
 */
class ServicePackMigrationTaskStatus21 extends \MyCLabs\Enum\Enum
{

    const AWAITING_EDITS = 'Awaiting Edits';

    const PENDING = 'Pending';

    const PROCESSING = 'Processing';

    const TERMINATING = 'Terminating';

    const TERMINATED = 'Terminated';

    const STOPPED_BY_SYSTEM = 'Stopped By System';

    const COMPLETED = 'Completed';

    const EXPIRED = 'Expired';


}

