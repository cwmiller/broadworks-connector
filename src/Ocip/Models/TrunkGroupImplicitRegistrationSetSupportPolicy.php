<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * TrunkGroupImplicitRegistrationSetSupportPolicy
 *
 * Trunk Group Implicit Registration Set Support policy.
 *
 * @method static TrunkGroupImplicitRegistrationSetSupportPolicy ENABLED()
 * @method static TrunkGroupImplicitRegistrationSetSupportPolicy DISABLED()
 * @EnumValueType string
 */
class TrunkGroupImplicitRegistrationSetSupportPolicy extends \MyCLabs\Enum\Enum
{
    public const ENABLED = 'Enabled';

    public const DISABLED = 'Disabled';
}

