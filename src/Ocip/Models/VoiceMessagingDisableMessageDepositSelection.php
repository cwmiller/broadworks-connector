<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * VoiceMessagingDisableMessageDepositSelection
 *
 * Announcement Selection.
 *
 * @method static VoiceMessagingDisableMessageDepositSelection DISCONNECT()
 * @method static VoiceMessagingDisableMessageDepositSelection FORWARD()
 * @EnumValueType string
 */
class VoiceMessagingDisableMessageDepositSelection extends \MyCLabs\Enum\Enum
{
    public const DISCONNECT = 'Disconnect';

    public const FORWARD = 'Forward';
}

