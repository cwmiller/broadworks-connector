<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterType
 *
 * Call center type.
 *
 * @method static CallCenterType BASIC()
 * @method static CallCenterType STANDARD()
 * @method static CallCenterType PREMIUM()
 * @EnumValueType string
 */
class CallCenterType extends \MyCLabs\Enum\Enum
{

    const BASIC = 'Basic';

    const STANDARD = 'Standard';

    const PREMIUM = 'Premium';


}

