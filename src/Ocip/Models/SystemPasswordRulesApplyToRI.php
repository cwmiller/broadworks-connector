<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemPasswordRulesApplyToRI
 *
 * User types for which the System Password Rules apply.
 *         The rules could apply to the
 *           (1) System, Provisioning Administrator
 *           (2) System, Provisioning Administrator. All other administrators and users use external authentication
 *           (3) System, Provisioning Administrator. All other administrators and users use their organization's password rules
 *           (4) System, Provisioning, Service Provider Administrator
 *           (5) Administrator (System, Provisioning, Service Provider, Group and Department) and Users.
 *           
 *         The following value can only be returned in XS data mode :
 *         System, Provisioning Administrator
 *
 *         The following values can only be returned in AS data mode :
 *         System, Provisioning Administrator. All other administrators and users use external authentication
 *         System, Provisioning Administrator. All other administrators and users use their organization's password rules
 *
 * @method static SystemPasswordRulesApplyToRI SYSTEM_PROVISIONING_ADMINISTRATOR()
 * @method static SystemPasswordRulesApplyToRI SYSTEM_PROVISIONING_ADMINISTRATOR_ALL_OTHER_ADMINISTRATORS_AND_USERS_USE_EXTERNAL_AUTHENTICATION()
 * @method static SystemPasswordRulesApplyToRI SYSTEM_PROVISIONING_ADMINISTRATOR_ALL_OTHER_ADMINISTRATORS_AND_USERS_USE_THEIR_ORGANIZATION_S_PASSWORD_RULES()
 * @method static SystemPasswordRulesApplyToRI SYSTEM_PROVISIONING_SERVICE_PROVIDER_ADMINISTRATOR()
 * @method static SystemPasswordRulesApplyToRI ADMINISTRATOR_AND_USER()
 * @EnumValueType string
 */
class SystemPasswordRulesApplyToRI extends \MyCLabs\Enum\Enum
{
    public const SYSTEM_PROVISIONING_ADMINISTRATOR = 'System, Provisioning Administrator';

    public const SYSTEM_PROVISIONING_ADMINISTRATOR_ALL_OTHER_ADMINISTRATORS_AND_USERS_USE_EXTERNAL_AUTHENTICATION = 'System, Provisioning Administrator. All other administrators and users use external authentication';

    public const SYSTEM_PROVISIONING_ADMINISTRATOR_ALL_OTHER_ADMINISTRATORS_AND_USERS_USE_THEIR_ORGANIZATION_S_PASSWORD_RULES = 'System, Provisioning Administrator. All other administrators and users use their organization\'s password rules';

    public const SYSTEM_PROVISIONING_SERVICE_PROVIDER_ADMINISTRATOR = 'System, Provisioning, Service Provider Administrator';

    public const ADMINISTRATOR_AND_USER = 'Administrator and User';
}

