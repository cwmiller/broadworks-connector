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
    public const ORDERED_LOAD_BALANCING = 'Ordered Load Balancing';

    public const OVERFLOW = 'Overflow';

    public const MOST_IDLE = 'Most Idle';

    public const LEAST_IDLE = 'Least Idle';
}

