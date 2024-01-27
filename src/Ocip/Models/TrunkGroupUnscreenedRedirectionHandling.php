<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * TrunkGroupUnscreenedRedirectionHandling
 *
 * Options to handle the trunk group INVITEs with an unscreened redirecting identity.
 *
 * @method static TrunkGroupUnscreenedRedirectionHandling REJECT()
 * @method static TrunkGroupUnscreenedRedirectionHandling IGNORE()
 * @method static TrunkGroupUnscreenedRedirectionHandling IGNORE_IF_UNSCREENED_CALLS_DISALLOWED()
 * @method static TrunkGroupUnscreenedRedirectionHandling REJECT_IF_UNSCREENED_CALLS_DISALLOWED()
 * @EnumValueType string
 */
class TrunkGroupUnscreenedRedirectionHandling extends \MyCLabs\Enum\Enum
{
    public const REJECT = 'Reject';

    public const IGNORE = 'Ignore';

    public const IGNORE_IF_UNSCREENED_CALLS_DISALLOWED = 'Ignore If Unscreened Calls Disallowed';

    public const REJECT_IF_UNSCREENED_CALLS_DISALLOWED = 'Reject If Unscreened Calls Disallowed';
}

