<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoicePortalScope
 *
 * Voice Portal Scope.
 *         When set to System, users can call any group voice portal hosted on the same Application Server
 *         as themselves rather than only the voice portal of their own group to initiate the login process.
 *         When set to Service Providers, the voice portal scope is configured within the Service Provider.
 *
 * @method static SystemVoicePortalScope SERVICE_PROVIDER()
 * @method static SystemVoicePortalScope SYSTEM()
 * @EnumValueType string
 */
class SystemVoicePortalScope extends \MyCLabs\Enum\Enum
{

    const SERVICE_PROVIDER = 'Service Provider';

    const SYSTEM = 'System';


}

