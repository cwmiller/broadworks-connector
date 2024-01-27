<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * MediaBandwidthEnforcementType
 *
 * Types of bandwidth enforcement.
 *
 * @method static MediaBandwidthEnforcementType ALLOW_ALL()
 * @method static MediaBandwidthEnforcementType ALLOW_UNSPECIFIED()
 * @method static MediaBandwidthEnforcementType ENFORCE_ALL()
 * @EnumValueType string
 */
class MediaBandwidthEnforcementType extends \MyCLabs\Enum\Enum
{
    public const ALLOW_ALL = 'Allow All';

    public const ALLOW_UNSPECIFIED = 'Allow Unspecified';

    public const ENFORCE_ALL = 'Enforce All';
}

