<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupUserCallLogAccess
 *
 * Policy for user to delete call logs
 *
 * @method static GroupUserCallLogAccess FULL()
 * @method static GroupUserCallLogAccess READ_ONLY()
 * @EnumValueType string
 */
class GroupUserCallLogAccess extends \MyCLabs\Enum\Enum
{

    const FULL = 'Full';

    const READ_ONLY = 'Read-Only';


}

