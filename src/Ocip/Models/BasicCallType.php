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
    public const GROUP = 'Group';

    public const ENTERPRISE = 'Enterprise';

    public const NETWORK = 'Network';

    public const NETWORK_URL = 'Network URL';

    public const REPAIR = 'Repair';

    public const EMERGENCY = 'Emergency';
}

