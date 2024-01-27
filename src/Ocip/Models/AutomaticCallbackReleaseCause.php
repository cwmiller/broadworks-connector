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
    public const BUSY = 'Busy';

    public const FORBIDDEN = 'Forbidden';

    public const GLOBAL_FAILURE = 'Global Failure';

    public const REQUEST_FAILURE = 'Request Failure';

    public const SERVER_FAILURE = 'Server Failure';

    public const TRANSLATION_FAILURE = 'Translation Failure';

    public const TEMPORARILY_UNAVAILABLE = 'Temporarily Unavailable';

    public const USER_NOT_FOUND = 'User Not Found';

    public const REQUEST_TIMEOUT = 'Request Timeout';
}

