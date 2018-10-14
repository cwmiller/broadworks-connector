<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * OrganizationType
 *
 * Types of organizations.
 *
 * @method static OrganizationType SERVICE_PROVIDER()
 * @method static OrganizationType ENTERPRISE()
 * @ValueType string
 */
class OrganizationType extends \MyCLabs\Enum\Enum
{

    const SERVICE_PROVIDER = 'Service Provider';

    const ENTERPRISE = 'Enterprise';


}

