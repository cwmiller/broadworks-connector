<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * BwDiameterApplicationId
 *
 * Choices for locally supported Diameter Application Ids.
 *
 * @method static BwDiameterApplicationId RF()
 * @method static BwDiameterApplicationId RO()
 * @method static BwDiameterApplicationId SH()
 * @method static BwDiameterApplicationId ALL()
 * @EnumValueType string
 */
class BwDiameterApplicationId extends \MyCLabs\Enum\Enum
{

    const RF = 'Rf';

    const RO = 'Ro';

    const SH = 'Sh';

    const ALL = 'All';


}

