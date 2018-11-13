<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SimultaneousRingSelection
 *
 * Simultaneous Ring Selection.
 *
 * @method static SimultaneousRingSelection DO_NOT_RING_IF_ON_A_CALL()
 * @method static SimultaneousRingSelection RING_FOR_ALL_INCOMING_CALLS()
 * @EnumValueType string
 */
class SimultaneousRingSelection extends \MyCLabs\Enum\Enum
{

    const DO_NOT_RING_IF_ON_A_CALL = 'Do not Ring if on a Call';

    const RING_FOR_ALL_INCOMING_CALLS = 'Ring for all Incoming Calls';


}

