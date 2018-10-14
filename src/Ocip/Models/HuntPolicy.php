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
 * @ValueType string
 */
class HuntPolicy extends \MyCLabs\Enum\Enum
{

    const CIRCULAR = 'Circular';

    const REGULAR = 'Regular';

    const SIMULTANEOUS = 'Simultaneous';

    const UNIFORM = 'Uniform';

    const WEIGHTED = 'Weighted';


}

