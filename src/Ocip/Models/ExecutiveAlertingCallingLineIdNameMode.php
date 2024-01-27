<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ExecutiveAlertingCallingLineIdNameMode
 *
 * Executive alerting calling line Id name mode.
 *
 * @method static ExecutiveAlertingCallingLineIdNameMode EXECUTIVE()
 * @method static ExecutiveAlertingCallingLineIdNameMode EXECUTIVE_ORIGINATOR()
 * @method static ExecutiveAlertingCallingLineIdNameMode ORIGINATOR_EXECUTIVE()
 * @method static ExecutiveAlertingCallingLineIdNameMode ORIGINATOR()
 * @method static ExecutiveAlertingCallingLineIdNameMode CUSTOM()
 * @EnumValueType string
 */
class ExecutiveAlertingCallingLineIdNameMode extends \MyCLabs\Enum\Enum
{
    public const EXECUTIVE = 'Executive';

    public const EXECUTIVE_ORIGINATOR = 'Executive-Originator';

    public const ORIGINATOR_EXECUTIVE = 'Originator-Executive';

    public const ORIGINATOR = 'Originator';

    public const CUSTOM = 'Custom';
}

