<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * StirShakenAttestationLevel
 *
 * Stir Shaken attestation.
 *
 * @method static StirShakenAttestationLevel FULL()
 * @method static StirShakenAttestationLevel PARTIAL()
 * @method static StirShakenAttestationLevel GATEWAY()
 * @EnumValueType string
 */
class StirShakenAttestationLevel extends \MyCLabs\Enum\Enum
{
    public const FULL = 'Full';

    public const PARTIAL = 'Partial';

    public const GATEWAY = 'Gateway';
}

