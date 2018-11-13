<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * TrunkGroupUnscreenedRedirectionHandling
 *
 * Options to handle the trunk group INVITEs with an unscreened redirecting
 * identity.
 *
 * @method static TrunkGroupUnscreenedRedirectionHandling REJECT()
 * @method static TrunkGroupUnscreenedRedirectionHandling IGNORE()
 * @method static TrunkGroupUnscreenedRedirectionHandling
 * IGNORE_IF_UNSCREENED_CALLS_DISALLOWED()
 * @method static TrunkGroupUnscreenedRedirectionHandling
 * REJECT_IF_UNSCREENED_CALLS_DISALLOWED()
 * @EnumValueType string
 */
class TrunkGroupUnscreenedRedirectionHandling extends \MyCLabs\Enum\Enum
{

    const REJECT = 'Reject';

    const IGNORE = 'Ignore';

    const IGNORE_IF_UNSCREENED_CALLS_DISALLOWED = 'Ignore If Unscreened Calls Disallowed';

    const REJECT_IF_UNSCREENED_CALLS_DISALLOWED = 'Reject If Unscreened Calls Disallowed';


}

