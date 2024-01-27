<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAdminAdminAccess
 *
 * Policy for a group administrator's access to group administrators and department administrators.
 *
 * @method static GroupAdminAdminAccess FULL()
 * @method static GroupAdminAdminAccess READ_ONLY()
 * @method static GroupAdminAdminAccess NONE()
 * @EnumValueType string
 */
class GroupAdminAdminAccess extends \MyCLabs\Enum\Enum
{
    public const FULL = 'Full';

    public const READ_ONLY = 'Read-Only';

    public const NONE = 'None';
}

