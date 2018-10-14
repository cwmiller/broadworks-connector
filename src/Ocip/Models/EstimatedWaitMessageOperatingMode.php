<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EstimatedWaitMessageOperatingMode
 *
 * The type of estimated wait message that is played.
 *
 * @method static EstimatedWaitMessageOperatingMode POSITION()
 * @method static EstimatedWaitMessageOperatingMode TIME()
 * @ValueType string
 */
class EstimatedWaitMessageOperatingMode extends \MyCLabs\Enum\Enum
{

    const POSITION = 'Position';

    const TIME = 'Time';


}

