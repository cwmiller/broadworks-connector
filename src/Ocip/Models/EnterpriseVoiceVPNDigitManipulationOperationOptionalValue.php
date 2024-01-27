<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseVoiceVPNDigitManipulationOperationOptionalValue
 *
 * Enterprise Voice VPN Digit Manipulation Operations that may or may not have a value.
 *
 * @method static EnterpriseVoiceVPNDigitManipulationOperationOptionalValue PREPEND()
 * @method static EnterpriseVoiceVPNDigitManipulationOperationOptionalValue OVERWRITE()
 * @method static EnterpriseVoiceVPNDigitManipulationOperationOptionalValue RIGHT_TRIM()
 * @method static EnterpriseVoiceVPNDigitManipulationOperationOptionalValue REPLACE_ALL()
 * @method static EnterpriseVoiceVPNDigitManipulationOperationOptionalValue LEFT_TRIM()
 * @method static EnterpriseVoiceVPNDigitManipulationOperationOptionalValue APPEND()
 * @method static EnterpriseVoiceVPNDigitManipulationOperationOptionalValue INSERT()
 * @method static EnterpriseVoiceVPNDigitManipulationOperationOptionalValue TRIM()
 * @EnumValueType string
 */
class EnterpriseVoiceVPNDigitManipulationOperationOptionalValue extends \MyCLabs\Enum\Enum
{
    public const PREPEND = 'Prepend';

    public const OVERWRITE = 'Overwrite';

    public const RIGHT_TRIM = 'Right Trim';

    public const REPLACE_ALL = 'Replace All';

    public const LEFT_TRIM = 'Left Trim';

    public const APPEND = 'Append';

    public const INSERT = 'Insert';

    public const TRIM = 'Trim';
}

