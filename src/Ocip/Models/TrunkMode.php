<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * TrunkMode
 *
 * Trunk Mode Options
 *
 * @method static TrunkMode PILOT()
 * @method static TrunkMode PROXY()
 * @method static TrunkMode USER()
 * @EnumValueType string
 */
class TrunkMode extends \MyCLabs\Enum\Enum
{
    public const PILOT = 'Pilot';

    public const PROXY = 'Proxy';

    public const USER = 'User';
}

