<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * OrganizationType
 *
 * Types of organizations.
 *
 * @method static OrganizationType SERVICE_PROVIDER()
 * @method static OrganizationType ENTERPRISE()
 * @EnumValueType string
 */
class OrganizationType extends \MyCLabs\Enum\Enum
{
    public const SERVICE_PROVIDER = 'Service Provider';

    public const ENTERPRISE = 'Enterprise';
}

