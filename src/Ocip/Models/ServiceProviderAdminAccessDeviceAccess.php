<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAdminAccessDeviceAccess
 *
 * Service Provider Administrator's policy for accessing access devices.
 *
 * @method static ServiceProviderAdminAccessDeviceAccess FULL()
 * @method static ServiceProviderAdminAccessDeviceAccess ASSOCIATE_USER_WITH_DEVICE()
 * @method static ServiceProviderAdminAccessDeviceAccess READ_ONLY()
 * @EnumValueType string
 */
class ServiceProviderAdminAccessDeviceAccess extends \MyCLabs\Enum\Enum
{
    public const FULL = 'Full';

    public const ASSOCIATE_USER_WITH_DEVICE = 'Associate User With Device';

    public const READ_ONLY = 'Read-Only';
}

