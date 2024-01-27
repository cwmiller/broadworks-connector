<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * BroadWorksMobilityUserSettingLevel
 *
 * BroadWorks Mobility setting for the user level.
 *
 * @method static BroadWorksMobilityUserSettingLevel GROUP()
 * @method static BroadWorksMobilityUserSettingLevel USER()
 * @EnumValueType string
 */
class BroadWorksMobilityUserSettingLevel extends \MyCLabs\Enum\Enum
{
    public const GROUP = 'Group';

    public const USER = 'User';
}

