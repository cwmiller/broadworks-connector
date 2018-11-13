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

    const FULL = 'Full';

    const READ_ONLY = 'Read-Only';

    const NONE = 'None';


}

