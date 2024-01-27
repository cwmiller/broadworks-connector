<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * MusicOnHoldUserMessageSelection
 *
 * Music On Hold User Message Selection.
 *
 * @method static MusicOnHoldUserMessageSelection GROUP()
 * @method static MusicOnHoldUserMessageSelection CUSTOM()
 * @EnumValueType string
 */
class MusicOnHoldUserMessageSelection extends \MyCLabs\Enum\Enum
{
    public const GROUP = 'Group';

    public const CUSTOM = 'Custom';
}

