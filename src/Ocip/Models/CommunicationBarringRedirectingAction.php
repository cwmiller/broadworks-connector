<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CommunicationBarringRedirectingAction
 *
 * Possible redirecting actions for Communication Barring.
 *
 * @method static CommunicationBarringRedirectingAction ALLOW()
 * @method static CommunicationBarringRedirectingAction ALLOW_TIMED()
 * @method static CommunicationBarringRedirectingAction BLOCK()
 * @EnumValueType string
 */
class CommunicationBarringRedirectingAction extends \MyCLabs\Enum\Enum
{

    const ALLOW = 'Allow';

    const ALLOW_TIMED = 'Allow Timed';

    const BLOCK = 'Block';


}

