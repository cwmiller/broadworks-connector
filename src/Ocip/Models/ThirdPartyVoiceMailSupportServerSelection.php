<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ThirdPartyVoiceMailSupportServerSelection
 *
 * Third Party Voice Mail user-level voice mail server choices.
 *
 * @method static ThirdPartyVoiceMailSupportServerSelection GROUP_MAIL_SERVER()
 * @method static ThirdPartyVoiceMailSupportServerSelection
 * USER_SPECIFIC_MAIL_SERVER()
 * @EnumValueType string
 */
class ThirdPartyVoiceMailSupportServerSelection extends \MyCLabs\Enum\Enum
{

    const GROUP_MAIL_SERVER = 'Group Mail Server';

    const USER_SPECIFIC_MAIL_SERVER = 'User Specific Mail Server';


}

