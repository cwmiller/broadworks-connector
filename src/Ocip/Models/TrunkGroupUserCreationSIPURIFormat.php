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
 * @EnumValueType string
 */
class TrunkGroupUserCreationSIPURIFormat extends \MyCLabs\Enum\Enum
{
    public const EXTENSION = 'Extension';

    public const NATIONAL_DN = 'National DN';

    public const E164_FORMAT_NO_PLUS = 'E164 Format No Plus';

    public const E164_FORMAT = 'E164 Format';
}

