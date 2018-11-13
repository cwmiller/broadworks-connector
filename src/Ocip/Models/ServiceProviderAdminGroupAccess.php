<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAdminGroupAccess
 *
 * Service Provider Administrator's policy for accessing groups
 *         within the service provider.
 *
 * @method static ServiceProviderAdminGroupAccess FULL()
 * @method static ServiceProviderAdminGroupAccess
 * RESTRICTED_FROM_ADDING_OR_REMOVING_GROUPS()
 * @method static ServiceProviderAdminGroupAccess NONE()
 * @EnumValueType string
 */
class ServiceProviderAdminGroupAccess extends \MyCLabs\Enum\Enum
{

    const FULL = 'Full';

    const RESTRICTED_FROM_ADDING_OR_REMOVING_GROUPS = 'Restricted from Adding or Removing Groups';

    const NONE = 'None';


}

