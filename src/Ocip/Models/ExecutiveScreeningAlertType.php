<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ExecutiveScreeningAlertType
 *
 * Executive screening alert type.
 *
 * @method static ExecutiveScreeningAlertType SILENT()
 * @method static ExecutiveScreeningAlertType RING_SPLASH()
 * @EnumValueType string
 */
class ExecutiveScreeningAlertType extends \MyCLabs\Enum\Enum
{
    public const SILENT = 'Silent';

    public const RING_SPLASH = 'Ring Splash';
}

