<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterReportTemplateAccessOption
 *
 * The call center enhanced reporting template access option.
 *
 * @method static CallCenterReportTemplateAccessOption SUPERVISOR_ONLY()
 * @method static CallCenterReportTemplateAccessOption SUPERVISOR_AND_AGENT()
 * @EnumValueType string
 */
class CallCenterReportTemplateAccessOption extends \MyCLabs\Enum\Enum
{
    public const SUPERVISOR_ONLY = 'Supervisor Only';

    public const SUPERVISOR_AND_AGENT = 'Supervisor and Agent';
}

