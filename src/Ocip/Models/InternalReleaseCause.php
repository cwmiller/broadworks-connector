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
 * @ValueType string
 */
class InternalReleaseCause extends \MyCLabs\Enum\Enum
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


}

