<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAdminType
 *
 * System Administrator types.
 *
 * @method static SystemAdminType SYSTEM()
 * @method static SystemAdminType PROVISIONING()
 * @EnumValueType string
 */
class SystemAdminType extends \MyCLabs\Enum\Enum
{
    public const SYSTEM = 'System';

    public const PROVISIONING = 'Provisioning';
}

