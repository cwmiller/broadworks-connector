<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterReportServerChoice
 *
 * Call center report server choice.
 *         
 *         Replaced by CallCenterReportServerChoice19
 *
 * @method static CallCenterReportServerChoice CCRS()
 * @method static CallCenterReportServerChoice ENHANCED()
 * @method static CallCenterReportServerChoice BOTH()
 * @EnumValueType string
 */
class CallCenterReportServerChoice extends \MyCLabs\Enum\Enum
{
    public const CCRS = 'CCRS';

    public const ENHANCED = 'Enhanced';

    public const BOTH = 'Both';
}

