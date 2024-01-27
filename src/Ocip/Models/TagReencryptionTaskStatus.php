<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * TagReencryptionTaskStatus
 *
 * Tag Re-encryption task status value.
 *
 * @method static TagReencryptionTaskStatus NOT_STARTED()
 * @method static TagReencryptionTaskStatus PROCESSING()
 * @EnumValueType string
 */
class TagReencryptionTaskStatus extends \MyCLabs\Enum\Enum
{
    public const NOT_STARTED = 'Not Started';

    public const PROCESSING = 'Processing';
}

