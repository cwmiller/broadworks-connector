<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EstimatedWaitMessageOperatingMode
 *
 * The type of estimated wait message that is played.
 *
 * @method static EstimatedWaitMessageOperatingMode POSITION()
 * @method static EstimatedWaitMessageOperatingMode TIME()
 * @EnumValueType string
 */
class EstimatedWaitMessageOperatingMode extends \MyCLabs\Enum\Enum
{
    public const POSITION = 'Position';

    public const TIME = 'Time';
}

