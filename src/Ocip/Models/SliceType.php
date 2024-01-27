<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SliceType
 *
 * Choices for the Slice type.
 *
 * @method static SliceType CALL_PROCESSING()
 * @method static SliceType PROVISIONING()
 * @EnumValueType string
 */
class SliceType extends \MyCLabs\Enum\Enum
{
    public const CALL_PROCESSING = 'Call Processing';

    public const PROVISIONING = 'Provisioning';
}

