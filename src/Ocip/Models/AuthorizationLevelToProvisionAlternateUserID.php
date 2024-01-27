<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AuthorizationLevelToProvisionAlternateUserID
 *
 * Authorization levels to provision alternate user id
 *
 * @method static AuthorizationLevelToProvisionAlternateUserID GROUP()
 * @method static AuthorizationLevelToProvisionAlternateUserID SERVICE_PROVIDER()
 * @method static AuthorizationLevelToProvisionAlternateUserID SYSTEM()
 * @EnumValueType string
 */
class AuthorizationLevelToProvisionAlternateUserID extends \MyCLabs\Enum\Enum
{
    public const GROUP = 'Group';

    public const SERVICE_PROVIDER = 'Service Provider';

    public const SYSTEM = 'System';
}

