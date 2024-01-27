<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * InternalReleaseCause
 *
 * Possible values for the protocol-neutral internal release cause.
 *           Replaced By: InternalReleaseCause16
 *
 * @method static InternalReleaseCause BUSY()
 * @method static InternalReleaseCause FORBIDDEN()
 * @method static InternalReleaseCause ROUTING_FAILURE()
 * @method static InternalReleaseCause GLOBAL_FAILURE()
 * @method static InternalReleaseCause REQUEST_FAILURE()
 * @method static InternalReleaseCause SERVER_FAILURE()
 * @method static InternalReleaseCause TRANSLATION_FAILURE()
 * @method static InternalReleaseCause TEMPORARILY_UNAVAILABLE()
 * @method static InternalReleaseCause USER_NOT_FOUND()
 * @method static InternalReleaseCause REQUEST_TIMEOUT()
 * @method static InternalReleaseCause DIAL_TONE_TIMEOUT()
 * @EnumValueType string
 */
class InternalReleaseCause extends \MyCLabs\Enum\Enum
{
    public const BUSY = 'Busy';

    public const FORBIDDEN = 'Forbidden';

    public const ROUTING_FAILURE = 'Routing Failure';

    public const GLOBAL_FAILURE = 'Global Failure';

    public const REQUEST_FAILURE = 'Request Failure';

    public const SERVER_FAILURE = 'Server Failure';

    public const TRANSLATION_FAILURE = 'Translation Failure';

    public const TEMPORARILY_UNAVAILABLE = 'Temporarily Unavailable';

    public const USER_NOT_FOUND = 'User Not Found';

    public const REQUEST_TIMEOUT = 'Request Timeout';

    public const DIAL_TONE_TIMEOUT = 'Dial Tone Timeout';
}

