<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * TrunkGroupOutOfDialogPBXRedirectionCLIDMapping
 *
 * Parameter to control whether to enable Trunking OOD PBX Redirection CLID
 * mapping.
 *
 * @method static TrunkGroupOutOfDialogPBXRedirectionCLIDMapping DISABLED()
 * @method static TrunkGroupOutOfDialogPBXRedirectionCLIDMapping
 * ENABLED_AND_IGNORE_POLICIES()
 * @method static TrunkGroupOutOfDialogPBXRedirectionCLIDMapping
 * ENABLED_AND_APPLY_POLICIES()
 * @ValueType string
 */
class TrunkGroupOutOfDialogPBXRedirectionCLIDMapping extends \MyCLabs\Enum\Enum
{

    const DISABLED = 'Disabled';

    const ENABLED_AND_IGNORE_POLICIES = 'Enabled And Ignore Policies';

    const ENABLED_AND_APPLY_POLICIES = 'Enabled And Apply Policies';


}

