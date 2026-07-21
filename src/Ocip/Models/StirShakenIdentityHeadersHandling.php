<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * StirShakenIdentityHeadersHandling
 *
 * Stir Shaken Identity Headers Handling.
 *
 * @method static StirShakenIdentityHeadersHandling PROXY_ONLY()
 * @method static StirShakenIdentityHeadersHandling PROXY_AND_SIGN()
 * @method static StirShakenIdentityHeadersHandling OFF()
 * @EnumValueType string
 */
class StirShakenIdentityHeadersHandling extends \MyCLabs\Enum\Enum
{
    public const PROXY_ONLY = 'Proxy Only';

    public const PROXY_AND_SIGN = 'Proxy and Sign';

    public const OFF = 'Off';
}

