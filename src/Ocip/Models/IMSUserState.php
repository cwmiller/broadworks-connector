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

    const NOT_REGISTERED = 'Not Registered';

    const REGISTERED = 'Registered';

    const REGISTERED_UNREG_SERVICES = 'Registered UnReg Services';

    const AUTHENTICATION_PENDING = 'Authentication Pending';


}

