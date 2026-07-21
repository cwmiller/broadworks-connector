<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAdminPasswordRulesAccess
 *
 * Service Provider Administrator's policy for accessing
 *         the Password Rules.
 *
 * @method static ServiceProviderAdminPasswordRulesAccess FULL()
 * @method static ServiceProviderAdminPasswordRulesAccess READ_ONLY()
 * @EnumValueType string
 */
class ServiceProviderAdminPasswordRulesAccess extends \MyCLabs\Enum\Enum
{
    public const FULL = 'Full';

    public const READ_ONLY = 'Read-Only';
}

