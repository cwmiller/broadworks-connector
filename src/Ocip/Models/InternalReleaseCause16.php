<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * InternalReleaseCause16
 *
 * Possible values for the protocol-neutral internal release cause.
 *
 * @method static InternalReleaseCause16 BUSY()
 * @method static InternalReleaseCause16 FORBIDDEN()
 * @method static InternalReleaseCause16 ROUTING_FAILURE()
 * @method static InternalReleaseCause16 GLOBAL_FAILURE()
 * @method static InternalReleaseCause16 REQUEST_FAILURE()
 * @method static InternalReleaseCause16 SERVER_FAILURE()
 * @method static InternalReleaseCause16 TRANSLATION_FAILURE()
 * @method static InternalReleaseCause16 TEMPORARILY_UNAVAILABLE()
 * @method static InternalReleaseCause16 USER_NOT_FOUND()
 * @method static InternalReleaseCause16 REQUEST_TIMEOUT()
 * @method static InternalReleaseCause16 DIAL_TONE_TIMEOUT()
 * @method static InternalReleaseCause16 INSUFFICIENT_CREDITS()
 * @EnumValueType string
 */
class InternalReleaseCause16 extends \MyCLabs\Enum\Enum
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

    public const INSUFFICIENT_CREDITS = 'Insufficient Credits';
}

