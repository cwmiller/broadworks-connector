<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallerIdDisposition
 *
 * Caller Id Disposition value.
 *
 * @method static CallerIdDisposition VALID()
 * @method static CallerIdDisposition INVALID()
 * @method static CallerIdDisposition UNVERIFIED()
 * @method static CallerIdDisposition NONE()
 * @EnumValueType string
 */
class CallerIdDisposition extends \MyCLabs\Enum\Enum
{
    public const VALID = 'Valid';

    public const INVALID = 'Invalid';

    public const UNVERIFIED = 'Unverified';

    public const NONE = 'None';
}

