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

    const SERVICE_PROVIDER = 'Service Provider';

    const GROUP = 'Group';

    const USER = 'User';


}

