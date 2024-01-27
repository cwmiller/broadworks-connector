<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseInternalCallsCLIDPolicy
 *
 * Internal Call CLID Policy applicable to enterprise.
 *
 * @method static EnterpriseInternalCallsCLIDPolicy USE_EXTENSION()
 * @method static EnterpriseInternalCallsCLIDPolicy USE_LOCATION_CODE_PLUS_EXTENSION()
 * @method static EnterpriseInternalCallsCLIDPolicy USE_EXTERNAL_CALLS_POLICY()
 * @EnumValueType string
 */
class EnterpriseInternalCallsCLIDPolicy extends \MyCLabs\Enum\Enum
{
    public const USE_EXTENSION = 'Use Extension';

    public const USE_LOCATION_CODE_PLUS_EXTENSION = 'Use Location Code plus Extension';

    public const USE_EXTERNAL_CALLS_POLICY = 'Use External Calls Policy';
}

