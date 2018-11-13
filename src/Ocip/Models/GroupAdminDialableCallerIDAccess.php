<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAdminDialableCallerIDAccess
 *
 * Policy for accessing the group Dialable Caller ID configuration.
 *
 * @method static GroupAdminDialableCallerIDAccess FULL()
 * @method static GroupAdminDialableCallerIDAccess READ_ONLY()
 * @method static GroupAdminDialableCallerIDAccess NONE()
 * @EnumValueType string
 */
class GroupAdminDialableCallerIDAccess extends \MyCLabs\Enum\Enum
{

    const FULL = 'Full';

    const READ_ONLY = 'Read-Only';

    const NONE = 'None';


}

