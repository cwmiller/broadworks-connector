<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAdminVerifyTranslationAndRoutingAccess
 *
 * Service Provider Administrator's policy for accessing to Verify Translation and Routing feature.
 *
 * @method static ServiceProviderAdminVerifyTranslationAndRoutingAccess FULL()
 * @method static ServiceProviderAdminVerifyTranslationAndRoutingAccess NONE()
 * @EnumValueType string
 */
class ServiceProviderAdminVerifyTranslationAndRoutingAccess extends \MyCLabs\Enum\Enum
{
    public const FULL = 'Full';

    public const NONE = 'None';
}

