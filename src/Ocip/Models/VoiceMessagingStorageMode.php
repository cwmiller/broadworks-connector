<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * VoiceMessagingStorageMode
 *
 * Choices for the Voice Messaging Storage mode.
 *
 * @method static VoiceMessagingStorageMode CLOUD()
 * @method static VoiceMessagingStorageMode MAIL_SERVER()
 * @EnumValueType string
 */
class VoiceMessagingStorageMode extends \MyCLabs\Enum\Enum
{

    const CLOUD = 'Cloud';

    const MAIL_SERVER = 'Mail Server';


}

