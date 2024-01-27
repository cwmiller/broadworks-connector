<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ChargingFunctionElementServerType
 *
 * ChargingFunctionElement Server types.
 *
 * @method static ChargingFunctionElementServerType CCF()
 * @method static ChargingFunctionElementServerType ECF()
 * @EnumValueType string
 */
class ChargingFunctionElementServerType extends \MyCLabs\Enum\Enum
{
    public const CCF = 'CCF';

    public const ECF = 'ECF';
}

