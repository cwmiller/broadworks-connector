<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * RoamingMode
 *
 * The device configured roaming mode.
 *
 * @method static RoamingMode CDMA()
 * @method static RoamingMode GSM()
 * @method static RoamingMode NONE()
 * @EnumValueType string
 */
class RoamingMode extends \MyCLabs\Enum\Enum
{

    const CDMA = 'CDMA';

    const GSM = 'GSM';

    const NONE = 'None';


}

