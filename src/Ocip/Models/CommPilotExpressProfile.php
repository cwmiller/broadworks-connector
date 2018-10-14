<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CommPilotExpressProfile
 *
 * CommPilot Express Profile Type.
 *
 * @method static CommPilotExpressProfile AVAILABLE_IN_OFFICE()
 * @method static CommPilotExpressProfile AVAILABLE_OUT_OF_OFFICE()
 * @method static CommPilotExpressProfile BUSY()
 * @method static CommPilotExpressProfile UNAVAILABLE()
 * @ValueType string
 */
class CommPilotExpressProfile extends \MyCLabs\Enum\Enum
{

    const AVAILABLE_IN_OFFICE = 'Available In Office';

    const AVAILABLE_OUT_OF_OFFICE = 'Available Out Of Office';

    const BUSY = 'Busy';

    const UNAVAILABLE = 'Unavailable';


}

