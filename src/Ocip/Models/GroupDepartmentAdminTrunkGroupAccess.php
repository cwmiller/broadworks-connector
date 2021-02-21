<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDepartmentAdminTrunkGroupAccess
 *
 * Group's policy for department administrator's access to trunk group configuration.
 *         "Full" indicates full access to trunk groups in the department.
 *         "None" indicates no access to trunk groups in the department.
 *
 * @method static GroupDepartmentAdminTrunkGroupAccess FULL()
 * @method static GroupDepartmentAdminTrunkGroupAccess NONE()
 * @EnumValueType string
 */
class GroupDepartmentAdminTrunkGroupAccess extends \MyCLabs\Enum\Enum
{

    const FULL = 'Full';

    const NONE = 'None';


}

