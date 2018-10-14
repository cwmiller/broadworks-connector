<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ExecutiveCallFilteringSimpleFilterType
 *
 * Executive call filtering filter type in simple filtering mode.
 *
 * @method static ExecutiveCallFilteringSimpleFilterType ALL_CALLS()
 * @method static ExecutiveCallFilteringSimpleFilterType ALL_INTERNAL_CALLS()
 * @method static ExecutiveCallFilteringSimpleFilterType ALL_EXTERNAL_CALLS()
 * @ValueType string
 */
class ExecutiveCallFilteringSimpleFilterType extends \MyCLabs\Enum\Enum
{

    const ALL_CALLS = 'All Calls';

    const ALL_INTERNAL_CALLS = 'All Internal Calls';

    const ALL_EXTERNAL_CALLS = 'All External Calls';


}

