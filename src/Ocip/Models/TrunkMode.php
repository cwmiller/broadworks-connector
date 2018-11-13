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

    const PILOT = 'Pilot';

    const PROXY = 'Proxy';

    const USER = 'User';


}

