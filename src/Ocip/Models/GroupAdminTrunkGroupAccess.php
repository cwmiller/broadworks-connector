<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAdminTrunkGroupAccess
 *
 * Policy for a group administrator's access to trunk groups.
 *         "Full" indicates full access to add/modify/delete trunk groups in the
 * group.
 *         "Full Resources" indicates
 *           1) Restricted from adding or removing trunk groups, and
 *           2) Full access to trunk group resources
 *         "Read-Only Resources" indicates
 *           1) Restricted from adding or removing trunk groups, and
 *           2) Read-only access to trunk group resources
 *         "None" indicates no access to trunk groups in the group.
 *
 * @method static GroupAdminTrunkGroupAccess FULL()
 * @method static GroupAdminTrunkGroupAccess FULL_RESOURCES()
 * @method static GroupAdminTrunkGroupAccess READ_ONLY_RESOURCES()
 * @method static GroupAdminTrunkGroupAccess NONE()
 * @ValueType string
 */
class GroupAdminTrunkGroupAccess extends \MyCLabs\Enum\Enum
{

    const FULL = 'Full';

    const FULL_RESOURCES = 'Full Resources';

    const READ_ONLY_RESOURCES = 'Read-Only Resources';

    const NONE = 'None';


}

