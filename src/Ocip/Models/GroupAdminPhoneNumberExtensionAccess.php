<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAdminPhoneNumberExtensionAccess
 *
 * Policy for a group administrator's access to assigning phone numbers and extensions.
 *
 * @method static GroupAdminPhoneNumberExtensionAccess FULL()
 * @method static GroupAdminPhoneNumberExtensionAccess READ_ONLY()
 * @EnumValueType string
 */
class GroupAdminPhoneNumberExtensionAccess extends \MyCLabs\Enum\Enum
{
    public const FULL = 'Full';

    public const READ_ONLY = 'Read-Only';
}

