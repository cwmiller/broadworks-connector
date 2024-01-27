<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterRoutingPolicy
 *
 * Call center routing policy.
 *
 * @method static CallCenterRoutingPolicy LONGEST_WAIT_TIME()
 * @method static CallCenterRoutingPolicy PRIORITY()
 * @EnumValueType string
 */
class CallCenterRoutingPolicy extends \MyCLabs\Enum\Enum
{
    public const LONGEST_WAIT_TIME = 'Longest Wait Time';

    public const PRIORITY = 'Priority';
}

