<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterReportTemplateLevel
 *
 * Identifies at which level in the system a call center report template is
 * created.
 *
 * @method static CallCenterReportTemplateLevel SYSTEM()
 * @method static CallCenterReportTemplateLevel ENTERPRISE()
 * @method static CallCenterReportTemplateLevel GROUP()
 * @ValueType string
 */
class CallCenterReportTemplateLevel extends \MyCLabs\Enum\Enum
{

    const SYSTEM = 'System';

    const ENTERPRISE = 'Enterprise';

    const GROUP = 'Group';


}

