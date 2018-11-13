<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAdminUserAccess
 *
 * Policy for a service provider administrator's access to user configuration.
 *         "Full" indicates full access to users in the service provider.
 *         "Full Profile" indicates
 *           1) the service provider administrator is restricted from adding or
 * removing users, but
 *           2) has full access to the user's profile
 *         "Read-Only Profile" indicates
 *           1) the service provider administrator is restricted from adding or
 * removing users, and
 *           2) read-only access is granted to the user's profile.
 *         "No Profile" indicates
 *           1) the service provider administrator is restricted from adding or
 * removing users, and
 *           2) no access is granted to the user's profile.
 *         "None" indicates no access to users in the service provider.
 *
 * @method static ServiceProviderAdminUserAccess FULL()
 * @method static ServiceProviderAdminUserAccess FULL_PROFILE()
 * @method static ServiceProviderAdminUserAccess READ_ONLY_PROFILE()
 * @method static ServiceProviderAdminUserAccess NO_PROFILE()
 * @method static ServiceProviderAdminUserAccess NONE()
 * @EnumValueType string
 */
class ServiceProviderAdminUserAccess extends \MyCLabs\Enum\Enum
{

    const FULL = 'Full';

    const FULL_PROFILE = 'Full Profile';

    const READ_ONLY_PROFILE = 'Read-Only Profile';

    const NO_PROFILE = 'No Profile';

    const NONE = 'None';


}

