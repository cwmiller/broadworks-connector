<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCLIDPolicy
 *
 * Calling Line ID Policy Selections.
 *         NOTE:  The "Use Group CLID" value indicates the department CLID will be
 * used if available otherwise the group CLID is used.
 *
 * @method static GroupCLIDPolicy USE_DN()
 * @method static GroupCLIDPolicy USE_CONFIGURABLE_CLID()
 * @method static GroupCLIDPolicy USE_GROUP_CLID()
 * @EnumValueType string
 */
class GroupCLIDPolicy extends \MyCLabs\Enum\Enum
{

    const USE_DN = 'Use DN';

    const USE_CONFIGURABLE_CLID = 'Use Configurable CLID';

    const USE_GROUP_CLID = 'Use Group CLID';


}

