<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallParkRecallTo
 *
 * Call Park recall user options
 *
 * @method static CallParkRecallTo PARKING_USER_ONLY()
 * @method static CallParkRecallTo PARKING_USER_THEN_ALTERNATE_USER()
 * @method static CallParkRecallTo ALTERNATE_USER_ONLY()
 * @EnumValueType string
 */
class CallParkRecallTo extends \MyCLabs\Enum\Enum
{
    public const PARKING_USER_ONLY = 'Parking User Only';

    public const PARKING_USER_THEN_ALTERNATE_USER = 'Parking User Then Alternate User';

    public const ALTERNATE_USER_ONLY = 'Alternate User Only';
}

