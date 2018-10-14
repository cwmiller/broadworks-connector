<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAdminDialableCallerIDAccess
 *
 * Policy for accessing the service provider Dialable Caller ID configuration.
 *
 * @method static ServiceProviderAdminDialableCallerIDAccess FULL()
 * @method static ServiceProviderAdminDialableCallerIDAccess READ_ONLY()
 * @method static ServiceProviderAdminDialableCallerIDAccess NONE()
 * @ValueType string
 */
class ServiceProviderAdminDialableCallerIDAccess extends \MyCLabs\Enum\Enum
{

    const FULL = 'Full';

    const READ_ONLY = 'Read-Only';

    const NONE = 'None';


}

