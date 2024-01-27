<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * VoiceMessagingGroupMailServerChoices
 *
 * Voice Messaging group-level mail server choices.
 *
 * @method static VoiceMessagingGroupMailServerChoices SYSTEM_MAIL_SERVER()
 * @method static VoiceMessagingGroupMailServerChoices GROUP_MAIL_SERVER()
 * @EnumValueType string
 */
class VoiceMessagingGroupMailServerChoices extends \MyCLabs\Enum\Enum
{
    public const SYSTEM_MAIL_SERVER = 'System Mail Server';

    public const GROUP_MAIL_SERVER = 'Group Mail Server';
}

