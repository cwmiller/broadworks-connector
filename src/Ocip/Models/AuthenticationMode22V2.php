<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AuthenticationMode22V2
 *
 * Choices for Device Authentication
 *
 * @method static AuthenticationMode22V2 SIP_AUTHENTICATION()
 * @method static AuthenticationMode22V2 CERTIFICATE_BASED_AUTHENTICATION()
 * @method static AuthenticationMode22V2 DISABLED()
 * @EnumValueType string
 */
class AuthenticationMode22V2 extends \MyCLabs\Enum\Enum
{

    const SIP_AUTHENTICATION = 'SIP Authentication';

    const CERTIFICATE_BASED_AUTHENTICATION = 'Certificate-based Authentication';

    const DISABLED = 'Disabled';


}

