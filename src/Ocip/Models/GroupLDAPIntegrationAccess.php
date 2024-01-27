<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupLDAPIntegrationAccess
 *
 * Group's policy for accessing LDAP Integration configuration.
 *
 * @method static GroupLDAPIntegrationAccess FULL()
 * @method static GroupLDAPIntegrationAccess READ_ONLY()
 * @method static GroupLDAPIntegrationAccess NONE()
 * @EnumValueType string
 */
class GroupLDAPIntegrationAccess extends \MyCLabs\Enum\Enum
{
    public const FULL = 'Full';

    public const READ_ONLY = 'Read-Only';

    public const NONE = 'None';
}

