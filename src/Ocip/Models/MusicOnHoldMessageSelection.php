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
 * @ValueType string
 */
class MusicOnHoldMessageSelection extends \MyCLabs\Enum\Enum
{

    const SYSTEM = 'System';

    const EXTERNAL = 'External';

    const CUSTOM = 'Custom';


}

