<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ChargeIndicator
 *
 * Possible values for Charge Indicator.
 *
 * @method static ChargeIndicator CHARGE()
 * @method static ChargeIndicator NO_CHARGE()
 * @EnumValueType string
 */
class ChargeIndicator extends \MyCLabs\Enum\Enum
{
    public const CHARGE = 'Charge';

    public const NO_CHARGE = 'No Charge';
}

