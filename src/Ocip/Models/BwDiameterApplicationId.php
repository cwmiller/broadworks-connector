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
    public const RF = 'Rf';

    public const RO = 'Ro';

    public const SH = 'Sh';

    public const ALL = 'All';
}

