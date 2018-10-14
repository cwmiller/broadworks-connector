<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CriteriaDnSelection
 *
 * Selection criteria for a dn.
 *
 * @method static CriteriaDnSelection ANY()
 * @method static CriteriaDnSelection SPECIFIED_ONLY()
 * @ValueType string
 */
class CriteriaDnSelection extends \MyCLabs\Enum\Enum
{

    const ANY = 'Any';

    const SPECIFIED_ONLY = 'Specified Only';


}

