<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemPasswordRulesApplyTo
 *
 * User types for which the System Password Rules apply.
 *         The rules could apply to the
 *           (1) System, Provisioning Administrator
 *           (2) System, Provisioning, Service Provider Administrator
 *           (3) Administrator (System, Provisioning, Service Provider, Group and
 * Department) and Users.
 *
 * @method static SystemPasswordRulesApplyTo SYSTEM_PROVISIONING_ADMINISTRATOR()
 * @method static SystemPasswordRulesApplyTo
 * SYSTEM_PROVISIONING_SERVICE_PROVIDER_ADMINISTRATOR()
 * @method static SystemPasswordRulesApplyTo ADMINISTRATOR_AND_USER()
 * @EnumValueType string
 */
class SystemPasswordRulesApplyTo extends \MyCLabs\Enum\Enum
{

    const SYSTEM_PROVISIONING_ADMINISTRATOR = 'System, Provisioning Administrator';

    const SYSTEM_PROVISIONING_SERVICE_PROVIDER_ADMINISTRATOR = 'System, Provisioning, Service Provider Administrator';

    const ADMINISTRATOR_AND_USER = 'Administrator and User';


}

