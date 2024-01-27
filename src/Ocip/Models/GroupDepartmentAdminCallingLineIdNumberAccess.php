<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDepartmentAdminCallingLineIdNumberAccess
 *
 * Department Administrator's policy for accessing calling line id number.
 *
 * @method static GroupDepartmentAdminCallingLineIdNumberAccess FULL()
 * @method static GroupDepartmentAdminCallingLineIdNumberAccess READ_ONLY()
 * @EnumValueType string
 */
class GroupDepartmentAdminCallingLineIdNumberAccess extends \MyCLabs\Enum\Enum
{
    public const FULL = 'Full';

    public const READ_ONLY = 'Read-Only';
}

