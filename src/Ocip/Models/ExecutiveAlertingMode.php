<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ExecutiveAlertingMode
 *
 * Executive alerting mode.
 *
 * @method static ExecutiveAlertingMode SIMULTANEOUS()
 * @method static ExecutiveAlertingMode SEQUENTIAL()
 * @EnumValueType string
 */
class ExecutiveAlertingMode extends \MyCLabs\Enum\Enum
{
    public const SIMULTANEOUS = 'Simultaneous';

    public const SEQUENTIAL = 'Sequential';
}

