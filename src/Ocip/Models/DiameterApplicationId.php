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

    const RF = 'Rf';

    const RO = 'Ro';

    const SH = 'Sh';


}

