<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * StirShakenVerificationErrorHandling
 *
 * Stir Shaken verification error handling.
 *
 * @method static StirShakenVerificationErrorHandling ABORT()
 * @method static StirShakenVerificationErrorHandling PROCEED()
 * @EnumValueType string
 */
class StirShakenVerificationErrorHandling extends \MyCLabs\Enum\Enum
{

    const ABORT = 'Abort';

    const PROCEED = 'Proceed';


}

