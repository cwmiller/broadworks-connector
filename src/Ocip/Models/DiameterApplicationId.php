<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DiameterApplicationId
 *
 * Choices for locally supported Diameter Application Ids.
 *
 * @method static DiameterApplicationId RF()
 * @method static DiameterApplicationId RO()
 * @method static DiameterApplicationId SH()
 * @EnumValueType string
 */
class DiameterApplicationId extends \MyCLabs\Enum\Enum
{
    public const RF = 'Rf';

    public const RO = 'Ro';

    public const SH = 'Sh';
}

