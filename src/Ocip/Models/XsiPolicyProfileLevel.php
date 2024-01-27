<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * XsiPolicyProfileLevel
 *
 * The system Xsi policy profile level.
 *
 * @method static XsiPolicyProfileLevel SERVICE_PROVIDER()
 * @method static XsiPolicyProfileLevel GROUP()
 * @method static XsiPolicyProfileLevel USER()
 * @EnumValueType string
 */
class XsiPolicyProfileLevel extends \MyCLabs\Enum\Enum
{
    public const SERVICE_PROVIDER = 'Service Provider';

    public const GROUP = 'Group';

    public const USER = 'User';
}

