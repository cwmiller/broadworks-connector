<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupLDAPIntegrationLevel
 *
 * Choices for the group LDAP directory settings to decide which type of settings
 * to use.
 *
 * @method static GroupLDAPIntegrationLevel SYSTEM()
 * @method static GroupLDAPIntegrationLevel SERVICE_PROVIDER()
 * @method static GroupLDAPIntegrationLevel GROUP()
 * @ValueType string
 */
class GroupLDAPIntegrationLevel extends \MyCLabs\Enum\Enum
{

    const SYSTEM = 'System';

    const SERVICE_PROVIDER = 'Service Provider';

    const GROUP = 'Group';


}

