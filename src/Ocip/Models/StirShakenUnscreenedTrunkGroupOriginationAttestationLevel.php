<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * StirShakenUnscreenedTrunkGroupOriginationAttestationLevel
 *
 * Stir Shaken Unscreened Trunk Group Origination Attestation level.
 *
 * @method static StirShakenUnscreenedTrunkGroupOriginationAttestationLevel FULL()
 * @method static StirShakenUnscreenedTrunkGroupOriginationAttestationLevel PARTIAL()
 * @method static StirShakenUnscreenedTrunkGroupOriginationAttestationLevel GATEWAY()
 * @EnumValueType string
 */
class StirShakenUnscreenedTrunkGroupOriginationAttestationLevel extends \MyCLabs\Enum\Enum
{

    const FULL = 'Full';

    const PARTIAL = 'Partial';

    const GATEWAY = 'Gateway';


}

