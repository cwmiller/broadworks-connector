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
 * @ValueType string
 */
class CallParkRecallTo extends \MyCLabs\Enum\Enum
{

    const PARKING_USER_ONLY = 'Parking User Only';

    const PARKING_USER_THEN_ALTERNATE_USER = 'Parking User Then Alternate User';

    const ALTERNATE_USER_ONLY = 'Alternate User Only';


}

