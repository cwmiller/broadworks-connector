<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * TrunkGroupUnreachableDestinationAction
 *
 * Trunk Group unreachable destination action.
 *
 * @method static TrunkGroupUnreachableDestinationAction FORWARD()
 * @method static TrunkGroupUnreachableDestinationAction REROUTE()
 * @ValueType string
 */
class TrunkGroupUnreachableDestinationAction extends \MyCLabs\Enum\Enum
{

    const FORWARD = 'Forward';

    const REROUTE = 'Reroute';


}

