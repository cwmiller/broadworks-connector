<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAdminFeatureAccessCodeAccess
 *
 * Policy for a group administrator's access to feature access codes.
 *
 * @method static GroupAdminFeatureAccessCodeAccess FULL()
 * @method static GroupAdminFeatureAccessCodeAccess READ_ONLY()
 * @EnumValueType string
 */
class GroupAdminFeatureAccessCodeAccess extends \MyCLabs\Enum\Enum
{
    public const FULL = 'Full';

    public const READ_ONLY = 'Read-Only';
}

