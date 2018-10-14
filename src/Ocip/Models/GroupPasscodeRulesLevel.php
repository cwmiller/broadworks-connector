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
 * @ValueType string
 */
class GroupPasscodeRulesLevel extends \MyCLabs\Enum\Enum
{

    const SYSTEM = 'System';

    const SERVICE_PROVIDER = 'Service Provider';

    const GROUP = 'Group';


}

