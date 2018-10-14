<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAdminPhoneNumberExtensionAccess
 *
 * Service Provider Administrator's policy for accessing phone numbers or
 *         extensions.
 *
 * @method static ServiceProviderAdminPhoneNumberExtensionAccess FULL()
 * @method static ServiceProviderAdminPhoneNumberExtensionAccess
 * ASSIGN_TO_SERVICES_AND_USERS()
 * @method static ServiceProviderAdminPhoneNumberExtensionAccess READ_ONLY()
 * @ValueType string
 */
class ServiceProviderAdminPhoneNumberExtensionAccess extends \MyCLabs\Enum\Enum
{

    const FULL = 'Full';

    const ASSIGN_TO_SERVICES_AND_USERS = 'Assign To Services and Users';

    const READ_ONLY = 'Read-Only';


}

