<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * TrunkGroupSupportConnectedIdentityPolicy
 *
 * Choices for Support Connected Identity Policy
 *
 * @method static TrunkGroupSupportConnectedIdentityPolicy ENABLED()
 * @method static TrunkGroupSupportConnectedIdentityPolicy DISABLED()
 * @EnumValueType string
 */
class TrunkGroupSupportConnectedIdentityPolicy extends \MyCLabs\Enum\Enum
{
    public const ENABLED = 'Enabled';

    public const DISABLED = 'Disabled';
}

