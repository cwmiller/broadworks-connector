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
 * @EnumValueType string
 */
class CommunicationBarringCallMeNowAction extends \MyCLabs\Enum\Enum
{
    public const ALLOW = 'Allow';

    public const ALLOW_TIMED = 'Allow Timed';

    public const BLOCK = 'Block';
}

