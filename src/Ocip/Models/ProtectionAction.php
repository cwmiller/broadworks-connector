<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ProtectionAction
 *
 * The action to take for SIP messages that are not processed during Emergency
 * DDos.
 *          Decline      = Respond to the message with 603 + Retry-After
 *          Drop         = Do not respond
 *          Error        = Respond to the message with 503
 *          Redirect     = Respond to the message with 302
 *          Unavailable  = Respond to the message with 480 + Retry-After
 *
 * @method static ProtectionAction DECLINE()
 * @method static ProtectionAction DROP()
 * @method static ProtectionAction ERROR()
 * @method static ProtectionAction REDIRECT()
 * @method static ProtectionAction UNAVAILABLE()
 * @EnumValueType string
 */
class ProtectionAction extends \MyCLabs\Enum\Enum
{

    const DECLINE = 'Decline';

    const DROP = 'Drop';

    const ERROR = 'Error';

    const REDIRECT = 'Redirect';

    const UNAVAILABLE = 'Unavailable';


}

