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

    const TN_VALIDATION_PASSED = 'TN-Validation-Passed';

    const TN_VALIDATION_FAILED = 'TN-Validation-Failed';

    const NO_TN_VALIDATION = 'No-TN-Validation';


}

