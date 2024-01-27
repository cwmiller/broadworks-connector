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
    public const EXTENSION = 'Extension';

    public const PHONE_NUMBER = 'Phone Number';
}

