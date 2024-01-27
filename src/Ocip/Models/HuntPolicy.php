<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * HuntPolicy
 *
 * Policy for distributing calls within a hunt group or call center.
 *
 * @method static HuntPolicy CIRCULAR()
 * @method static HuntPolicy REGULAR()
 * @method static HuntPolicy SIMULTANEOUS()
 * @method static HuntPolicy UNIFORM()
 * @method static HuntPolicy WEIGHTED()
 * @EnumValueType string
 */
class HuntPolicy extends \MyCLabs\Enum\Enum
{
    public const CIRCULAR = 'Circular';

    public const REGULAR = 'Regular';

    public const SIMULTANEOUS = 'Simultaneous';

    public const UNIFORM = 'Uniform';

    public const WEIGHTED = 'Weighted';
}

