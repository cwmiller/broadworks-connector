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

    const FULL = 'Full';

    const PARTIAL = 'Partial';

    const GATEWAY = 'Gateway';


}

