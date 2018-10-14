<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * TagReencryptionTaskStatus
 *
 * Tag Re-encryption task status value.
 *
 * @method static TagReencryptionTaskStatus NOT_STARTED()
 * @method static TagReencryptionTaskStatus PROCESSING()
 * @ValueType string
 */
class TagReencryptionTaskStatus extends \MyCLabs\Enum\Enum
{

    const NOT_STARTED = 'Not Started';

    const PROCESSING = 'Processing';


}

