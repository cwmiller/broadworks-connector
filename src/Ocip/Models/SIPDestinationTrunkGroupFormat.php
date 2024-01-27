<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SIPDestinationTrunkGroupFormat
 *
 * Choices for destination trunk group format.
 *
 * @method static SIPDestinationTrunkGroupFormat DTG()
 * @method static SIPDestinationTrunkGroupFormat TGRP_IN_CONTACT()
 * @method static SIPDestinationTrunkGroupFormat TGRP_IN_REQUEST_URI()
 * @method static SIPDestinationTrunkGroupFormat X_NORTEL_PROFILE()
 * @EnumValueType string
 */
class SIPDestinationTrunkGroupFormat extends \MyCLabs\Enum\Enum
{
    public const DTG = 'DTG';

    public const TGRP_IN_CONTACT = 'Tgrp In Contact';

    public const TGRP_IN_REQUEST_URI = 'Tgrp In Request URI';

    public const X_NORTEL_PROFILE = 'X Nortel Profile';
}

