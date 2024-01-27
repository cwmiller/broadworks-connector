<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SIPOriginatingTrunkGroupFormat
 *
 * Choices for originating trunk group format.
 *
 * @method static SIPOriginatingTrunkGroupFormat OTG()
 * @method static SIPOriginatingTrunkGroupFormat X_NORTEL_PROFILE()
 * @EnumValueType string
 */
class SIPOriginatingTrunkGroupFormat extends \MyCLabs\Enum\Enum
{
    public const OTG = 'OTG';

    public const X_NORTEL_PROFILE = 'X Nortel Profile';
}

