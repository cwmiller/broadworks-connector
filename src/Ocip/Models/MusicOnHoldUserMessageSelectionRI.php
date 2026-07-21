<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * MusicOnHoldUserMessageSelectionRI
 *
 * Music On Hold User Message Selection.
 *         The following values are only used in AS data mode and will fail in XS data mode: 
 *           URL
 *
 * @method static MusicOnHoldUserMessageSelectionRI GROUP()
 * @method static MusicOnHoldUserMessageSelectionRI CUSTOM()
 * @method static MusicOnHoldUserMessageSelectionRI URL()
 * @EnumValueType string
 */
class MusicOnHoldUserMessageSelectionRI extends \MyCLabs\Enum\Enum
{
    public const GROUP = 'Group';

    public const CUSTOM = 'Custom';

    public const URL = 'URL';
}

