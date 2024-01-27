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
 * @EnumValueType string
 */
class GroupAdminOfficeZoneAccess extends \MyCLabs\Enum\Enum
{
    public const FULL = 'Full';

    public const READ_ONLY = 'Read-Only';
}

