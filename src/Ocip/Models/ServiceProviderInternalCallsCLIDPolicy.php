<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderInternalCallsCLIDPolicy
 *
 * Internal Call CLID Policy applicable to service providers.
 *
 * @method static ServiceProviderInternalCallsCLIDPolicy USE_EXTENSION()
 * @method static ServiceProviderInternalCallsCLIDPolicy
 * USE_EXTERNAL_CALLS_POLICY()
 * @ValueType string
 */
class ServiceProviderInternalCallsCLIDPolicy extends \MyCLabs\Enum\Enum
{

    const USE_EXTENSION = 'Use Extension';

    const USE_EXTERNAL_CALLS_POLICY = 'Use External Calls Policy';


}

