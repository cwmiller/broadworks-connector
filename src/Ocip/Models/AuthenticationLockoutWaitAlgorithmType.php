<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AuthenticationLockoutWaitAlgorithmType
 *
 * Wait algorithm type for device profile/SIP authentication password rules. 
 * Possible values:
 *         Double: Double the previous lockout time (Starting with 5 minutes)
 *         Fixed: Wait a fixed amount of time
 *
 * @method static AuthenticationLockoutWaitAlgorithmType DOUBLE()
 * @method static AuthenticationLockoutWaitAlgorithmType FIXED()
 * @EnumValueType string
 */
class AuthenticationLockoutWaitAlgorithmType extends \MyCLabs\Enum\Enum
{

    const DOUBLE = 'Double';

    const FIXED = 'Fixed';


}

