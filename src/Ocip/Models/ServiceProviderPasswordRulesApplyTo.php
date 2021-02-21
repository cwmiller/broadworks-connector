<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderPasswordRulesApplyTo
 *
 * User types for which the Service Provider Password Rules apply.
 *         The rules could apply to the Administrators (Group and Department) or
 *         Administrators (Group and Department) and Users.
 *
 * @method static ServiceProviderPasswordRulesApplyTo ADMINISTRATOR()
 * @method static ServiceProviderPasswordRulesApplyTo ADMINISTRATOR_AND_USER()
 * @method static ServiceProviderPasswordRulesApplyTo GROUP_ADMINISTRATOR_AND_USER_EXTERNAL_AUTHENTICATION()
 * @EnumValueType string
 */
class ServiceProviderPasswordRulesApplyTo extends \MyCLabs\Enum\Enum
{

    const ADMINISTRATOR = 'Administrator';

    const ADMINISTRATOR_AND_USER = 'Administrator and User';

    const GROUP_ADMINISTRATOR_AND_USER_EXTERNAL_AUTHENTICATION = 'Group Administrator and User External Authentication';


}

