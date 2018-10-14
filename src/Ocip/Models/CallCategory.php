<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCategory
 *
 * The Call Category for the call provided in the most significant contact from the
 * NS
 *
 * @method static CallCategory LOCAL()
 * @method static CallCategory NATIONAL()
 * @method static CallCategory INTERLATA()
 * @method static CallCategory INTRALATA()
 * @method static CallCategory INTERNATIONAL()
 * @method static CallCategory _PRIVATE()
 * @method static CallCategory EMERGENCY()
 * @method static CallCategory OTHER()
 * @ValueType string
 */
class CallCategory extends \MyCLabs\Enum\Enum
{

    const LOCAL = 'Local';

    const NATIONAL = 'National';

    const INTERLATA = 'Interlata';

    const INTRALATA = 'Intralata';

    const INTERNATIONAL = 'International';

    const _PRIVATE = 'Private';

    const EMERGENCY = 'Emergency';

    const OTHER = 'Other';


}

