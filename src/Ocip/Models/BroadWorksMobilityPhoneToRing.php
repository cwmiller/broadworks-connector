<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * BroadWorksMobilityPhoneToRing
 *
 * BroadWorks Mobility interrupt type.
 *
 * @method static BroadWorksMobilityPhoneToRing FIXED()
 * @method static BroadWorksMobilityPhoneToRing MOBILE()
 * @method static BroadWorksMobilityPhoneToRing BOTH()
 * @EnumValueType string
 */
class BroadWorksMobilityPhoneToRing extends \MyCLabs\Enum\Enum
{
    public const FIXED = 'Fixed';

    public const MOBILE = 'Mobile';

    public const BOTH = 'Both';
}

