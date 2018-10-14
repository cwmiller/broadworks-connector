<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ExecutiveAlertingMode
 *
 * Executive alerting mode.
 *
 * @method static ExecutiveAlertingMode SIMULTANEOUS()
 * @method static ExecutiveAlertingMode SEQUENTIAL()
 * @ValueType string
 */
class ExecutiveAlertingMode extends \MyCLabs\Enum\Enum
{

    const SIMULTANEOUS = 'Simultaneous';

    const SEQUENTIAL = 'Sequential';


}

