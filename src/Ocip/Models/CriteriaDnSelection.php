<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CriteriaDnSelection
 *
 * Selection criteria for a dn.
 *
 * @method static CriteriaDnSelection ANY()
 * @method static CriteriaDnSelection SPECIFIED_ONLY()
 * @EnumValueType string
 */
class CriteriaDnSelection extends \MyCLabs\Enum\Enum
{
    public const ANY = 'Any';

    public const SPECIFIED_ONLY = 'Specified Only';
}

