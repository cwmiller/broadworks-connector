<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseTrunkOrderingAlgorithm
 *
 * Enterprise Trunk Ordering Algorithm for an Enterprise Trunk
 *
 * @method static EnterpriseTrunkOrderingAlgorithm ORDERED_LOAD_BALANCING()
 * @method static EnterpriseTrunkOrderingAlgorithm OVERFLOW()
 * @method static EnterpriseTrunkOrderingAlgorithm MOST_IDLE()
 * @method static EnterpriseTrunkOrderingAlgorithm LEAST_IDLE()
 * @EnumValueType string
 */
class EnterpriseTrunkOrderingAlgorithm extends \MyCLabs\Enum\Enum
{

    const ORDERED_LOAD_BALANCING = 'Ordered Load Balancing';

    const OVERFLOW = 'Overflow';

    const MOST_IDLE = 'Most Idle';

    const LEAST_IDLE = 'Least Idle';


}

