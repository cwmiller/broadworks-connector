<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSIPSupportedInterface
 *
 * Network Server types.
 *
 * @method static SystemSIPSupportedInterface ACCESS()
 * @method static SystemSIPSupportedInterface NETWORK()
 * @method static SystemSIPSupportedInterface BOTH()
 * @EnumValueType string
 */
class SystemSIPSupportedInterface extends \MyCLabs\Enum\Enum
{
    public const ACCESS = 'Access';

    public const NETWORK = 'Network';

    public const BOTH = 'Both';
}

