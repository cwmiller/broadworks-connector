<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAdminType
 *
 * Service Provider Administrator type
 *         "Normal" indicates the service provider admin is a normal admin.
 *         "Customer" indicates the service provider admin is a customer admin.
 *         "Password Reset Only" indicates the service provider admin is a password
 * reset only admin.
 *
 * @method static ServiceProviderAdminType NORMAL()
 * @method static ServiceProviderAdminType CUSTOMER()
 * @method static ServiceProviderAdminType PASSWORD_RESET_ONLY()
 * @ValueType string
 */
class ServiceProviderAdminType extends \MyCLabs\Enum\Enum
{

    const NORMAL = 'Normal';

    const CUSTOMER = 'Customer';

    const PASSWORD_RESET_ONLY = 'Password Reset Only';


}

