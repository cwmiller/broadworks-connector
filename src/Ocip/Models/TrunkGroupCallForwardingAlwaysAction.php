<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * TrunkGroupCallForwardingAlwaysAction
 *
 * Trunk Group call forwarding always action.
 *
 * @method static TrunkGroupCallForwardingAlwaysAction FORWARD()
 * @method static TrunkGroupCallForwardingAlwaysAction REROUTE()
 * @ValueType string
 */
class TrunkGroupCallForwardingAlwaysAction extends \MyCLabs\Enum\Enum
{

    const FORWARD = 'Forward';

    const REROUTE = 'Reroute';


}

