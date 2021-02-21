<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AuthenticationLockoutFixedWaitTimeMinutes
 *
 * Number of minutes to wait when AuthenticationLockoutWaitAlgorithmType is set to fixed.
 *
 * @method static AuthenticationLockoutFixedWaitTimeMinutes _5()
 * @method static AuthenticationLockoutFixedWaitTimeMinutes _10()
 * @method static AuthenticationLockoutFixedWaitTimeMinutes _20()
 * @method static AuthenticationLockoutFixedWaitTimeMinutes _40()
 * @method static AuthenticationLockoutFixedWaitTimeMinutes _60()
 * @EnumValueType string
 */
class AuthenticationLockoutFixedWaitTimeMinutes extends \MyCLabs\Enum\Enum
{

    const _5 = '5';

    const _10 = '10';

    const _20 = '20';

    const _40 = '40';

    const _60 = '60';


}

