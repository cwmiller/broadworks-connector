<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CommunicationBarringIncomingAction
 *
 * Possible incoming call actions for Communication Barring.
 *
 * @method static CommunicationBarringIncomingAction ALLOW()
 * @method static CommunicationBarringIncomingAction ALLOW_TIMED()
 * @method static CommunicationBarringIncomingAction BLOCK()
 * @EnumValueType string
 */
class CommunicationBarringIncomingAction extends \MyCLabs\Enum\Enum
{
    public const ALLOW = 'Allow';

    public const ALLOW_TIMED = 'Allow Timed';

    public const BLOCK = 'Block';
}

