<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * HoldNormalizationMode
 *
 * Choices for SIP Hold Normalization option
 *
 * @method static HoldNormalizationMode UNSPECIFIED_ADDRESS()
 * @method static HoldNormalizationMode INACTIVE()
 * @method static HoldNormalizationMode RFC3264()
 * @EnumValueType string
 */
class HoldNormalizationMode extends \MyCLabs\Enum\Enum
{
    public const UNSPECIFIED_ADDRESS = 'Unspecified Address';

    public const INACTIVE = 'Inactive';

    public const RFC3264 = 'Rfc3264';
}

