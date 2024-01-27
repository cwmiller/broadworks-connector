<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAdminType
 *
 * Group Administrator type
 *         "Group" indicates the group admin is a group admin.
 *         "Department" indicates the group admin is a department admin.
 *
 * @method static GroupAdminType GROUP()
 * @method static GroupAdminType DEPARTMENT()
 * @EnumValueType string
 */
class GroupAdminType extends \MyCLabs\Enum\Enum
{
    public const GROUP = 'Group';

    public const DEPARTMENT = 'Department';
}

