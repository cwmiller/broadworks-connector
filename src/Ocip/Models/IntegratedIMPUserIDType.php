<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * IntegratedIMPUserIDType
 *
 * IMP ID type that determines the IMP ID for Integrated IMP.
 *         "Primary" indicates that the IMP ID is the primary user ID.
 *         "Alternate" indicates that the IMP ID is an alternate user ID.
 *
 * @method static IntegratedIMPUserIDType PRIMARY()
 * @method static IntegratedIMPUserIDType ALTERNATE()
 * @EnumValueType string
 */
class IntegratedIMPUserIDType extends \MyCLabs\Enum\Enum
{
    public const PRIMARY = 'Primary';

    public const ALTERNATE = 'Alternate';
}

