<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAdminCommunicationBarringUserProfileAccess
 *
 * Policy for accessing the user Communication Barring user profile configuration.
 *
 * @method static GroupAdminCommunicationBarringUserProfileAccess FULL()
 * @method static GroupAdminCommunicationBarringUserProfileAccess NONE()
 * @EnumValueType string
 */
class GroupAdminCommunicationBarringUserProfileAccess extends \MyCLabs\Enum\Enum
{
    public const FULL = 'Full';

    public const NONE = 'None';
}

