<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAdminWebBrandingAccess
 *
 * Service Provider Administrator's policy for accessing web branding.
 *
 * @method static ServiceProviderAdminWebBrandingAccess FULL()
 * @method static ServiceProviderAdminWebBrandingAccess NONE()
 * @EnumValueType string
 */
class ServiceProviderAdminWebBrandingAccess extends \MyCLabs\Enum\Enum
{

    const FULL = 'Full';

    const NONE = 'None';


}

