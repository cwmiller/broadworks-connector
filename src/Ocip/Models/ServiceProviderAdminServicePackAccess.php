<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAdminServicePackAccess
 *
 * Service Provider Administrator's policy for accessing service packs.
 *
 * @method static ServiceProviderAdminServicePackAccess FULL()
 * @method static ServiceProviderAdminServicePackAccess NONE()
 * @ValueType string
 */
class ServiceProviderAdminServicePackAccess extends \MyCLabs\Enum\Enum
{

    const FULL = 'Full';

    const NONE = 'None';


}

