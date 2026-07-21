<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterMediaOnHoldMessageSelectionRI
 *
 * Call center media on hold message selection.
 *
 * @method static CallCenterMediaOnHoldMessageSelectionRI _DEFAULT()
 * @method static CallCenterMediaOnHoldMessageSelectionRI URL()
 * @method static CallCenterMediaOnHoldMessageSelectionRI CUSTOM()
 * @method static CallCenterMediaOnHoldMessageSelectionRI EXTERNAL()
 * @method static CallCenterMediaOnHoldMessageSelectionRI GROUP()
 * @EnumValueType string
 */
class CallCenterMediaOnHoldMessageSelectionRI extends \MyCLabs\Enum\Enum
{
    public const _DEFAULT = 'Default';

    public const URL = 'URL';

    public const CUSTOM = 'Custom';

    public const EXTERNAL = 'External';

    public const GROUP = 'Group';
}

