<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * NetworkUsageSelection
 *
 * Network Usage types.
 *
 * @method static NetworkUsageSelection FORCE_ALL_CALLS()
 * @method static NetworkUsageSelection FORCE_ALL_EXCEPT_EXTENSION_AND_LOCATION_CALLS()
 * @method static NetworkUsageSelection DO_NOT_FORCE_ENTERPRISE_AND_GROUP_CALLS()
 * @EnumValueType string
 */
class NetworkUsageSelection extends \MyCLabs\Enum\Enum
{
    public const FORCE_ALL_CALLS = 'Force All Calls';

    public const FORCE_ALL_EXCEPT_EXTENSION_AND_LOCATION_CALLS = 'Force All Except Extension and Location Calls';

    public const DO_NOT_FORCE_ENTERPRISE_AND_GROUP_CALLS = 'Do Not Force Enterprise and Group Calls';
}

