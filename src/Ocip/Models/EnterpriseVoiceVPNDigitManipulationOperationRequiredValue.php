<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseVoiceVPNDigitManipulationOperationRequiredValue
 *
 * Enterprise Voice VPN Digit Manipulation Operations that have a value.
 *
 * @method static EnterpriseVoiceVPNDigitManipulationOperationRequiredValue POSITION()
 * @method static EnterpriseVoiceVPNDigitManipulationOperationRequiredValue DELETE()
 * @method static EnterpriseVoiceVPNDigitManipulationOperationRequiredValue MOVE()
 * @EnumValueType string
 */
class EnterpriseVoiceVPNDigitManipulationOperationRequiredValue extends \MyCLabs\Enum\Enum
{
    public const POSITION = 'Position';

    public const DELETE = 'Delete';

    public const MOVE = 'Move';
}

