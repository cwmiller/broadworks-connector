<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAdminDepartmentAccess
 *
 * Service Provider Administrator's policy for accessing department lists
 *         within the service provider.
 *
 * @method static ServiceProviderAdminDepartmentAccess FULL()
 * @method static ServiceProviderAdminDepartmentAccess READ_ONLY()
 * @method static ServiceProviderAdminDepartmentAccess NONE()
 * @ValueType string
 */
class ServiceProviderAdminDepartmentAccess extends \MyCLabs\Enum\Enum
{

    const FULL = 'Full';

    const READ_ONLY = 'Read-Only';

    const NONE = 'None';


}

