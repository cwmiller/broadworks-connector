<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAdminSessionAdmissionControlAccess
 *
 * Service Provider Administrator's policy for accessing
 *         the Session Admission Control information.
 *
 * @method static ServiceProviderAdminSessionAdmissionControlAccess FULL()
 * @method static ServiceProviderAdminSessionAdmissionControlAccess READ_ONLY()
 * @method static ServiceProviderAdminSessionAdmissionControlAccess NONE()
 * @EnumValueType string
 */
class ServiceProviderAdminSessionAdmissionControlAccess extends \MyCLabs\Enum\Enum
{
    public const FULL = 'Full';

    public const READ_ONLY = 'Read-Only';

    public const NONE = 'None';
}

