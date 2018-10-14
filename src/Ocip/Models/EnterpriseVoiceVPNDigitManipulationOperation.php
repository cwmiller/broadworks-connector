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
 * @ValueType string
 */
class EnterpriseVoiceVPNDigitManipulationOperation extends \MyCLabs\Enum\Enum
{

    const PREPEND = 'Prepend';

    const END = 'End';

    const OVERWRITE = 'Overwrite';

    const RIGHT_TRIM = 'Right Trim';

    const REPLACE_ALL = 'Replace All';

    const LEFT_TRIM = 'Left Trim';

    const APPEND = 'Append';

    const POSITION = 'Position';

    const INSERT = 'Insert';

    const TRIM = 'Trim';

    const DELETE = 'Delete';

    const MOVE = 'Move';


}

