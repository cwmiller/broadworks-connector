<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * LocationNetworkType
 *
 * Location Network Device Option Type.
 *
 * @method static LocationNetworkType FIXED()
 * @method static LocationNetworkType MOBILE()
 * @EnumValueType string
 */
class LocationNetworkType extends \MyCLabs\Enum\Enum
{
    public const FIXED = 'Fixed';

    public const MOBILE = 'Mobile';
}

