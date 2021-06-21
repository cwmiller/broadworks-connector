<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * StirShakenTaggingPolicy
 *
 * Stir Shaken Tagging Policy.
 *
 * @method static StirShakenTaggingPolicy ALL_ELIGIBLE_CALLS()
 * @method static StirShakenTaggingPolicy ELIGIBLE_INTRA_NETWORK_CALLS()
 * @method static StirShakenTaggingPolicy OFF()
 * @EnumValueType string
 */
class StirShakenTaggingPolicy extends \MyCLabs\Enum\Enum
{

    const ALL_ELIGIBLE_CALLS = 'All Eligible Calls';

    const ELIGIBLE_INTRA_NETWORK_CALLS = 'Eligible Intra-Network Calls';

    const OFF = 'Off';


}

