<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CommPilotExpressSRProfile
 *
 * CommPilot Express SR Profile Type.
 *
 * @method static CommPilotExpressSRProfile AVAILABLE_IN_OFFICE()
 * @method static CommPilotExpressSRProfile AVAILABLE_OUT_OF_OFFICE()
 * @method static CommPilotExpressSRProfile BUSY()
 * @method static CommPilotExpressSRProfile UNAVAILABLE()
 * @EnumValueType string
 */
class CommPilotExpressSRProfile extends \MyCLabs\Enum\Enum
{

    const AVAILABLE_IN_OFFICE = 'Available In Office';

    const AVAILABLE_OUT_OF_OFFICE = 'Available Out Of Office';

    const BUSY = 'Busy';

    const UNAVAILABLE = 'Unavailable';


}

