<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * LicenseStrictness
 *
 * License type.
 *
 * @method static LicenseStrictness HARD()
 * @method static LicenseStrictness SOFT()
 * @EnumValueType string
 */
class LicenseStrictness extends \MyCLabs\Enum\Enum
{
    public const HARD = 'Hard';

    public const SOFT = 'Soft';
}

