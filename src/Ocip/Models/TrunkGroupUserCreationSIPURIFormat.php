<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * TrunkGroupUserCreationSIPURIFormat
 *
 * SIP URI format for Trunk Group User Creation.
 *
 * @method static TrunkGroupUserCreationSIPURIFormat EXTENSION()
 * @method static TrunkGroupUserCreationSIPURIFormat NATIONAL_DN()
 * @method static TrunkGroupUserCreationSIPURIFormat E164_FORMAT_NO_PLUS()
 * @method static TrunkGroupUserCreationSIPURIFormat E164_FORMAT()
 * @ValueType string
 */
class TrunkGroupUserCreationSIPURIFormat extends \MyCLabs\Enum\Enum
{

    const EXTENSION = 'Extension';

    const NATIONAL_DN = 'National DN';

    const E164_FORMAT_NO_PLUS = 'E164 Format No Plus';

    const E164_FORMAT = 'E164 Format';


}

