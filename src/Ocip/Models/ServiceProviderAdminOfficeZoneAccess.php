<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAdminOfficeZoneAccess
 *
 * Service Provider Administrator's policy for accessing
 *         the Office Zone information.
 *
 * @method static ServiceProviderAdminOfficeZoneAccess FULL()
 * @method static ServiceProviderAdminOfficeZoneAccess READ_ONLY()
 * @ValueType string
 */
class ServiceProviderAdminOfficeZoneAccess extends \MyCLabs\Enum\Enum
{

    const FULL = 'Full';

    const READ_ONLY = 'Read-Only';


}

