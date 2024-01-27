<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ExecutiveAlertingCallingLineIdPhoneNumberMode
 *
 * Executive alerting calling line Id phone number mode.
 *
 * @method static ExecutiveAlertingCallingLineIdPhoneNumberMode EXECUTIVE()
 * @method static ExecutiveAlertingCallingLineIdPhoneNumberMode ORIGINATOR()
 * @method static ExecutiveAlertingCallingLineIdPhoneNumberMode CUSTOM()
 * @EnumValueType string
 */
class ExecutiveAlertingCallingLineIdPhoneNumberMode extends \MyCLabs\Enum\Enum
{
    public const EXECUTIVE = 'Executive';

    public const ORIGINATOR = 'Originator';

    public const CUSTOM = 'Custom';
}

