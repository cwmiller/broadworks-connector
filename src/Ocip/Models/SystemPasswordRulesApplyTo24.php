<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemPasswordRulesApplyTo24
 *
 * User types for which the System Password Rules apply.
 *         The rules could apply to the
 *           (1) System, Provisioning Administrator. All other administrators and users use external authentication
 *           (2) System, Provisioning Administrator. All other administrators and users use their organization's password rules
 *           (3) System, Provisioning, Service Provider Administrator
 *           (4) Administrator (System, Provisioning, Service Provider, Group and Department) and Users.
 *
 * @method static SystemPasswordRulesApplyTo24 SYSTEM_PROVISIONING_ADMINISTRATOR_ALL_OTHER_ADMINISTRATORS_AND_USERS_USE_EXTERNAL_AUTHENTICATION()
 * @method static SystemPasswordRulesApplyTo24 SYSTEM_PROVISIONING_ADMINISTRATOR_ALL_OTHER_ADMINISTRATORS_AND_USERS_USE_THEIR_ORGANIZATION_S_PASSWORD_RULES()
 * @method static SystemPasswordRulesApplyTo24 SYSTEM_PROVISIONING_SERVICE_PROVIDER_ADMINISTRATOR()
 * @method static SystemPasswordRulesApplyTo24 ADMINISTRATOR_AND_USER()
 * @EnumValueType string
 */
class SystemPasswordRulesApplyTo24 extends \MyCLabs\Enum\Enum
{
    public const SYSTEM_PROVISIONING_ADMINISTRATOR_ALL_OTHER_ADMINISTRATORS_AND_USERS_USE_EXTERNAL_AUTHENTICATION = 'System, Provisioning Administrator. All other administrators and users use external authentication';

    public const SYSTEM_PROVISIONING_ADMINISTRATOR_ALL_OTHER_ADMINISTRATORS_AND_USERS_USE_THEIR_ORGANIZATION_S_PASSWORD_RULES = 'System, Provisioning Administrator. All other administrators and users use their organization\'s password rules';

    public const SYSTEM_PROVISIONING_SERVICE_PROVIDER_ADMINISTRATOR = 'System, Provisioning, Service Provider Administrator';

    public const ADMINISTRATOR_AND_USER = 'Administrator and User';
}

