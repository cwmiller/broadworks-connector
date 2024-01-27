<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * LoginRole
 *
 * The login role associated with the user id
 *
 * @method static LoginRole ADMINISTRATOR()
 * @method static LoginRole USER()
 * @EnumValueType string
 */
class LoginRole extends \MyCLabs\Enum\Enum
{
    public const ADMINISTRATOR = 'Administrator';

    public const USER = 'User';
}

