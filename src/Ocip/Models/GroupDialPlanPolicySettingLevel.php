<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDialPlanPolicySettingLevel
 *
 * Choices for the group Dial Plan Policy to decide which type of settings shall be used.
 *         Notes: Choice cannot be 'sp' or 'group' if Service Provider or group does not have
 *         public digit map set.
 *
 * @method static GroupDialPlanPolicySettingLevel SYSTEM()
 * @method static GroupDialPlanPolicySettingLevel SERVICE_PROVIDER()
 * @method static GroupDialPlanPolicySettingLevel GROUP()
 * @EnumValueType string
 */
class GroupDialPlanPolicySettingLevel extends \MyCLabs\Enum\Enum
{
    public const SYSTEM = 'System';

    public const SERVICE_PROVIDER = 'Service Provider';

    public const GROUP = 'Group';
}

