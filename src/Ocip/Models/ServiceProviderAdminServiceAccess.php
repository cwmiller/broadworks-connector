<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAdminServiceAccess
 *
 * Service Provider Administrator's policy for accessing services.
 *         "No Authorization" was added in release 14.
 *
 * @method static ServiceProviderAdminServiceAccess FULL()
 * @method static ServiceProviderAdminServiceAccess NO_AUTHORIZATION()
 * @method static ServiceProviderAdminServiceAccess READ_ONLY()
 * @EnumValueType string
 */
class ServiceProviderAdminServiceAccess extends \MyCLabs\Enum\Enum
{
    public const FULL = 'Full';

    public const NO_AUTHORIZATION = 'No Authorization';

    public const READ_ONLY = 'Read-Only';
}

