<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCategory
 *
 * The Call Category for the call provided in the most significant contact from the NS
 *
 * @method static CallCategory LOCAL()
 * @method static CallCategory NATIONAL()
 * @method static CallCategory INTERLATA()
 * @method static CallCategory INTRALATA()
 * @method static CallCategory INTERNATIONAL()
 * @method static CallCategory _PRIVATE()
 * @method static CallCategory EMERGENCY()
 * @method static CallCategory OTHER()
 * @EnumValueType string
 */
class CallCategory extends \MyCLabs\Enum\Enum
{
    public const LOCAL = 'Local';

    public const NATIONAL = 'National';

    public const INTERLATA = 'Interlata';

    public const INTRALATA = 'Intralata';

    public const INTERNATIONAL = 'International';

    public const _PRIVATE = 'Private';

    public const EMERGENCY = 'Emergency';

    public const OTHER = 'Other';
}

