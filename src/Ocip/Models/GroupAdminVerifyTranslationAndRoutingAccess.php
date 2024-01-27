<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAdminVerifyTranslationAndRoutingAccess
 *
 * Policy for a group administrator's access to Verify Translation and Routing feature.
 *
 * @method static GroupAdminVerifyTranslationAndRoutingAccess FULL()
 * @method static GroupAdminVerifyTranslationAndRoutingAccess NONE()
 * @EnumValueType string
 */
class GroupAdminVerifyTranslationAndRoutingAccess extends \MyCLabs\Enum\Enum
{
    public const FULL = 'Full';

    public const NONE = 'None';
}

