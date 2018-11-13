<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AutomaticCallbackReleaseCause
 *
 * Callback Release Cause.
 *
 * @method static AutomaticCallbackReleaseCause BUSY()
 * @method static AutomaticCallbackReleaseCause FORBIDDEN()
 * @method static AutomaticCallbackReleaseCause GLOBAL_FAILURE()
 * @method static AutomaticCallbackReleaseCause REQUEST_FAILURE()
 * @method static AutomaticCallbackReleaseCause SERVER_FAILURE()
 * @method static AutomaticCallbackReleaseCause TRANSLATION_FAILURE()
 * @method static AutomaticCallbackReleaseCause TEMPORARILY_UNAVAILABLE()
 * @method static AutomaticCallbackReleaseCause USER_NOT_FOUND()
 * @method static AutomaticCallbackReleaseCause REQUEST_TIMEOUT()
 * @EnumValueType string
 */
class AutomaticCallbackReleaseCause extends \MyCLabs\Enum\Enum
{

    const BUSY = 'Busy';

    const FORBIDDEN = 'Forbidden';

    const GLOBAL_FAILURE = 'Global Failure';

    const REQUEST_FAILURE = 'Request Failure';

    const SERVER_FAILURE = 'Server Failure';

    const TRANSLATION_FAILURE = 'Translation Failure';

    const TEMPORARILY_UNAVAILABLE = 'Temporarily Unavailable';

    const USER_NOT_FOUND = 'User Not Found';

    const REQUEST_TIMEOUT = 'Request Timeout';


}

