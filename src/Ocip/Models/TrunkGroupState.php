<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * TrunkGroupState
 *
 * State of a trunk group.
 *
 * @method static TrunkGroupState AVAILABLE()
 * @method static TrunkGroupState UNAVAILABLE()
 * @ValueType string
 */
class TrunkGroupState extends \MyCLabs\Enum\Enum
{

    const AVAILABLE = 'Available';

    const UNAVAILABLE = 'Unavailable';


}

