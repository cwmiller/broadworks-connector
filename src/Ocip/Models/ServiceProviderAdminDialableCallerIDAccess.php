<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAdminDialableCallerIDAccess
 *
 * Policy for accessing the service provider Dialable Caller ID configuration.
 *
 * @method static ServiceProviderAdminDialableCallerIDAccess FULL()
 * @method static ServiceProviderAdminDialableCallerIDAccess READ_ONLY()
 * @method static ServiceProviderAdminDialableCallerIDAccess NONE()
 * @EnumValueType string
 */
class ServiceProviderAdminDialableCallerIDAccess extends \MyCLabs\Enum\Enum
{
    public const FULL = 'Full';

    public const READ_ONLY = 'Read-Only';

    public const NONE = 'None';
}

