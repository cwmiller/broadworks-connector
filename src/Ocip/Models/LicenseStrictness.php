<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * LicenseStrictness
 *
 * License type.
 *
 * @method static LicenseStrictness HARD()
 * @method static LicenseStrictness SOFT()
 * @ValueType string
 */
class LicenseStrictness extends \MyCLabs\Enum\Enum
{

    const HARD = 'Hard';

    const SOFT = 'Soft';


}

