<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAdminOfficeZoneAccess
 *
 * Group Administrator's policy for accessing
 *         the Office Zone information.
 *
 * @method static GroupAdminOfficeZoneAccess FULL()
 * @method static GroupAdminOfficeZoneAccess READ_ONLY()
 * @ValueType string
 */
class GroupAdminOfficeZoneAccess extends \MyCLabs\Enum\Enum
{

    const FULL = 'Full';

    const READ_ONLY = 'Read-Only';


}

