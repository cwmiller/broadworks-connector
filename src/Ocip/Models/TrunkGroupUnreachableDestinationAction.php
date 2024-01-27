<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * TrunkGroupUnreachableDestinationAction
 *
 * Trunk Group unreachable destination action.
 *
 * @method static TrunkGroupUnreachableDestinationAction FORWARD()
 * @method static TrunkGroupUnreachableDestinationAction REROUTE()
 * @EnumValueType string
 */
class TrunkGroupUnreachableDestinationAction extends \MyCLabs\Enum\Enum
{
    public const FORWARD = 'Forward';

    public const REROUTE = 'Reroute';
}

