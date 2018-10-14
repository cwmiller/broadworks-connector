<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAdminProfileAccess
 *
 * Policy for a group administrator's access to the group profile.
 *
 * @method static GroupAdminProfileAccess FULL()
 * @method static GroupAdminProfileAccess READ_ONLY()
 * @method static GroupAdminProfileAccess NONE()
 * @ValueType string
 */
class GroupAdminProfileAccess extends \MyCLabs\Enum\Enum
{

    const FULL = 'Full';

    const READ_ONLY = 'Read-Only';

    const NONE = 'None';


}

