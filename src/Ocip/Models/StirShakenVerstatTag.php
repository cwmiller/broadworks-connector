<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * StirShakenVerstatTag
 *
 * Stir Shaken Verstat Tag.
 *
 * @method static StirShakenVerstatTag TN_VALIDATION_PASSED()
 * @method static StirShakenVerstatTag TN_VALIDATION_FAILED()
 * @method static StirShakenVerstatTag NO_TN_VALIDATION()
 * @EnumValueType string
 */
class StirShakenVerstatTag extends \MyCLabs\Enum\Enum
{
    public const TN_VALIDATION_PASSED = 'TN-Validation-Passed';

    public const TN_VALIDATION_FAILED = 'TN-Validation-Failed';

    public const NO_TN_VALIDATION = 'No-TN-Validation';
}

