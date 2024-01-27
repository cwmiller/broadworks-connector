<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ThirdPartyVoiceMailSupportMailboxIdType
 *
 * Mailbox Id type on Third Party Voice Mail platform.
 *
 * @method static ThirdPartyVoiceMailSupportMailboxIdType USER_OR_GROUP_PHONE_NUMBER()
 * @method static ThirdPartyVoiceMailSupportMailboxIdType URL()
 * @EnumValueType string
 */
class ThirdPartyVoiceMailSupportMailboxIdType extends \MyCLabs\Enum\Enum
{
    public const USER_OR_GROUP_PHONE_NUMBER = 'User Or Group Phone Number';

    public const URL = 'URL';
}

