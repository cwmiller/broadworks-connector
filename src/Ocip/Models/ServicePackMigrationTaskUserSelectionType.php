<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServicePackMigrationTaskUserSelectionType
 *
 * Possible status values of a service pack migration task.
 *
 * @method static ServicePackMigrationTaskUserSelectionType ALL()
 * @method static ServicePackMigrationTaskUserSelectionType ANY()
 * @method static ServicePackMigrationTaskUserSelectionType NONE()
 * @EnumValueType string
 */
class ServicePackMigrationTaskUserSelectionType extends \MyCLabs\Enum\Enum
{

    const ALL = 'All';

    const ANY = 'Any';

    const NONE = 'None';


}

