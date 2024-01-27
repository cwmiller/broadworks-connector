<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * TrunkGroupCapacityExceededAction
 *
 * Trunk Group capacity exceeded action.
 *
 * @method static TrunkGroupCapacityExceededAction FORWARD()
 * @method static TrunkGroupCapacityExceededAction REROUTE()
 * @EnumValueType string
 */
class TrunkGroupCapacityExceededAction extends \MyCLabs\Enum\Enum
{
    public const FORWARD = 'Forward';

    public const REROUTE = 'Reroute';
}

