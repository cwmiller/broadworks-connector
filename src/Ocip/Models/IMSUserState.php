<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * IMSUserState
 *
 * IMS User State per the 3GPP TS 29.328 V6.3.0 spec.
 *
 * @method static IMSUserState NOT_REGISTERED()
 * @method static IMSUserState REGISTERED()
 * @method static IMSUserState REGISTERED_UNREG_SERVICES()
 * @method static IMSUserState AUTHENTICATION_PENDING()
 * @EnumValueType string
 */
class IMSUserState extends \MyCLabs\Enum\Enum
{
    public const NOT_REGISTERED = 'Not Registered';

    public const REGISTERED = 'Registered';

    public const REGISTERED_UNREG_SERVICES = 'Registered UnReg Services';

    public const AUTHENTICATION_PENDING = 'Authentication Pending';
}

