<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * VoiceMessagingMailServerProtocolRI
 *
 * Protocol used by mail server holding voice messages
 *
 * @method static VoiceMessagingMailServerProtocolRI POP3()
 * @method static VoiceMessagingMailServerProtocolRI IMAP()
 * @method static VoiceMessagingMailServerProtocolRI POP3S()
 * @method static VoiceMessagingMailServerProtocolRI IMAPS()
 * @method static VoiceMessagingMailServerProtocolRI POP3_STLS()
 * @method static VoiceMessagingMailServerProtocolRI IMAP_STLS()
 * @EnumValueType string
 */
class VoiceMessagingMailServerProtocolRI extends \MyCLabs\Enum\Enum
{
    public const POP3 = 'POP3';

    public const IMAP = 'IMAP';

    public const POP3S = 'POP3S';

    public const IMAPS = 'IMAPS';

    public const POP3_STLS = 'POP3_STLS';

    public const IMAP_STLS = 'IMAP_STLS';
}

