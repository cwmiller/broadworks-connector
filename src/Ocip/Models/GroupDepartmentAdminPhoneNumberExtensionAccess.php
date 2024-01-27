<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDepartmentAdminPhoneNumberExtensionAccess
 *
 * Policy for a department administrator's access to assigning phone numbers and extensions.
 *
 * @method static GroupDepartmentAdminPhoneNumberExtensionAccess FULL()
 * @method static GroupDepartmentAdminPhoneNumberExtensionAccess READ_ONLY()
 * @EnumValueType string
 */
class GroupDepartmentAdminPhoneNumberExtensionAccess extends \MyCLabs\Enum\Enum
{
    public const FULL = 'Full';

    public const READ_ONLY = 'Read-Only';
}

