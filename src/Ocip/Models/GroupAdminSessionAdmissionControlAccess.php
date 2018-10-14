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
 * @ValueType string
 */
class GroupAdminSessionAdmissionControlAccess extends \MyCLabs\Enum\Enum
{

    const FULL = 'Full';

    const READ_ONLY = 'Read-Only';

    const NONE = 'None';


}

