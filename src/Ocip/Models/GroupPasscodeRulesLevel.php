<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupPasscodeRulesLevel
 *
 * Choices for the group passcode rule to decide which type of rules to use.
 *
 * @method static GroupPasscodeRulesLevel SYSTEM()
 * @method static GroupPasscodeRulesLevel SERVICE_PROVIDER()
 * @method static GroupPasscodeRulesLevel GROUP()
 * @EnumValueType string
 */
class GroupPasscodeRulesLevel extends \MyCLabs\Enum\Enum
{
    public const SYSTEM = 'System';

    public const SERVICE_PROVIDER = 'Service Provider';

    public const GROUP = 'Group';
}

