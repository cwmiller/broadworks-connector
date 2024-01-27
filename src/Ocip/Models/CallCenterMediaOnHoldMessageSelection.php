<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterMediaOnHoldMessageSelection
 *
 * Call center media on hold message selection.
 *
 * @method static CallCenterMediaOnHoldMessageSelection _DEFAULT()
 * @method static CallCenterMediaOnHoldMessageSelection URL()
 * @method static CallCenterMediaOnHoldMessageSelection CUSTOM()
 * @method static CallCenterMediaOnHoldMessageSelection EXTERNAL()
 * @EnumValueType string
 */
class CallCenterMediaOnHoldMessageSelection extends \MyCLabs\Enum\Enum
{
    public const _DEFAULT = 'Default';

    public const URL = 'URL';

    public const CUSTOM = 'Custom';

    public const EXTERNAL = 'External';
}

