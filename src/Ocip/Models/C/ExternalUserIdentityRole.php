<?php

namespace CWM\BroadWorksConnector\Ocip\Models\C;

/**
 * ExternalUserIdentityRole
 *
 * The role of the authenticated external user.
 *
 * @method static ExternalUserIdentityRole USER()
 * @method static ExternalUserIdentityRole ADMINISTRATOR()
 * @EnumValueType string
 */
class ExternalUserIdentityRole extends \MyCLabs\Enum\Enum
{

    const USER = 'User';

    const ADMINISTRATOR = 'Administrator';


}

