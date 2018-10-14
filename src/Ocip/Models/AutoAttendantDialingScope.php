<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AutoAttendantDialingScope
 *
 * The scope of extension or name dialing.
 *
 * @method static AutoAttendantDialingScope ENTERPRISE()
 * @method static AutoAttendantDialingScope GROUP()
 * @method static AutoAttendantDialingScope DEPARTMENT()
 * @ValueType string
 */
class AutoAttendantDialingScope extends \MyCLabs\Enum\Enum
{

    const ENTERPRISE = 'Enterprise';

    const GROUP = 'Group';

    const DEPARTMENT = 'Department';


}

