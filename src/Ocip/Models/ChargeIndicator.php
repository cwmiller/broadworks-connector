<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ChargeIndicator
 *
 * Possible values for Charge Indicator.
 *
 * @method static ChargeIndicator CHARGE()
 * @method static ChargeIndicator NO_CHARGE()
 * @ValueType string
 */
class ChargeIndicator extends \MyCLabs\Enum\Enum
{

    const CHARGE = 'Charge';

    const NO_CHARGE = 'No Charge';


}

