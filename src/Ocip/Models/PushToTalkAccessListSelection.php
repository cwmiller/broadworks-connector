<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * PushToTalkAccessListSelection
 *
 * Push to talk access list.
 *
 * @method static PushToTalkAccessListSelection ALLOW_CALLS_FROM_SELECTED_USERS()
 * @method static PushToTalkAccessListSelection ALLOW_CALLS_FROM_EVERYONE_EXCEPT_SELECTED_USERS()
 * @EnumValueType string
 */
class PushToTalkAccessListSelection extends \MyCLabs\Enum\Enum
{
    public const ALLOW_CALLS_FROM_SELECTED_USERS = 'Allow Calls From Selected Users';

    public const ALLOW_CALLS_FROM_EVERYONE_EXCEPT_SELECTED_USERS = 'Allow Calls From Everyone Except Selected Users';
}

