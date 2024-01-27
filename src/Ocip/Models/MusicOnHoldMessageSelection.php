<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * MusicOnHoldMessageSelection
 *
 * Music On Hold Message Selection.
 *
 * @method static MusicOnHoldMessageSelection SYSTEM()
 * @method static MusicOnHoldMessageSelection EXTERNAL()
 * @method static MusicOnHoldMessageSelection CUSTOM()
 * @EnumValueType string
 */
class MusicOnHoldMessageSelection extends \MyCLabs\Enum\Enum
{
    public const SYSTEM = 'System';

    public const EXTERNAL = 'External';

    public const CUSTOM = 'Custom';
}

