<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupUserGroupDirectoryAccess
 *
 * Group's policy for a user's access to the group or enterprise directory.
 *
 * @method static GroupUserGroupDirectoryAccess FULL()
 * @method static GroupUserGroupDirectoryAccess NONE()
 * @ValueType string
 */
class GroupUserGroupDirectoryAccess extends \MyCLabs\Enum\Enum
{

    const FULL = 'Full';

    const NONE = 'None';


}

