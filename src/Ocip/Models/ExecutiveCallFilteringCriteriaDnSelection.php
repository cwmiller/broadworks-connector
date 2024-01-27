<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ExecutiveCallFilteringCriteriaDnSelection
 *
 * Eecutive call filtering criteria selection for a dn.
 *
 * @method static ExecutiveCallFilteringCriteriaDnSelection ANY()
 * @method static ExecutiveCallFilteringCriteriaDnSelection ANY_INTERNAL()
 * @method static ExecutiveCallFilteringCriteriaDnSelection ANY_EXTERNAL()
 * @method static ExecutiveCallFilteringCriteriaDnSelection SPECIFIED_ONLY()
 * @EnumValueType string
 */
class ExecutiveCallFilteringCriteriaDnSelection extends \MyCLabs\Enum\Enum
{
    public const ANY = 'Any';

    public const ANY_INTERNAL = 'Any Internal';

    public const ANY_EXTERNAL = 'Any External';

    public const SPECIFIED_ONLY = 'Specified Only';
}

