<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterReportTemplateLevel
 *
 * Identifies at which level in the system a call center report template is created.
 *
 * @method static CallCenterReportTemplateLevel SYSTEM()
 * @method static CallCenterReportTemplateLevel ENTERPRISE()
 * @method static CallCenterReportTemplateLevel GROUP()
 * @EnumValueType string
 */
class CallCenterReportTemplateLevel extends \MyCLabs\Enum\Enum
{
    public const SYSTEM = 'System';

    public const ENTERPRISE = 'Enterprise';

    public const GROUP = 'Group';
}

