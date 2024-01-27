<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAdminProfileAccess
 *
 * Service Provider Administrator's policy for accessing
 *         the service provider profile information.
 *
 * @method static ServiceProviderAdminProfileAccess FULL()
 * @method static ServiceProviderAdminProfileAccess READ_ONLY()
 * @method static ServiceProviderAdminProfileAccess NONE()
 * @EnumValueType string
 */
class ServiceProviderAdminProfileAccess extends \MyCLabs\Enum\Enum
{
    public const FULL = 'Full';

    public const READ_ONLY = 'Read-Only';

    public const NONE = 'None';
}

