<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * VoiceMessagingMailServerProtocol
 *
 * Protocol used by mail server holding voice messages
 *
 * @method static VoiceMessagingMailServerProtocol POP3()
 * @method static VoiceMessagingMailServerProtocol IMAP()
 * @EnumValueType string
 */
class VoiceMessagingMailServerProtocol extends \MyCLabs\Enum\Enum
{
    public const POP3 = 'POP3';

    public const IMAP = 'IMAP';
}

