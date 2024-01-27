<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AuthenticationMode
 *
 * Choices for SIP Device Authentication. 
 *           Deprecated by AuthenticationMode22.
 *
 * @method static AuthenticationMode ENABLED()
 * @method static AuthenticationMode DISABLED()
 * @method static AuthenticationMode ENABLED_WITH_WEB_PORTAL_CREDENTIALS()
 * @EnumValueType string
 */
class AuthenticationMode extends \MyCLabs\Enum\Enum
{
    public const ENABLED = 'Enabled';

    public const DISABLED = 'Disabled';

    public const ENABLED_WITH_WEB_PORTAL_CREDENTIALS = 'Enabled With Web Portal Credentials';
}

