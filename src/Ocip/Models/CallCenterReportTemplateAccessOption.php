<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterReportTemplateAccessOption
 *
 * The call center enhanced reporting template access option.
 *
 * @method static CallCenterReportTemplateAccessOption SUPERVISOR_ONLY()
 * @method static CallCenterReportTemplateAccessOption SUPERVISOR_AND_AGENT()
 * @ValueType string
 */
class CallCenterReportTemplateAccessOption extends \MyCLabs\Enum\Enum
{

    const SUPERVISOR_ONLY = 'Supervisor Only';

    const SUPERVISOR_AND_AGENT = 'Supervisor and Agent';


}

