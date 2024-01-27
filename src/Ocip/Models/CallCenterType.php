<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterType
 *
 * Call center type.
 *         
 *         The following values are only used in AS data mode and will fail in XS data mode:
 *           Standard
 *           Premium
 *
 * @method static CallCenterType BASIC()
 * @method static CallCenterType STANDARD()
 * @method static CallCenterType PREMIUM()
 * @EnumValueType string
 */
class CallCenterType extends \MyCLabs\Enum\Enum
{
    public const BASIC = 'Basic';

    public const STANDARD = 'Standard';

    public const PREMIUM = 'Premium';
}

