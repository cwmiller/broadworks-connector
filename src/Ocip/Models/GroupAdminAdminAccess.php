<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAdminAdminAccess
 *
 * Policy for a group administrator's access to group administrators and department
 * administrators.
 *
 * @method static GroupAdminAdminAccess FULL()
 * @method static GroupAdminAdminAccess READ_ONLY()
 * @method static GroupAdminAdminAccess NONE()
 * @ValueType string
 */
class GroupAdminAdminAccess extends \MyCLabs\Enum\Enum
{

    const FULL = 'Full';

    const READ_ONLY = 'Read-Only';

    const NONE = 'None';


}

