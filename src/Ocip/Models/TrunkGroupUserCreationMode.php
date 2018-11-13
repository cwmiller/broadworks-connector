<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * TrunkGroupUserCreationMode
 *
 * Trunk Group user creation mode.
 *
 * @method static TrunkGroupUserCreationMode EXTENSION()
 * @method static TrunkGroupUserCreationMode PHONE_NUMBER()
 * @EnumValueType string
 */
class TrunkGroupUserCreationMode extends \MyCLabs\Enum\Enum
{

    const EXTENSION = 'Extension';

    const PHONE_NUMBER = 'Phone Number';


}

