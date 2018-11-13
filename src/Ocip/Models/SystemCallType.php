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

    const EMERGENCY = 'Emergency';

    const REPAIR = 'Repair';


}

