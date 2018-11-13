<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAdminUserAccess
 *
 * Policy for a group administrator's access to user configuration.
 *         "Full" indicates full access to users in the group.
 *         "Full Profile" indicates
 *           1) the group administrator is restricted from adding or removing
 * users, but
 *           2) has full access to the user's profile
 *         "Read-Only Profile" indicates
 *           1) the group administrator is restricted from adding or removing
 * users, and
 *           2) read-only access is granted to the user's profile.
 *         "No Profile" indicates
 *           1) the group administrator is restricted from adding or removing
 * users, and
 *           2) no access is granted to the user's profile.
 *         "None" indicates no access to users in the group.
 *
 * @method static GroupAdminUserAccess FULL()
 * @method static GroupAdminUserAccess FULL_PROFILE()
 * @method static GroupAdminUserAccess READ_ONLY_PROFILE()
 * @method static GroupAdminUserAccess NO_PROFILE()
 * @method static GroupAdminUserAccess NONE()
 * @EnumValueType string
 */
class GroupAdminUserAccess extends \MyCLabs\Enum\Enum
{

    const FULL = 'Full';

    const FULL_PROFILE = 'Full Profile';

    const READ_ONLY_PROFILE = 'Read-Only Profile';

    const NO_PROFILE = 'No Profile';

    const NONE = 'None';


}

