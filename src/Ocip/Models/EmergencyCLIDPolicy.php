<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EmergencyCLIDPolicy
 *
 * Calling Line ID Policy selections for Emergency calls.
 *         NOTE:  The "Use Group CLID" value indicates the department CLID will be used if available otherwise the group CLID is used.
 *
 * @method static EmergencyCLIDPolicy USE_DN()
 * @method static EmergencyCLIDPolicy USE_CONFIGURABLE_CLID()
 * @method static EmergencyCLIDPolicy USE_GROUP_CLID()
 * @method static EmergencyCLIDPolicy USE_USER_ECBN()
 * @method static EmergencyCLIDPolicy USE_GROUP_ECBN()
 * @EnumValueType string
 */
class EmergencyCLIDPolicy extends \MyCLabs\Enum\Enum
{
    public const USE_DN = 'Use DN';

    public const USE_CONFIGURABLE_CLID = 'Use Configurable CLID';

    public const USE_GROUP_CLID = 'Use Group CLID';

    public const USE_USER_ECBN = 'Use User ECBN';

    public const USE_GROUP_ECBN = 'Use Group ECBN';
}

