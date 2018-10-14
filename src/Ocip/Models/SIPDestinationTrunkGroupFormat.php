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
 * @ValueType string
 */
class SIPDestinationTrunkGroupFormat extends \MyCLabs\Enum\Enum
{

    const DTG = 'DTG';

    const TGRP_IN_CONTACT = 'Tgrp In Contact';

    const TGRP_IN_REQUEST_URI = 'Tgrp In Request URI';

    const X_NORTEL_PROFILE = 'X Nortel Profile';


}

