<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderVoicePortalScope
 *
 * Voice Portal Scope.
 *         The Service Provider option allows users to log in to their voice portal
 * using the voice portal
 *         of any group that is both hosted on the same application server and
 * within the same service provider
 *         or enterprise.
 *         The Group option keeps groups completely independent. Users can only log
 * in to their voice portal
 *         using the access number for their group.
 *
 * @method static ServiceProviderVoicePortalScope GROUP()
 * @method static ServiceProviderVoicePortalScope SERVICE_PROVIDER()
 * @ValueType string
 */
class ServiceProviderVoicePortalScope extends \MyCLabs\Enum\Enum
{

    const GROUP = 'Group';

    const SERVICE_PROVIDER = 'Service Provider';


}

