<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * StirShakenSigningPolicy
 *
 * Stir Shaken Signing Policy.
 *
 * @method static StirShakenSigningPolicy ALL_ELIGIBLE_CALLS()
 * @method static StirShakenSigningPolicy ELIGIBLE_INTER_NETWORK_CALLS()
 * @method static StirShakenSigningPolicy OFF()
 * @EnumValueType string
 */
class StirShakenSigningPolicy extends \MyCLabs\Enum\Enum
{

    const ALL_ELIGIBLE_CALLS = 'All Eligible Calls';

    const ELIGIBLE_INTER_NETWORK_CALLS = 'Eligible Inter-Network Calls';

    const OFF = 'Off';


}

