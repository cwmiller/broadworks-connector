<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAdminSessionAdmissionControlAccess
 *
 * Group Administrator's policy for accessing
 *         the Session Admission Control information.
 *
 * @method static GroupAdminSessionAdmissionControlAccess FULL()
 * @method static GroupAdminSessionAdmissionControlAccess READ_ONLY()
 * @method static GroupAdminSessionAdmissionControlAccess NONE()
 * @EnumValueType string
 */
class GroupAdminSessionAdmissionControlAccess extends \MyCLabs\Enum\Enum
{
    public const FULL = 'Full';

    public const READ_ONLY = 'Read-Only';

    public const NONE = 'None';
}

