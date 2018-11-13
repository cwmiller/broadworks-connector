<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AuthenticationLockoutType
 *
 * Authentication Lockout type for device profile/SIP authentication password
 * rules.  Possible values:
 * 	    None: No authentication lockout
 * 	    Temporary: disable authentication with temporary lockout only 
 * 	    Temporary then Permanent: disable authentication with temporary lockout and
 * permanent lockout
 *
 * @method static AuthenticationLockoutType NONE()
 * @method static AuthenticationLockoutType TEMPORARY()
 * @method static AuthenticationLockoutType TEMPORARY_THEN_PERMANENT()
 * @EnumValueType string
 */
class AuthenticationLockoutType extends \MyCLabs\Enum\Enum
{

    const NONE = 'None';

    const TEMPORARY = 'Temporary';

    const TEMPORARY_THEN_PERMANENT = 'Temporary Then Permanent';


}

