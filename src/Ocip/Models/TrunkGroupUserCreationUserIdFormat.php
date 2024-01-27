<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * TrunkGroupUserCreationUserIdFormat
 *
 * User Id format for Trunk Group User Creation.
 *
 * @method static TrunkGroupUserCreationUserIdFormat EXTENSION()
 * @method static TrunkGroupUserCreationUserIdFormat NATIONAL_DN()
 * @method static TrunkGroupUserCreationUserIdFormat E164_FORMAT_NO_PLUS()
 * @EnumValueType string
 */
class TrunkGroupUserCreationUserIdFormat extends \MyCLabs\Enum\Enum
{
    public const EXTENSION = 'Extension';

    public const NATIONAL_DN = 'National DN';

    public const E164_FORMAT_NO_PLUS = 'E164 Format No Plus';
}

