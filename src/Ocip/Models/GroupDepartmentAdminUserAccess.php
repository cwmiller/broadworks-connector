<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDepartmentAdminUserAccess
 *
 * Group's policy for department administrator's access to user configuration.
 *         "Full" indicates full access to users in the department.
 *         "Read-Only Profile" indicates
 *           1) the department administrator is restricted from adding or removing users, and
 *           2) read-only access is granted to the user's profile.
 *         "No Profile" indicates
 *           1) the department administrator is restricted from adding or removing users, and
 *           2) no access is granted to the user's profile.
 *         "None" indicates no access to users in the department.
 *
 * @method static GroupDepartmentAdminUserAccess FULL()
 * @method static GroupDepartmentAdminUserAccess READ_ONLY_PROFILE()
 * @method static GroupDepartmentAdminUserAccess NO_PROFILE()
 * @method static GroupDepartmentAdminUserAccess NONE()
 * @EnumValueType string
 */
class GroupDepartmentAdminUserAccess extends \MyCLabs\Enum\Enum
{
    public const FULL = 'Full';

    public const READ_ONLY_PROFILE = 'Read-Only Profile';

    public const NO_PROFILE = 'No Profile';

    public const NONE = 'None';
}

