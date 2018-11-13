<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * VoiceMessagingUserMailServerSelection
 *
 * Voice Messaging user-level mail server choices.
 *
 * @method static VoiceMessagingUserMailServerSelection GROUP_MAIL_SERVER()
 * @method static VoiceMessagingUserMailServerSelection PERSONAL_MAIL_SERVER()
 * @EnumValueType string
 */
class VoiceMessagingUserMailServerSelection extends \MyCLabs\Enum\Enum
{

    const GROUP_MAIL_SERVER = 'Group Mail Server';

    const PERSONAL_MAIL_SERVER = 'Personal Mail Server';


}

