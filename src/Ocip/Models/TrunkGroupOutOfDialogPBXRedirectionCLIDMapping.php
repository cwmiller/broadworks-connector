<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * TrunkGroupOutOfDialogPBXRedirectionCLIDMapping
 *
 * Parameter to control whether to enable Trunking OOD PBX Redirection CLID mapping.
 *
 * @method static TrunkGroupOutOfDialogPBXRedirectionCLIDMapping DISABLED()
 * @method static TrunkGroupOutOfDialogPBXRedirectionCLIDMapping ENABLED_AND_IGNORE_POLICIES()
 * @method static TrunkGroupOutOfDialogPBXRedirectionCLIDMapping ENABLED_AND_APPLY_POLICIES()
 * @EnumValueType string
 */
class TrunkGroupOutOfDialogPBXRedirectionCLIDMapping extends \MyCLabs\Enum\Enum
{
    public const DISABLED = 'Disabled';

    public const ENABLED_AND_IGNORE_POLICIES = 'Enabled And Ignore Policies';

    public const ENABLED_AND_APPLY_POLICIES = 'Enabled And Apply Policies';
}

