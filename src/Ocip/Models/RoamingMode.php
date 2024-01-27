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
    public const CDMA = 'CDMA';

    public const GSM = 'GSM';

    public const NONE = 'None';
}

