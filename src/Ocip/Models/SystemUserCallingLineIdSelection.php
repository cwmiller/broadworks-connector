<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemUserCallingLineIdSelection
 *
 * System User Calling Line Id Options.
 *
 * @method static SystemUserCallingLineIdSelection DISABLE_ALL()
 * @method static SystemUserCallingLineIdSelection ENABLE_ALL()
 * @method static SystemUserCallingLineIdSelection ENABLE_ALL_EXCEPT_EMERGENCY()
 * @method static SystemUserCallingLineIdSelection ENABLE_EMERGENCY_ONLY()
 * @EnumValueType string
 */
class SystemUserCallingLineIdSelection extends \MyCLabs\Enum\Enum
{
    public const DISABLE_ALL = 'Disable All';

    public const ENABLE_ALL = 'Enable All';

    public const ENABLE_ALL_EXCEPT_EMERGENCY = 'Enable All Except Emergency';

    public const ENABLE_EMERGENCY_ONLY = 'Enable Emergency Only';
}

