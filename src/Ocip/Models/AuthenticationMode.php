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
 * @ValueType string
 */
class AuthenticationMode extends \MyCLabs\Enum\Enum
{

    const ENABLED = 'Enabled';

    const DISABLED = 'Disabled';

    const ENABLED_WITH_WEB_PORTAL_CREDENTIALS = 'Enabled With Web Portal Credentials';


}

