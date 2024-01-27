<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupVoiceMessagingAccess
 *
 * Group's policy for user access to his voice messaging configuration.
 *         "Full" indicates full control over the voice messaging configuration.
 *         "Restricted" indicates that the choice to either use unified messaging option (whereby the user can configure a mail server on which messages are stored)
 *         or to forward the voice message to a designated email address is not available.
 *
 * @method static GroupVoiceMessagingAccess FULL()
 * @method static GroupVoiceMessagingAccess RESTRICTED()
 * @EnumValueType string
 */
class GroupVoiceMessagingAccess extends \MyCLabs\Enum\Enum
{
    public const FULL = 'Full';

    public const RESTRICTED = 'Restricted';
}

