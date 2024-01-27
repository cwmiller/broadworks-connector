<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallType
 *
 * System Call Type
 *
 * @method static SystemCallType EMERGENCY()
 * @method static SystemCallType REPAIR()
 * @EnumValueType string
 */
class SystemCallType extends \MyCLabs\Enum\Enum
{
    public const EMERGENCY = 'Emergency';

    public const REPAIR = 'Repair';
}

