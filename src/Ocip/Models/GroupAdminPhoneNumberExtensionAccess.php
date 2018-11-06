<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAdminPhoneNumberExtensionAccess
 *
 * Policy for a group administrator's access to assigning phone numbers and
 * extensions.
 *
 * @method static GroupAdminPhoneNumberExtensionAccess FULL()
 * @method static GroupAdminPhoneNumberExtensionAccess READ_ONLY()
 * @ValueType string
 */
class GroupAdminPhoneNumberExtensionAccess extends \MyCLabs\Enum\Enum
{

    const FULL = 'Full';

    const READ_ONLY = 'Read-Only';


}
