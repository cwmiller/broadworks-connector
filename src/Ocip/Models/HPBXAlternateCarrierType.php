<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * HPBXAlternateCarrierType
 *
 * Type of Alternate Carriers available for CbC and Preselection.
 *
 * @method static HPBXAlternateCarrierType LOCAL_AND_DISTANT()
 * @method static HPBXAlternateCarrierType DISTANT()
 * @EnumValueType string
 */
class HPBXAlternateCarrierType extends \MyCLabs\Enum\Enum
{
    public const LOCAL_AND_DISTANT = 'Local And Distant';

    public const DISTANT = 'Distant';
}

