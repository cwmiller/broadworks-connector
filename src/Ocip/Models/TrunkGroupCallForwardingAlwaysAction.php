<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * TrunkGroupCallForwardingAlwaysAction
 *
 * Trunk Group call forwarding always action.
 *
 * @method static TrunkGroupCallForwardingAlwaysAction FORWARD()
 * @method static TrunkGroupCallForwardingAlwaysAction REROUTE()
 * @EnumValueType string
 */
class TrunkGroupCallForwardingAlwaysAction extends \MyCLabs\Enum\Enum
{

    const FORWARD = 'Forward';

    const REROUTE = 'Reroute';


}

