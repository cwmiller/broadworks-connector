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
 * @ValueType string
 */
class TrunkGroupUserCreationUserIdFormat extends \MyCLabs\Enum\Enum
{

    const EXTENSION = 'Extension';

    const NATIONAL_DN = 'National DN';

    const E164_FORMAT_NO_PLUS = 'E164 Format No Plus';


}

