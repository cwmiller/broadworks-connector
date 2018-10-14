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
 * @ValueType string
 */
class MediaBandwidthEnforcementType extends \MyCLabs\Enum\Enum
{

    const ALLOW_ALL = 'Allow All';

    const ALLOW_UNSPECIFIED = 'Allow Unspecified';

    const ENFORCE_ALL = 'Enforce All';


}

