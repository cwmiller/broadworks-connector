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
 * @ValueType string
 */
class ExecutiveAlertingCallingLineIdNameMode extends \MyCLabs\Enum\Enum
{

    const EXECUTIVE = 'Executive';

    const EXECUTIVE_ORIGINATOR = 'Executive-Originator';

    const ORIGINATOR_EXECUTIVE = 'Originator-Executive';

    const ORIGINATOR = 'Originator';

    const CUSTOM = 'Custom';


}

