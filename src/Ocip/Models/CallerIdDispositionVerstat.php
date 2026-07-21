<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallerIdDispositionVerstat
 *
 * Caller Id Disposition verstat value.
 *
 * @method static CallerIdDispositionVerstat TN_VALIDATION_PASSED()
 * @method static CallerIdDispositionVerstat TN_VALIDATION_FAILED()
 * @method static CallerIdDispositionVerstat NO_TN_VALIDATION()
 * @method static CallerIdDispositionVerstat NO_VERSTAT()
 * @EnumValueType string
 */
class CallerIdDispositionVerstat extends \MyCLabs\Enum\Enum
{
    public const TN_VALIDATION_PASSED = 'TN-Validation-Passed';

    public const TN_VALIDATION_FAILED = 'TN-Validation-Failed';

    public const NO_TN_VALIDATION = 'No-TN-Validation';

    public const NO_VERSTAT = 'No-Verstat';
}

