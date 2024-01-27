<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * BroadWorksMobilityGroupSettingLevel
 *
 * BroadWorks Mobility setting for the group level.
 *
 * @method static BroadWorksMobilityGroupSettingLevel GROUP()
 * @method static BroadWorksMobilityGroupSettingLevel SERVICEPROVIDER()
 * @EnumValueType string
 */
class BroadWorksMobilityGroupSettingLevel extends \MyCLabs\Enum\Enum
{
    public const GROUP = 'Group';

    public const SERVICEPROVIDER = 'ServiceProvider';
}

