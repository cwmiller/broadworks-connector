<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAdminAdminAccess
 *
 * Service Provider Administrator's policy for accessing other
 *         Service Provider Administrator's within the same service provider.
 *
 * @method static ServiceProviderAdminAdminAccess FULL()
 * @method static ServiceProviderAdminAdminAccess READ_ONLY()
 * @method static ServiceProviderAdminAdminAccess NONE()
 * @ValueType string
 */
class ServiceProviderAdminAdminAccess extends \MyCLabs\Enum\Enum
{

    const FULL = 'Full';

    const READ_ONLY = 'Read-Only';

    const NONE = 'None';


}

