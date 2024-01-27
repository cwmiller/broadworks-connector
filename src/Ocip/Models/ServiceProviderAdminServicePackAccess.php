<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAdminServicePackAccess
 *
 * Service Provider Administrator's policy for accessing service packs.
 *
 * @method static ServiceProviderAdminServicePackAccess FULL()
 * @method static ServiceProviderAdminServicePackAccess NONE()
 * @EnumValueType string
 */
class ServiceProviderAdminServicePackAccess extends \MyCLabs\Enum\Enum
{
    public const FULL = 'Full';

    public const NONE = 'None';
}

