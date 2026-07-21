<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * MusicOnHoldMessageSelectionRI
 *
 * Music On Hold Message Selection.
 *         The following values are only used in AS data mode and will fail in XS data mode: 
 *           URL
 *
 * @method static MusicOnHoldMessageSelectionRI SYSTEM()
 * @method static MusicOnHoldMessageSelectionRI EXTERNAL()
 * @method static MusicOnHoldMessageSelectionRI CUSTOM()
 * @method static MusicOnHoldMessageSelectionRI URL()
 * @EnumValueType string
 */
class MusicOnHoldMessageSelectionRI extends \MyCLabs\Enum\Enum
{
    public const SYSTEM = 'System';

    public const EXTERNAL = 'External';

    public const CUSTOM = 'Custom';

    public const URL = 'URL';
}

