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
 * @EnumValueType string
 */
class ExecutiveCallFilteringSimpleFilterType extends \MyCLabs\Enum\Enum
{
    public const ALL_CALLS = 'All Calls';

    public const ALL_INTERNAL_CALLS = 'All Internal Calls';

    public const ALL_EXTERNAL_CALLS = 'All External Calls';
}

