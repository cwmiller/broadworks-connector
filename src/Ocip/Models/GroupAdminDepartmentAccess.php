<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAdminDepartmentAccess
 *
 * Policy for a group administrator's access to departments.
 *         "Full" indicates full access to departments.
 *         "Read-Only" indicates read-only access to the department list
 *         "None" indicates no access to the department list
 *
 * @method static GroupAdminDepartmentAccess FULL()
 * @method static GroupAdminDepartmentAccess READ_ONLY()
 * @method static GroupAdminDepartmentAccess NONE()
 * @ValueType string
 */
class GroupAdminDepartmentAccess extends \MyCLabs\Enum\Enum
{

    const FULL = 'Full';

    const READ_ONLY = 'Read-Only';

    const NONE = 'None';


}

