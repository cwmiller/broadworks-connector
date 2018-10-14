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
 * @ValueType string
 */
class InternalReleaseCause16 extends \MyCLabs\Enum\Enum
{

    const BUSY = 'Busy';

    const FORBIDDEN = 'Forbidden';

    const ROUTING_FAILURE = 'Routing Failure';

    const GLOBAL_FAILURE = 'Global Failure';

    const REQUEST_FAILURE = 'Request Failure';

    const SERVER_FAILURE = 'Server Failure';

    const TRANSLATION_FAILURE = 'Translation Failure';

    const TEMPORARILY_UNAVAILABLE = 'Temporarily Unavailable';

    const USER_NOT_FOUND = 'User Not Found';

    const REQUEST_TIMEOUT = 'Request Timeout';

    const DIAL_TONE_TIMEOUT = 'Dial Tone Timeout';

    const INSUFFICIENT_CREDITS = 'Insufficient Credits';


}

