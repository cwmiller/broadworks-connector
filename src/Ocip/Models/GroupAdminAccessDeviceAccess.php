<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAdminAccessDeviceAccess
 *
 * Policy for a group administrator's access to access devices.
 *        "Full" indicates full access to access devices.
 *        "Associate User With Device" indicates
 *          1) read-only access to devices, but
 *          2) the group administrator may associate users with devices
 *        "Read-Only" indicates read-only access to devices and user-device
 * associations
 *
 * @method static GroupAdminAccessDeviceAccess FULL()
 * @method static GroupAdminAccessDeviceAccess ASSOCIATE_USER_WITH_DEVICE()
 * @method static GroupAdminAccessDeviceAccess READ_ONLY()
 * @EnumValueType string
 */
class GroupAdminAccessDeviceAccess extends \MyCLabs\Enum\Enum
{

    const FULL = 'Full';

    const ASSOCIATE_USER_WITH_DEVICE = 'Associate User With Device';

    const READ_ONLY = 'Read-Only';


}

