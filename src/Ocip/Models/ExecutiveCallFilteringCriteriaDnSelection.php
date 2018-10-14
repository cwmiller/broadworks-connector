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
 * @ValueType string
 */
class ExecutiveCallFilteringCriteriaDnSelection extends \MyCLabs\Enum\Enum
{

    const ANY = 'Any';

    const ANY_INTERNAL = 'Any Internal';

    const ANY_EXTERNAL = 'Any External';

    const SPECIFIED_ONLY = 'Specified Only';


}

