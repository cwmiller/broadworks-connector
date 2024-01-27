<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseVoiceVPNDigitManipulationOperation
 *
 * Enterprise Voice VPN Digit Manipulation operations.
 *
 * @method static EnterpriseVoiceVPNDigitManipulationOperation PREPEND()
 * @method static EnterpriseVoiceVPNDigitManipulationOperation END()
 * @method static EnterpriseVoiceVPNDigitManipulationOperation OVERWRITE()
 * @method static EnterpriseVoiceVPNDigitManipulationOperation RIGHT_TRIM()
 * @method static EnterpriseVoiceVPNDigitManipulationOperation REPLACE_ALL()
 * @method static EnterpriseVoiceVPNDigitManipulationOperation LEFT_TRIM()
 * @method static EnterpriseVoiceVPNDigitManipulationOperation APPEND()
 * @method static EnterpriseVoiceVPNDigitManipulationOperation POSITION()
 * @method static EnterpriseVoiceVPNDigitManipulationOperation INSERT()
 * @method static EnterpriseVoiceVPNDigitManipulationOperation TRIM()
 * @method static EnterpriseVoiceVPNDigitManipulationOperation DELETE()
 * @method static EnterpriseVoiceVPNDigitManipulationOperation MOVE()
 * @EnumValueType string
 */
class EnterpriseVoiceVPNDigitManipulationOperation extends \MyCLabs\Enum\Enum
{
    public const PREPEND = 'Prepend';

    public const END = 'End';

    public const OVERWRITE = 'Overwrite';

    public const RIGHT_TRIM = 'Right Trim';

    public const REPLACE_ALL = 'Replace All';

    public const LEFT_TRIM = 'Left Trim';

    public const APPEND = 'Append';

    public const POSITION = 'Position';

    public const INSERT = 'Insert';

    public const TRIM = 'Trim';

    public const DELETE = 'Delete';

    public const MOVE = 'Move';
}

