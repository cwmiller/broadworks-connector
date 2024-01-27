<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * RoutePointFailoverStatus
 *
 * The Route Point failover status.
 *
 * @method static RoutePointFailoverStatus NORMAL()
 * @method static RoutePointFailoverStatus FAILOVER()
 * @EnumValueType string
 */
class RoutePointFailoverStatus extends \MyCLabs\Enum\Enum
{
    public const NORMAL = 'Normal';

    public const FAILOVER = 'Failover';
}

