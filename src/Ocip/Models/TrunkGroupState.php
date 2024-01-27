<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * TrunkGroupState
 *
 * State of a trunk group.
 *
 * @method static TrunkGroupState AVAILABLE()
 * @method static TrunkGroupState UNAVAILABLE()
 * @EnumValueType string
 */
class TrunkGroupState extends \MyCLabs\Enum\Enum
{
    public const AVAILABLE = 'Available';

    public const UNAVAILABLE = 'Unavailable';
}

