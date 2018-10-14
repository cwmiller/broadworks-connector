<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CommunicationBarringCallMeNowAction
 *
 * Possible Call Me Now actions for Communication Barring.
 *
 * @method static CommunicationBarringCallMeNowAction ALLOW()
 * @method static CommunicationBarringCallMeNowAction ALLOW_TIMED()
 * @method static CommunicationBarringCallMeNowAction BLOCK()
 * @ValueType string
 */
class CommunicationBarringCallMeNowAction extends \MyCLabs\Enum\Enum
{

    const ALLOW = 'Allow';

    const ALLOW_TIMED = 'Allow Timed';

    const BLOCK = 'Block';


}

