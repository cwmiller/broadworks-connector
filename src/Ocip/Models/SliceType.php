<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SliceType
 *
 * Choices for the Slice type.
 *
 * @method static SliceType CALL_PROCESSING()
 * @method static SliceType PROVISIONING()
 * @ValueType string
 */
class SliceType extends \MyCLabs\Enum\Enum
{

    const CALL_PROCESSING = 'Call Processing';

    const PROVISIONING = 'Provisioning';


}

