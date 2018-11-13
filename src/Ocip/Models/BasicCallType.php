<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * BasicCallType
 *
 * The basic call type for the origination
 *
 * @method static BasicCallType GROUP()
 * @method static BasicCallType ENTERPRISE()
 * @method static BasicCallType NETWORK()
 * @method static BasicCallType NETWORK_URL()
 * @method static BasicCallType REPAIR()
 * @method static BasicCallType EMERGENCY()
 * @EnumValueType string
 */
class BasicCallType extends \MyCLabs\Enum\Enum
{

    const GROUP = 'Group';

    const ENTERPRISE = 'Enterprise';

    const NETWORK = 'Network';

    const NETWORK_URL = 'Network URL';

    const REPAIR = 'Repair';

    const EMERGENCY = 'Emergency';


}

